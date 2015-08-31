<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Добавление стихотворения</title>
    <style type="text/css">
    textarea{
    display: block;
    width: 30%;
}
    </style>
</head>
<body>
<form action="?" method="post">
    <div>
        <label for="name">Название стихотворения:</label>
        <textarea id="name" name="name" rows="1">
        </textarea>
        <label for="lyrics">Текст стихотворения:</label>
        <textarea id="lyrics" name="lyrics" rows="30">
        </textarea>
    </div>
    <div><input type="submit" value="А ты уверен, что это Бродский?"></div>
</form>

</body>
</html>