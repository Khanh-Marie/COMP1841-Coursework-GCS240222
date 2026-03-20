<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $row =getMail($pdo,$_POST['id']);
    deleteMail($pdo, $_POST['id']);
    header('location: mailbox.php');
}catch(PDOException $e) {
$title = 'An error has occured';
$output = 'Unable to connect to delete mail: ' . $e->getMessage();
}
include '../admin_templates/admin_layout.html.php';