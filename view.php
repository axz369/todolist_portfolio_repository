<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
    <p class="headerTitle">ToDoList</p>
</header>

<table class="table">
<?php foreach($pdo->query('select * from listtable')as $row) : ?>
    <tr class="tableItem">
        <td class="content"><?php echo nl2br($row['content']); ?></td>
        <td class="tdButton" align="center"><p class="deleteButton"><a href="delete.php?id=<?php echo $row['id'];?>">✖</a></p></td>
    </tr>
<?php endforeach ?>
</table>

<form action="" method="post" class="form">
    <textarea placeholder="新規メモ" name="add" cols="65" rows="3"></textarea>
    <br>
    <button type="submit">追加</button>
</form>

</body>
</html>