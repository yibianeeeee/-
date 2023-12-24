<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>图书目录</title>
  
  <link rel="stylesheet" href="css/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <section>
  <!--for demo wrap-->
  <h1>图书目录</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>id</th>
          <th>书名</th>
          <th>数量</th>
          <th>类型</th>
          <th>作者</th>
          <th>操作</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
      <?php
      include_once ("../../conn.php");
      $pagesize = 3 ;								//2.每页显示记录数
      $sqlstr = "select * from book order by id";//1.定义查询语句
      $total = mysqli_query($link,$sqlstr);		 //1.执行查询语句
      $totalNum = mysqli_num_rows($total);			//2.总记录数
      $pagecount = ceil($totalNum/$pagesize);			//2.总页数
      (!isset($_GET['page']))?($page = 1):$page = $_GET['page'];	//2.当前显示页数
      ($page <= $pagecount)?$page:($page = $pagecount); //2.当前页大于总页数时把当前页定义为总页数
      $f_pageNum = $pagesize * ($page - 1);				//2.当前页的第一条记录
      $sqlstr1 = $sqlstr." limit ".$f_pageNum.",".$pagesize;//2.定义SQL语句，通过limit关键字控制查询范围和数量
      $result = mysqli_query($link,$sqlstr1);					//2.执行查询语句
      $i = 1;
      while ($rows = mysqli_fetch_array($result)){			//1.2.循环输出查询结果
      ?><tr>
          <td><?php echo $i;?></td>
          <td  ><?php echo $rows[1];?></td>
          <td ><?php echo $rows[2];?></td>
          <td ><?php echo $rows[3];?></td>
          <td ><?php echo $rows[4];?></td>
          <td>
              <a href =delbook_ok.php?action=delete&id=<?php echo $rows[0]?>>删除</td>
          </td>
      </tr>
          <?php
          $i++;
      }
      ?>
      </tbody>
        <tr>
            <td height="25" colspan="6" align="center" bgcolor="#7FFFD4">&nbsp;&nbsp;
                <?php
                echo "共".$totalNum."本图书&nbsp;&nbsp;";
                echo "第".$page."页/共".$pagecount."页&nbsp;&nbsp;";
                if($page!=1){//如果当前页不是1则输出有链接的首页和上一页
                    echo "<a href='?page=1'>首页</a>&nbsp;";
                    echo "<a href='?page=".($page-1)."'>上一页</a>&nbsp;&nbsp;";
                }else{//否则输出没有链接的首页和上一页
                    echo "首页&nbsp;上一页&nbsp;&nbsp;";
                }
                if($page!=$pagecount){//如果当前页不是最后一页则输出有链接的下一页和尾页
                    echo "<a href='?page=".($page+1)."'>下一页</a>&nbsp;";
                    echo "<a href='?page=".$pagecount."'>尾页</a>&nbsp;&nbsp;";
                }else{//否则输出没有链接的下一页和尾页
                    echo "下一页&nbsp;尾页&nbsp;&nbsp;";
                }
                ?>
            </td>
        </tr>
    </table>
  </div>
</section>

<div style="text-align:center;clear:both">
<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>
</div>

<!-- follow me template -->

  <script src='js/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
