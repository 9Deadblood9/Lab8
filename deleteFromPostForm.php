<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include_once("showPost.php")    
    ?>

<form action="deleteFromPost.php" method="post">
        <label>ID поста, який видаляємо</label><input name="post_id" type="int"><br>
        <input type="submit" value="Видалити пост">
</form>

</body>
</html>