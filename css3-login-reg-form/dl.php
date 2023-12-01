<?php
$servername="localhost";
$username="root";
$password="245969";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
};
$sqli="CREATE DATABASE mydb";
if(mysqli_query($conn,$sqli)){
    echo "数据库创建成功";
}
mysqli_select_db($conn,"mydb");
$email=$_POST["email"];
$password=$_POST["password"];
$sql_select = "SELECT EMAIL,PASSWORD FROM msg WHERE EMAIL ='$email' AND PASSWORD = '$password' "; //执行SQL语句
$ret = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($ret);
if (strcmp($email,$row['EMAIL'])==0 && strcmp($password,$row['PASSWORD']==0)  ){//利用strcmp函数判断用户名或密码是否正确
    header ('Location: index2.html');
}
else{
    header("Location:denglu.php?err=1");
}
?>