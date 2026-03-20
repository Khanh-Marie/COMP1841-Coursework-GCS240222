<?php
if(isset($_POST['module_name'])) {
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/DatabaseFunctions.php';
        insertModule($pdo, $_POST['module_name']);
        header('location: module.php');
        exit();

    }catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $title = 'Add a new module';
    ob_start();
    include '../admin_templates/admin_addmodule.html.php';
    $output = ob_get_clean();
}
include '../admin_templates/admin_layout.html.php';