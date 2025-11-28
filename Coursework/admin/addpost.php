<?php
if(isset($_POST['post_title'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/DatabaseFunctions.php';
        $imageFileName = null;
        
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK){
            $uploadDir = '../uploads/';
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            $fileType = $_FILES['image']['type'];

            if(in_array($fileType, $allowedTypes)){
                $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $imageFileName = uniqid() . '.' . $fileExtension;
                $uploadPath = $uploadDir . $imageFileName;

                if(!move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)){
                    throw new Exception('Failed to move uploaded file.');
                }
            } else{
                throw new Exception('Invalid file type.');
            }
        }
        insertPost($pdo, $_POST['post_title'], $_POST['users'], $_POST['modules'], $imageFileName);
        header('location: post.php');
        exit();

    } catch (PDOException $e){
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage();
    } catch (Exception $e){
        $title = 'An error has occured';
        $output = 'File upload error: ' . $e->getMessage();
    }
}else{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $title = 'Add a new post';
    $users = allUsers($pdo);
    $modules = allModules($pdo);
    ob_start();
    include '../templates/addpost.html.php';
    $output = ob_get_clean();
}
include '../admin_templates/admin_layout.html.php';