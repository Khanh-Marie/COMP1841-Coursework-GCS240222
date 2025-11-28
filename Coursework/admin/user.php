<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';

    $users = allUsers($pdo);
    $title = 'User List';

    ob_start();
    include '../admin_templates/admin_user.html.php';
    $output = ob_get_clean();
} catch (PDOException $e){
    $title = 'An Error has occured';
    $output = 'Database error: '. $e->getMessage();
}
include '../admin_templates/admin_layout.html.php';