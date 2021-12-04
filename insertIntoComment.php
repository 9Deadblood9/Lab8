<?php

include_once('db.php');


$comment_id = $_POST['comment_id']; $comment_text = $_POST['comment_text']; 

$sql = "INSERT INTO comments (comment_id,comment_text) VALUES ( '$comment_id','$comment_text')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showComments.php");

?>
