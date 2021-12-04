<?php

include_once('db.php');



$id = $_POST['post_id'];
$text = $_POST['post_text'];

$sql = "UPDATE post SET post_text='$text' WHERE post_id='$id' ";


if($mysqli->query($sql)){
    echo "Пост змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showPost.php");
?>
