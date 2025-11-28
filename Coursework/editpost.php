<?php
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';
try{
    if(isset($_POST['post_title'])){
        updatePost($pdo, $_POST['postid'], $_POST['post_title'], $_POST['users'], $_POST['modules']);
        header('location: post.php');   
    } else{
        $post = getPost($pdo, $_GET['post_id']);
        $title = 'Edit post';
        $users = allUsers($pdo);
        $modules = allModules($pdo);

        ob_start();
        include 'templates/editpost.html.php';
        $output = ob_get_clean();
    }
} catch(PDOException $e){
    $title = 'error has occured';
    $output = 'Error editing post: ' . $e->getMessage();
}
include 'templates/layout.html.php';
?>