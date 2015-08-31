<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Не нравится?</title>
    <style type="text/css">
        textarea{
            display: block;
            width: 20%;
            text-align: center;
        }
    </style>
</head>
<body>
<h2> Тебе не нравятся стихи Бродского?<br>
Ты действительно хочешь их РЕДАКТИРОВАТЬ?</h2>
<form action="index.php" method="post">
    <div>
        <label for= "rename">Ну давай, дерзай:</label>

        <textarea id="rename" name="rename" rows="1"> <?php echo $_POST['name'];?></textarea><br>
        <textarea id="relyrics" name="relyrics" rows="40"><?php echo $_POST['lyrics'];?></textarea>
        <input type="hidden" name="i" value="<?php echo $_POST['i'];?>">
        <input type="submit" value="Редактировать">
    </div>
</form>

</body>
</html>