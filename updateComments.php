<?php

include_once('db.php');



$id = $_POST['comment_id'];
$text = $_POST['comment_text'];

$sql = "UPDATE comments SET comment_text='$text' WHERE comment_id='$id' ";


if($mysqli->query($sql)){
    echo "Коммент змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showComments.php");
?>
