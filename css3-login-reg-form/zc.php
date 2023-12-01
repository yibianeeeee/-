<?php
$servername="localhost";
$username="root";
$password="245969";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
};
#echo "连接成功";
$sql="CREATE DATABASE mydb";
if(mysqli_query($conn,$sql)){
    echo "数据库创建成功";
}
$email=$_POST["email"];
$password=$_POST["password"];
$user=$_POST["username"];
mysqli_select_db($conn,"mydb");
$sql = "INSERT INTO msg(USERNAME,PASSWORD,EMAIL) VALUES ('$user','$password','$email')";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('注册成功')</script>";
    header("Location:denglu.php?err=1");
}else{
    echo 'error:'.$sql.'<br>'.mysqli_error($conn);
    header ('Location: index.php');
}