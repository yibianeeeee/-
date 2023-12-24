<?php
include_once ("../../../conn.php");
session_start();
$a=$_SESSION['email'];
$b=$_SESSION['pwd'];
$sql1='select * from user where email="$a"';
$res=mysqli_query($link,$sql1);
$c=mysqli_fetch_array($res);
var_dump($c);
?>