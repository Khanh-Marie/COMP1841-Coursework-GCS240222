<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    deleteModule($pdo, $_POST['id']);
    header('location: module.php');
} catch(PDOException $e){
    $title = 'An error has occured';
    $output = 'Unable to connect to delete module: ' . $e->getMessage();
}
include '../admin_templates/admin_layout.html.php';
?>