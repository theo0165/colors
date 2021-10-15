<?php

function getColorsForPost($db, $postId)
{
    $sql = "SELECT color FROM post_colors WHERE post_id=$postId";
    $query = $db->prepare($sql);
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_COLUMN, 0);

    return $result;
}

function getPosts($db)
{
    if (isset($_GET['top'])) {
        $sql = "SELECT * FROM posts";
    } else if (isset($_GET['new'])) {
        $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    } else {
        $sql = "SELECT * FROM posts ORDER BY RANDOM()";
    }

    $query = $db->prepare($sql);
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}
