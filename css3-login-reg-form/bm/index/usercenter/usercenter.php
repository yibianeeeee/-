<?php
include_once ("../../conn.php");
session_start();
$a=$_SESSION['email'];
$b=$_SESSION['pwd'];
$sql1='select * from user where email="$a"';
$res=mysqli_query($link,$sql1);
$c=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>用户中心</title>
    <meta name="theme-color" content="#ffc91d"/>
    <link rel="icon" href="static/img/32.png" sizes="32x32"/>
    <link rel="icon" href="static/img/192.png" sizes="192x192"/>
    <link href="static/kico.css" rel="stylesheet" type="text/css"/>
    <link href="static/paul.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1"/>
</head>
<body>
<aside class="sidebar">
    <div class="avatar">
        <img src="static/img/avatar.jpg" title="保罗酱"/>
    </div>
    <nav class="nav">
        <a href="#info">资料</a>
        <a href="#skills">借阅记录</a>

    </nav>
</aside>
<main>
    <section id="info">
        <div class="wrap">
            <h2 class="title">用户资料</h2>
            <div class="row">
                <div class="col-l-4">

                    <p>姓名：<?php echo $c[0]?></p>
                    <p>性别：<?php echo $c[2]?></p>
                    <p>年龄：<?php echo $c[3]?></p>
                    <p>学校：<?php echo $c[4]?></p>
                </div>
                <div class="col-l-4">
                    <p>QQ：1204958596</p>
                    <p>邮箱：<a href="<?php echo $c[1]?>"><?php echo $c[1]?></a></p>
                </div>
                <div class="col-l-4">
                    <p><?php echo $c[5]?></p>
                </div>
            </div>
        </div>
    </section>
    <section id="skills">
        <div class="wrap">
            <h2 class="title">借阅记录</h2>
            <div class="row scrollable">
                <div class="col-s-6 col-m-4 center-fixed">
                    <div class="skills-icon">
                        <i class="fa fa-html5"></i>
                    </div>
                    <div class="skills-title">
                        <h3>HTML 5</h3>
                        <p>熟悉 HTML5 网站的架构和开发</p>
                    </div>
                </div>
                <div class="col-s-6 col-m-4 center-fixed">
                    <div class="skills-icon">
                        <i class="fa fa-css3"></i>
                    </div>
                    <div class="skills-title">
                        <h3>CSS3</h3>
                        <p>熟悉使用 CSS3 写响应式网站、动画等</p>
                    </div>
                </div>
                <div class="col-s-6 col-m-4 center-fixed">
                    <div class="skills-icon">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="skills-title">
                        <h3>JavaScript</h3>
                        <p>能使用 JS 制作简单的程序、交互与特效</p>
                    </div>
                </div>
                <div class="col-s-6 col-m-4 center-fixed">
                    <div class="skills-icon">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="skills-title">
                        <h3>JavaScript</h3>
                        <p>能使用 JS 制作简单的程序、交互与特效</p>
                    </div>
                </div>
                <div class="col-s-6 col-m-4 center-fixed">
                    <div class="skills-icon">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="skills-title">
                        <h3>JavaScript</h3>
                        <p>能使用 JS 制作简单的程序、交互与特效</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>© 2023 By <a href="@" title="徐粤安" target="_blank">徐粤安</a>.</p>
    </footer>
</main>

<script src="static/kico.js"></script>
<script src="static/paul.js"></script>

</body>
</html>