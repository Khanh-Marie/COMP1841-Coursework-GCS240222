<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../post.css">
</head>
<body>
<p><?=$totalPosts?> posts that have been submitted to the Student Post Database.</p>
<table>
    <tr>
        <th>Module</th>
        <th>User</th>
        <th>Title</th>
        <th>Image</th>
        <th>Date</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach($posts as $post): ?>
    <tr>
        <td><?=htmlspecialchars($post['module_name'], ENT_QUOTES, 'UTF-8')?></td>
        <td>
            <a href="mailto:<?=htmlspecialchars($post['user_email'], ENT_QUOTES, 'UTF-8');?>">
                <?=htmlspecialchars($post['user_name'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
        </td>
        
        <td><?=htmlspecialchars($post['post_title'], ENT_QUOTES, 'UTF-8')?></td>

        <td>
            <?php if(!empty($post['image']) && file_exists('../uploads/' . $post['image'])): ?>
                <img width="100" height="100" src="../uploads/<?=htmlspecialchars($post['image'])?>" alt="Post Image">
            <?php else: ?>
                No Image
            <?php endif; ?>
        </td>

        <td><?=htmlspecialchars($post['post_date'], ENT_QUOTES, 'UTF-8')?></td>

        <td><a href="../admin/editpost.php?post_id=<?=$post['post_id']?>">Edit</a></td>
        
        <td>
            <form action="deletepost.php" method="post">
                <input type="hidden" name="post_id" value="<?=$post['post_id']?>">
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>