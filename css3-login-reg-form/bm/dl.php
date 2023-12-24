<?php
include_once ('conn.php');
$email=$_POST["email"];
$password=$_POST["password"];
$sql_select = "SELECT EMAIL,PASSWORD FROM msg WHERE EMAIL ='$email' AND PASSWORD = '$password' "; //执行SQL语句
$ret = mysqli_query($link, $sql_select);
$row = mysqli_fetch_array($ret);

if($email && $password){
if (strcmp($email,$row['EMAIL'])==0 && strcmp($password,$row['PASSWORD']) ==0 ){//利用strcmp函数判断用户名或密码是否正确
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['pwd']=$password;
    echo "<script>alert('登录成功');window.location.href='index.php'</script>";
}
}
else{
   echo "<script>alert('登录失败');history.go(-1);</script>";
}

?>