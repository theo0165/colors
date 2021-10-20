<?php

declare(strict_types=1);

require __DIR__ . "/settings.php";

function getColorsForPost(PDO $db, int $postId): array
{
    $sql = "SELECT color FROM post_colors WHERE post_id=$postId";
    $query = $db->prepare($sql);
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_COLUMN, 0);

    return $result;
}

function getLikesForPost(PDO $db, int $postId): int
{
    $sql = "SELECT count(post_like.id) as likes FROM post_like WHERE post_like.post_id = $postId";
    $query = $db->prepare($sql);
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_COLUMN, 0);

    return intval($result[0]);
}

function getPosts(PDO $db, $sort = "none"): array
{
    //TODO: Implement top sorting. Sort by number of likes
    if ($sort === "top") {
        $sql = "SELECT * FROM posts";
    } else if ($sort === "new") {
        $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    } else {
        $sql = "SELECT * FROM posts ORDER BY RANDOM()";
    }

    $sql .= " LIMIT 100";

    $query = $db->prepare($sql);
    $query->execute();

    $result = [];

    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $row += ['colors' => getColorsForPost($db, intval($row['id']))];
        $row += ['likes' => getLikesForPost($db, intval($row['id']))];

        array_push($result, $row);
    }

    return $result;
}

function getPost(PDO $db, int $id): array
{
    $sql = "SELECT * FROM posts WHERE id=$id";
    $query = $db->prepare($sql);
    $query->execute();

    $result = [];

    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $row += ['colors' => getColorsForPost($db, intval($row['id']))];
        $row += ['likes' => getLikesForPost($db, intval($row['id']))];

        $result = $row;
    }

    return $result;
}

function searchPost(PDO $db, string $query): array
{
    $query = "%" . $query . "%";
    $search = $db->prepare("SELECT id FROM posts WHERE name LIKE :query");
    $search->bindParam(':query', $query, PDO::PARAM_STR); // This SHOULD sanatize input and prevent sql injection
    $search->execute();

    $result = [];

    while ($row = $search->fetch(PDO::FETCH_ASSOC)) {
        array_push($result, getPost($db, intval($row['id'])));
    }

    return $result;
}

function createPost(PDO $db, string $name, array $colors, $settings): void //Why oh why do i need $settings when settings is always required before this file :/
{
    $db->beginTransaction();
    $nameQuery = "INSERT INTO posts (name) VALUES (:name)";
    $nameQuery = $db->prepare($nameQuery);
    $nameQuery->bindParam(":name", $name, PDO::PARAM_STR);
    $nameQuery->execute();

    $id = $db->lastInsertId();

    if (!empty($id)) {
        foreach ($colors as $color) {
            $colorQuery = "INSERT INTO post_colors (color, post_id) VALUES (:color, :postId)";
            $colorQuery = $db->prepare($colorQuery);
            $colorQuery->bindParam(":color", $color, PDO::PARAM_STR);
            $colorQuery->bindParam(":postId", $id, PDO::PARAM_STR);
            $colorQuery->execute();
        }

        $db->commit();
    } else {
        $db->rollBack();
    }

    header("Location: " . $settings['site_url'] . "/single?id=" . $id);
}

function checkIfIpLikedPost(PDO $db, int $postId, string $ip): bool
{
    $sql = "SELECT * FROM post_like WHERE post_id = $postId AND ip = '$ip'";
    $sql = $db->prepare($sql);
    $sql->execute();

    if (count($sql->fetchAll()) > 0) {
        return true;
    } else {
        return false;
    }
}

function likePost(PDO $db, int $postId, string $ip): void
{
    $sql = "INSERT INTO post_like (post_id, ip) VALUES ($postId, '$ip')";
    $sql = $db->prepare($sql);
    $sql->execute();
}
