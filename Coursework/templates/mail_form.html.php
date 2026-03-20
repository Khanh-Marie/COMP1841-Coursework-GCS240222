<form action="" method="post">
    <?php $title = 'Contact Us';?>
    <textarea name="mailtext" rows="15", cols="40"></textarea><br />
    <select name="users">
    <option value="">select user</option>
    <?php foreach ($users as $user):?>
    <option value="<?=htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>">
    <?=htmlspecialchars($user['user_name'], ENT_QUOTES, 'UTF-8'); ?>
    </option>
    <?php endforeach;?>
    </select>
    <input type="submit" value="Add">
</form>