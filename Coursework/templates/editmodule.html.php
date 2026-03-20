<form action="" method="post">
    <input type="hidden" name="moduleid" value="<?=$module['id'];?>">

    <label for="module_name">Edit module name here</label>
    <textarea name="module_name" rows="3" cols="40"> <?=$module['module_name']?></textarea>

    <input type="submit" name="submit" value="Save">
</form>