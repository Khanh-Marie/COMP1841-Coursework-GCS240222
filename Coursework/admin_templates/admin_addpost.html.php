<form action="" method="post" enctype="multipart/form-data">
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

    <label for='post_title'>Post your question here</label>
    <textarea name="post_title" rows="3" cols="40"></textarea>

    <label for='image'>Upload your image here (optional)</label>
    <input type="file" name="image" accept="image/*">

    <input type="submit" name="submit" value="Add">  
</form>