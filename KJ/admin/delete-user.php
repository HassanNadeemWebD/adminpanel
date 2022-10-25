<?php


$u_id =  $_GET["id"];

include "config.php";

$query =  "DELETE FROM `user` WHERE `user_id` =  '{$u_id}'";

mysqli_query($conn, $query);

header("location:{$host}users.php");

?>