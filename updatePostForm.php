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
        include_once("showPost.php");    
    ?>

<form action="updatePost.php" method="post">
        <label>ІД поста який змінюємо </label><input name="post_id" type="int"><br>
        <label>Новий текстовий зміст посту </label><input name="post_text" type="text"><br>
        <input type="submit" value="Змінюємо пост">
</form>

</body>
</html>