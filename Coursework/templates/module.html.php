<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../post.css">
</head>
<body>
<table>
    <tr>
        <th>Module Name</th>
    </tr>
    <?php foreach($modules as $module): ?>
    <tr>
        <td><?=htmlspecialchars($module['module_name'], ENT_QUOTES, 'UTF-8')?></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>