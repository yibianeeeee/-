<?php
include_once ('../conn.php');

session_start();
$email=$_SESSION['email'];
$pwd=$_SESSION['pwd'];
$sql_select = "SELECT EMAIL,PASSWORD FROM msg WHERE EMAIL ='$email' AND PASSWORD = '$pwd' ";
$rel=mysqli_query($link,$sql_select);
$row = mysqli_fetch_array($rel);
if($row){

}else{

    echo "<script>alert('您还未登录!');window.location.href='../denglu.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>图书借阅系统</title>

    <link rel="stylesheet" type="text/css" href="css/left-side-menu.css">
    <link rel="stylesheet" type="text/css" href="font/iconfont.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="js/left-side-menu.js"></script>

</head>
<body>

<div class ="top"  style="width: 100%;height: 80px;background-color: #397bc5">
    <h1 align="center" class="body1">图书借阅系统</h1>
</div>
<div style="position:absolute; top:98px;left:220px; width:1290px; height:675px;background-color:white;z-index:1;">
    <iframe src="book/xiaoshuo.php" width="1290px" height="675px"></iframe>
</div>
<div class="left-side-menu" >
    <div class="lsm-expand-btn">
        <div class="lsm-mini-btn">
            <label>
                <input type="checkbox" checked="checked">
                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">

                    <circle cx="50" cy="50" r="30" />
                    <path class="line--1" d="M0 40h62c18 0 18-20-17 5L31 55" />
                    <path class="line--2" d="M0 50h80" />
                    <path class="line--3" d="M0 60h62c18 0 18 20-17-5L31 45" />
                </svg>
            </label>

        </div>
        <!--        <input type="text">-->

    </div>

    <div class="lsm-container">
        <div class="lsm-scroll" >
            <div class="lsm-sidebar">
                <ul>
                    <li class="lsm-sidebar-item">
                        <a href="javascript:;"><i class="my-icon lsm-sidebar-icon icon_1"></i><span>系统设置</span><i class="my-icon lsm-sidebar-more"></i></a>
                        <ul>
                            <li><a href="javascript:;"><span>修改密码</span></a></li>
                            <li><a  href="javascript:;"><span>注销账号</span></a></li>

                        </ul>
                    </li>
                    <li class="lsm-sidebar-item">
                        <a href="javascript:;"><i class="my-icon lsm-sidebar-icon icon-iconset0308"></i><span>书架</span><i class="my-icon lsm-sidebar-more"></i></a>
                        <ul>
                            <li><a href="jiaocai.php"><span>教材</span></a></li>
                            <li><a class="active"><span>小说</span></a></li>
                            <li><a href="lishi.php"><span>历史</span></a></li>
                        </ul>
                    </li>
                    <li class="lsm-sidebar-item">
                        <a href="javascript:;"><i class="my-icon lsm-sidebar-icon icon-chongzhi1"></i><span>图书管理</span><i class="my-icon lsm-sidebar-more"></i></a>
                        <ul>
                            <li><a href="add-book/add_b.php"><span>新增书籍</span></a></li>
                            <li><a href="delbook/del_book.php"><span>删除书籍</span></a></li>
                            <li><a href="search/search_book.php"><span>搜索书籍</span></a></li>
                        </ul>
                    </li>


                    <li class="lsm-sidebar-item">
                        <a href="javascript:;"><i class="my-icon lsm-sidebar-icon icon-users"></i><span>用户管理</span><i class="my-icon lsm-sidebar-more"></i></a>
                        <ul>
                            <li><a href="javascript:;"><span>管理员</span></a></li>
                            <li><a href="usercenter.php"><span>用户中心</span></a></li>
                        </ul>
                    </li>

                    <li class="lsm-sidebar-item">
                        <a href="javascript:;"><i class="my-icon lsm-sidebar-icon icon_3"></i><span>退出系统</span><i class="my-icon lsm-sidebar-more"></i></a>
                        <ul>
                            <li><a href="exit.php"><span>注销登录</span></a></li>
                        </ul>
                    </li>




                </ul>
            </div>
        </div>
    </div>

</div>


<div style="text-align:center;clear:both;">
    <script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
    <script src="/follow.js" type="text/javascript"></script>
</div>

</body>
</html>
