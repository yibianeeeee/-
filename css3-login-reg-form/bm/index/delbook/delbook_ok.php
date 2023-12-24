<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>delbook</title>
</head>

<body>
<?php
header("Content-type:text/html; charest=UTF-8");//编码方式
// 处理删除操作的页面
include_once("../../conn.php");
if($_GET['action']=="delete"){
    $sqlstr1="delete from book where id =".$_GET['id'];
    $result=mysqli_query($link,$sqlstr1);


    if($result){
        echo"<script>alert('删除成功');history.go(-1);</script>";
    }else{
        echo"<script>alert('删除失败');history.go(-1);</script>";
    }
}

?>
</body>
</html>