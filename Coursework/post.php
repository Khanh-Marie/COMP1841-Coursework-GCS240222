<?php
try{
    include 'includes/DatabaseConnection.php';
    include 'includes/DatabaseFunctions.php';
    $posts = allPosts($pdo);
    $title = 'Post List';
    $totalPosts = totalPosts($pdo);

    ob_start();
    include 'templates/post.html.php';
    $output = ob_get_clean();
} catch (PDOException $e){
    $title = 'An Error has occured';
    $output = 'Database error: '. $e->getMessage();
}
include 'templates/layout.html.php';