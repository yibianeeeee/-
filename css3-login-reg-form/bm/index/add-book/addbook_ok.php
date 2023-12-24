<?php
error_reporting(0);
header("content-type:text/html; charest=UTF-8");//文件编码格式
include_once("../../conn.php");//连接数据库文件
$a=$_POST["id"];
$b=$_POST["name"];
$c=$_POST["amount"];
$d=$_POST["author"];
$e=$_POST["type"];
//把input中的namejie
if(!($a and $b and $c and $d and $e)){

 echo"<script>alert('输入值不许为空');history.go(-1);</script>";//判断变量名是否为空值

}else{

    $sqlstr1="insert into book values($a,'".$b."',$c,'".$d."','".$e."')";

    //执行sql   insert语句    把用post引用的变量接入到bookable中

    $result = mysqli_query($link,$sqlstr1);//承接结果集

    if($result){
        echo"<script>alert('添加成功');history.go(-1);</script>";
    }else{
        echo"<script>alert('添加失败');history.go(-1);</script>";
    }
}
?>