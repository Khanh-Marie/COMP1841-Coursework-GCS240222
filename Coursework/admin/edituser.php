<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';
try{
    if(isset($_POST['user_name'])){
        updateUser($pdo, $_POST['userid'], $_POST['user_name'], $_POST['user_email']);
        header('location: user.php');   
    } else{
        $user = getUser($pdo, $_GET['id']);
        $title = 'Edit user';

        ob_start();
        include '../admin_templates/admin_edituser.html.php';
        $output = ob_get_clean();
    }
} catch(PDOException $e){
    $title = 'error has occured';
    $output = 'Error editing user: ' . $e->getMessage();
}
include '../admin_templates/admin_layout.html.php';
?>