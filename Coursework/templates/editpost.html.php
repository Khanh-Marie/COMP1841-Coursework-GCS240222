<form action="" method="post">
    <input type="hidden" name="postid" value="<?=$post['post_id'];?>">
    <label for="post_title">Edit your post here</label>

    <select name="users">
        <option value="">Select an user</option>
        <?php foreach ($users as $user):?>
            <option value="<?=htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>"
                <?= ($user['id'] === $post['user_id']) ? 'selected' : ''?>>
                <?=htmlspecialchars($user['user_name'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
        <?php endforeach;?>
    </select>

    <select name="modules">
        <option value="">Select a module</option>
        <?php foreach ($modules as $module):?>
            <option value="<?=htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8'); ?>"
            <?= ($module['id'] === $post['module_id']) ? 'selected' : ''?>>
            <?=htmlspecialchars($module['module_name'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
        <?php endforeach;?>
    </select>

    <textarea name="post_title" rows="3" cols="40"> <?=$post['post_title']?></textarea>

    <?php if(!empty($post['image']) && file_exists('uploads/' . $post['image'])): ?>
        <img width="100" height="100" src="uploads/<?=htmlspecialchars($post['image'])?>" alt="Post Image">
    <?php else: ?>
        No Image
    <?php endif; ?>
    <br />

    <input type="submit" name="submit" value="Save">

</form>