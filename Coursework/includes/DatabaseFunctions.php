<?php
function totalPosts($pdo){
    $query = query($pdo, 'SELECT COUNT(*) FROM post');
    $row = $query->fetch();
    return $row[0];
}

function query($pdo, $sql, $parameters = []){
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

function getPost($pdo, $id){
    $parameters = [':post_id' => $id];
    $query = query($pdo, 'SELECT * FROM post WHERE post_id = :post_id', $parameters);
    return $query->fetch();
}

function getUser($pdo, $id){
    $parameters = [':id' => $id];
    $query = query($pdo, 'SELECT * FROM user WHERE id = :id', $parameters);
    return $query->fetch();
}

function getModule($pdo, $id){
    $parameters = [':id' => $id];
    $query = query($pdo, 'SELECT * FROM module WHERE id =:id', $parameters);
    return $query->fetch();
}

function updatePost($pdo, $postId, $post_title, $user_id, $module_id) {
    $query = 'UPDATE post 
              SET post_title = :post_title, 
                  user_id = :user_id, 
                  module_id = :module_id 
              WHERE post_id = :post_id';
    
    $parameters = [
        ':post_title' => $post_title, 
        ':user_id' => $user_id,
        ':module_id' => $module_id,
        ':post_id' => $postId
    ];
    
    query($pdo, $query, $parameters);
}

function updateUser($pdo, $userId, $username, $email){
    $query = 'UPDATE user SET id = :id, user_name = :user_name, user_email = :user_email WHERE id = :id';
    $parameters = [
        ':user_name' => $username,
        ':user_email' => $email,
        ':id' => $userId,
    ];
    query($pdo, $query, $parameters);
}

function updateModule($pdo, $moduleId, $modulename){
    $query = 'UPDATE module SET id = :id, module_name = :module_name WHERE id = :id';
    $parameters = [
        ':module_name' => $modulename,
        ':id' => $moduleId,
    ];
    query($pdo, $query, $parameters);
}

function deletePost($pdo, $id){
    $parameters = [':post_id' => $id];
    query($pdo, 'DELETE FROM post WHERE post_id = :post_id', $parameters);
}

function deleteUser($pdo, $id){
    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM user WHERE id =:id', $parameters);
}

function deleteModule($pdo, $id){
    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM module WHERE id =:id', $parameters);
}

function insertPost($pdo, $post_title, $user_id, $module_id, $image) {
    $sql = 'INSERT INTO post (post_title, user_id, module_id, image, post_date) 
            VALUES (:post_title, :user_id, :module_id, :image, NOW())';
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':post_title', $post_title);
    $stmt->bindValue(':user_id', $user_id);
    $stmt->bindValue(':module_id', $module_id);
    $stmt->bindValue(':image', $image);
    
    return $stmt->execute();
}

function allUsers($pdo){
    $users = query($pdo, 'SELECT * FROM user');
    return $users->fetchAll();
}

function allModules($pdo){
    $modules = query($pdo, 'SELECT * FROM module');
    return $modules->fetchAll();
}

function allPosts($pdo){
    $posts = query($pdo, 'SELECT post.post_id, post_title, user_name, user_email, module_name, image, post_date FROM post
    INNER JOIN user ON user_id = user.id
    INNER JOIN module ON module_id = module.id');
    return $posts->fetchAll();
}
