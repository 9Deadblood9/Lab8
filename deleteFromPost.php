<?php

include_once('db.php');

$post_id = $_POST['post_id'];


$sql = "DELETE FROM post WHERE post_id='$post_id'";


if ($mysqli->query($sql))
    {
        echo "Пост видалено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showPost.php");
?>
