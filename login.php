<?php
session_start();
include('connection.php');
$username=$_POST['name'];
$pass=$_POST['password'];
$query="select * from loginn where name='$username'";
$result=mysqli_query($dbh,$query) or die("error querying");
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
if($row['password']==$pass)
{
$_SESSION['sec']=$row['section'];
header('Location:ajax1.html');
}
else
header('Location:login.html');
}
?>

