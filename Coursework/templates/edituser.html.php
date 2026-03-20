<form action="" method="post">
    <input type="hidden" name="userid" value="<?=$user['id'];?>">

    <label for="user_name">Edit user name here</label>
    <textarea name="user_name" rows="3" cols="40"> <?=$user['user_name']?></textarea>

    <label for="user_email">Edit user email here</label>
    <textarea name="user_email" rows="3" cols="40"> <?=$user['user_email']?></textarea>

    <input type="submit" name="submit" value="Save">
</form>