<?php
if(isset($_POST['user_name'])) {
    try{
        include 'includes/DatabaseConnection.php';
        include 'includes/DatabaseFunctions.php';
        insertUser($pdo, $_POST['user_name'], $_POST['user_email']);
        header('location: user.php');
        exit();

    }catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include 'includes/DatabaseConnection.php';
    include 'includes/DatabaseFunctions.php';
    $title = 'Add a new user';
    ob_start();
    include 'templates/adduser.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';?>