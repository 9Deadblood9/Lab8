    <html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця коментаріїв<</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця коментаріїв</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM comments ORDER BY comment_id';


    /* Надсилаємо запит серверу */
    if($result = $mysqli->query($sql)) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("Список коментаріїв: <br><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>ІД</th><th>Вміст комменту</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['comment_id'], $row['comment_text']); //виводимо результат на сторінку
        };
        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    };

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertCommentForm.php">Добавити коментарій</a><br></li>
        <li><a href="updateCommentsForm.php">Змінити коментарій</a><br></li>
        <li><a href="deleteFromCommentsForm.php">Видалити коментарій</a><br></li>
        <li><a href="showLentaNews.php">Перехід на Ленту новин</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
