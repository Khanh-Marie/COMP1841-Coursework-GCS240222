<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../post.css">
</head>
<body>
<table>
    <tr>
        <th>User ID</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach($users as $user): ?>
    <tr>
        <td><?=htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8')?></td>
        
        <td><?=htmlspecialchars($user['user_name'], ENT_QUOTES, 'UTF-8')?></td>
        
        <td><?=htmlspecialchars($user['user_email'], ENT_QUOTES, 'UTF-8')?></td>
        
        <td><a href="../admin/edituser.php?id=<?=$user['id']?>">Edit</a></td>
        
        <td>
            <form action="deleteuser.php" method="post">
                <input type="hidden" name="id" value="<?=$user['id']?>">
                <input type="submit" value="Delete">
            </form>
        </td> 
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>