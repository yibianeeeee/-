<?php

include_once ('conn.php');
$email=$_POST["email"];
$password=$_POST["password"];
$password1=$_POST["password1"];
if($password==$password1){
$sql = "INSERT INTO msg(PASSWORD,EMAIL) VALUES ('$password','$email')";
if(mysqli_query($link,$sql)){
    echo "<script>alert('注册成功');window.location.href='denglu.php'</script>";
}else{

    echo "<script>alert('注册失败');window.location.href='denglu.php'</script>";
}
}else{
    echo "<script>alert('两次输入的密码有误');window.location.href='denglu.php'</script>";
}