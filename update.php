<?php
session_start();
include('connection.php');
$name=$_GET['q'];
$query="update candidate set vote_count=vote_count+1 where id=\"$name\"";
mysqli_query($dbh,$query) or die("error querying");
$query="update loginn set voted=1 where id=\"$name\"";
mysqli_query($dbh,$query) or die("error querying");
?>
