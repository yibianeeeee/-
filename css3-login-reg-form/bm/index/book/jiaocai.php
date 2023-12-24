<?php
include_once ('../../conn.php');

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
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>book-type</title>


    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

    <link rel="stylesheet" href="css/style-jiaocai.css">


</head>

<body>
<div style="text-align:center;clear:both">
    <script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
    <script src="/follow.js" type="text/javascript"></script>
</div>
<div class="cont s--inactive">
    <!-- cont inner start -->
    <div class="cont__inner">
        <!-- el start -->
        <?php
        include_once ("../../conn.php");
        $sqlstr = "select * from book where type='教材'";//1.定义查询语句
        $total = mysqli_query($link,$sqlstr);		 //1.执行查询语句
        $result = mysqli_query($link,$sqlstr);					//2.执行查询语句
        $i = 1;
        while ($rows = mysqli_fetch_array($result)){//1.2.循环输出查询结果
            ?>
            <div class="el">
                <div class="el__overflow">
                    <div class="el__inner">
                        <div class="el__bg"></div>
                        <div class="el__preview-cont">
                            <h2 class="el__heading"><?php echo $rows[1];?></h2>
                        </div>
                        <div class="el__content">
                            <div class="el__text"><?php echo $rows[5];?></div>
                            <div class="el__close-btn"></div>
                        </div>
                    </div>
                </div>
                <div class="el__index">
                    <div class="el__index-back"><?php echo $i;?></div>
                    <div class="el__index-front">
                        <div class="el__index-overlay" data-index="<?php echo $i;?>"><?php echo $i;?></div>
                    </div>
                </div>
            </div>
            <?php
            $i++;
        }
        ?>

        <!-- el end -->
    </div>
    <!-- cont inner end -->
</div>


<script  src="js/index.js"></script>




</body>

</html>
