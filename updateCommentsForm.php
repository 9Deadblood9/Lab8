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
        include_once("showComments.php");    
    ?>

<form action="updateComments.php" method="post">
        <label>ІД коментарію який змінюємо </label><input name="comment_id" type="int"><br>
        <label>Новий текст коментарію </label><input name="comment_text" type="text"><br>
        <input type="submit" value="Змінюємо коммент">
</form>

</body>
</html>