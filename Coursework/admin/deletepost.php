<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    deletePost($pdo, $_POST['post_id']);
    header('location: post.php');
} catch(PDOException $e){
    $title = 'An error has occured';
    $output = 'Unable to connect to delete post: ' . $e->getMessage();
}
include '../admin_templates/admin_layout.html.php';
?>