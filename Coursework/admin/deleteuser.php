<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    deleteUser($pdo, $_POST['id']);
    header('location: user.php');
} catch(PDOException $e){
    $title = 'An error has occured';
    $output = 'Unable to connect to delete user: ' . $e->getMessage();
}
include '../admin_templates/admin_layout.html.php';
?>