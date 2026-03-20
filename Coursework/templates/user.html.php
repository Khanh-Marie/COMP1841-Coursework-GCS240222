<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../post.css">
</head>
<body>
<table>
    <tr>
        <th>User Name</th>
        <th>Edit</th>
    </tr>
    <?php foreach($users as $user): ?>
    <tr>
        <td><?=htmlspecialchars($user['user_name'], ENT_QUOTES, 'UTF-8')?></td>
        <td><a href="edituser.php?id=<?=$user['id']?>">Edit</a></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>