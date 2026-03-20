<?php
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';
try{
    if(isset($_POST['module_name'])){
        updateModule($pdo, $_POST['moduleid'], $_POST['module_name']);
        header('location: module.php');   
    } else{
        $module = getModule($pdo, $_GET['id']);
        $title = 'Edit module';

        ob_start();
        include 'templates/editmodule.html.php';
        $output = ob_get_clean();
    }
} catch(PDOException $e){
    $title = 'error has occured';
    $output = 'Error editing module: ' . $e->getMessage();
}
include 'templates/layout.html.php';
?>