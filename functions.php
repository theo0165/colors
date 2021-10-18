<?php

declare(strict_types=1);

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
