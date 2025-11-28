<?php
require "login/Check.php";
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $posts = allPosts($pdo);
    $title = 'Post List';
    $totalPosts = totalPosts($pdo);

    ob_start();
    include '../admin_templates/admin_post.html.php';
    $output = ob_get_clean();
} catch (PDOException $e){
    $title = 'An Error has occured';
    $output = 'Database error: '. $e->getMessage();
}
include '../admin_templates/admin_layout.html.php';