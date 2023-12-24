<?php
$servername="localhost";
$username="root";
$password="245969";
$link = mysqli_connect("localhost", "root", "245969", "mydb") or die("连接数据库服务器失败！".mysqli_error()); //连接MySQL服务器，选择数据库
mysqli_query($link,"set names utf8");						//设置数据库编码格式utf8
?>