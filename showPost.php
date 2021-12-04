<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Post</h1>


    <?php

    include_once('db.php');

    $sql = "SELECT * FROM post";


    if($result = $mysqli->query($sql))
    {   
        printf("Список постів: <br><br>");   
        printf("<table><tr><th>ІД поста</th><th>Текст посту</th></tr>");
        while( $row = $result->fetch_assoc() )
        {
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['post_id'], $row['post_text']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertPostForm.php">Добавити Пост</a><br></li>
        <li><a href="updatePostForm.php">Змінити Пост</a><br></li>
        <li><a href="deleteFromPostForm.php">Видалити Пост</a><br></li>
        <li><a href="showLentaNews.php">Перехід на Ленту новин</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
