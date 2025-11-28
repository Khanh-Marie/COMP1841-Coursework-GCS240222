<form action="" method="post">
    <input type="hidden" name="postid" value="<?=$post['post_id'];?>">
    <label for="post_title">Edit your post here;</label>

    <select name="users">
        <option values="">Select an user</option>
        <?php foreach ($users as $user):?>
            <option value="<?=htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($user['user_name'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
        <?php endforeach;?>
    </select>

    <select name="modules">
        <option values="">Select a module</option>
        <?php foreach ($modules as $module):?>
            <option value="<?=htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($module['module_name'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
        <?php endforeach;?>
    </select>

    <textarea name="post_title" rows="3" cols="40"> <?=$post['post_title']?></textarea>
    <input type="submit" name="submit" value="Save">
</form>