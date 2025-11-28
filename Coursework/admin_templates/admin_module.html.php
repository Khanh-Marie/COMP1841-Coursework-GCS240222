<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../post.css">
</head>
<body>
<table>
    <tr>
        <th>Module ID</th>
        <th>Module Name</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach($modules as $module): ?>
    <tr>
        <td><?=htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8')?></td>
        
        <td><?=htmlspecialchars($module['module_name'], ENT_QUOTES, 'UTF-8')?></td>

        <td><a href="../admin/editmodule.php?id=<?=$module['id']?>">Edit</a></td>

        <td>
            <form action="deletemodule.php" method="post">
                <input type="hidden" name="id" value="<?=$module['id']?>">
                <input type="submit" value="Delete">
            </form>
        </td> 
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>