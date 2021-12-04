<?php

include_once('db.php');

$comment_id = $_POST['comment_id'];


$sql = "DELETE FROM comments WHERE comment_id='$comment_id'";


if ($mysqli->query($sql))
    {
        echo "Комментарій видалено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showComments.php");
?>
