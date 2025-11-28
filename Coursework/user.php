<?php
try{
    include 'includes/DatabaseConnection.php';

    $sql = 'SELECT * FROM user';

    $users = $pdo->query($sql);
    $title = 'User List';

    ob_start();
    include 'templates/user.html.php';
    $output = ob_get_clean();
} catch (PDOException $e){
    $title = 'An Error has occured';
    $output = 'Database error: '. $e->getMessage();
}
include 'templates/layout.html.php';