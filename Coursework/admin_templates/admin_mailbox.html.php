<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<body>
            <table>
        <tr>
            <th>Sender</th>   
            <th>Date</th> 
            <th>Mail</th>
            <th>Delete</th>
        </tr>
        <?php foreach($mails as $mails): ?>
        <tr>
        <td><?=htmlspecialchars($mails['username'], ENT_QUOTES,'UTF-8')?></td>
        <td><?=htmlspecialchars(date("D d M Y", strtotime( $mails ['date'])) , ENT_QUOTES, 'UTF-8')?></td>
        <td><?=htmlspecialchars($mails ['mailtext'], ENT_QUOTES, 'UTF-8')?></td>
        <td><form action = "deletemail.php" method = "post">
                <input type = "hidden" name = "id" value="<?=$mails['id']?>">
                <input type = "submit" name = "submit" value = "Delete">
        </form>
        </tr>
        <?php endforeach;?> 
</body>
</html>