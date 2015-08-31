<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title> Стихи Бродского</title>
</head>
<body>
<h1>Это страничка стихов Бродского</h1>
<a href="?add">Можешь добавить стихотворение сам</a>

<h2>Выбирай любой:</h2>
<?php
for ($i = 0; $i < count($names); $i++):
    ?>
    <p><a href="lyrics/<?php echo $lyrics[$i]; ?>"><?php echo file_get_contents('names/' . $names[$i]); ?></a>
    <form action="readd.html.php" method="post">
        <input type="hidden" name="name" value="<?php echo file_get_contents('names/' . $names[$i]); ?>">
        <input type="hidden" name="lyrics" value="<?php echo file_get_contents('lyrics/' . $lyrics[$i]); ?>">
        <input type="hidden" name="i" value="<?php echo $i; ?>">
        <input type="submit" value="Редактировать">
    </form>
    <form action="index.php" method="post">
        <input type="hidden" name="delete" value="<?php echo $i; ?>">
        <input type="submit" value="Удалить">
    </form>


<?php endfor ?>
</p>
</body>
</html>