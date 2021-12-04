<?php

include_once('db.php');


$id = $_POST['post_id']; $text = $_POST['post_text']; 

$sql = "INSERT INTO post (post_id,post_text) VALUES ( '$id','$text')";


if($mysqli->query($sql)){
    echo "Пост вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showPost.php");

?>
