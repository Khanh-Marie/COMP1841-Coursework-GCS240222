<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';

        $mails = allEmails($pdo);
        $title = 'Mails';

        ob_start();
        include '../admin_templates/admin_mailbox.html.php';
        $output = ob_get_clean();
}catch (PDOException $e) {
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include '../admin_templates/admin_layout.html.php';
?>