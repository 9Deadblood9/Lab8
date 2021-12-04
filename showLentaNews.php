<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Лента новин</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Лента новин</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT c.comment_text, p.post_text FROM comments AS c RIGHT JOIN post AS p ON c.comment_id = p.post_id ORDER BY c.comment_text';


    if($result = $mysqli->query($sql)) {

        printf("<h3>Вміст ленти новин: </h3><br>");   
        printf("<table><tr><th>Вміст посту</th><th>Комментарій до посту</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td></tr>",  $row['post_text'], $row['comment_text']);
        };
        printf("</table>");
        
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="showComments.php">Таблиця коментаріїв</a><br></li>
        <li><a href="showPost.php">Таблиця Post</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
