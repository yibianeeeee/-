<?php
include_once ('conn.php');

session_start();
$email=$_SESSION['email'];
$pwd=$_SESSION['pwd'];
$sql_select = "SELECT EMAIL,PASSWORD FROM msg WHERE EMAIL ='$email' AND PASSWORD = '$pwd' ";
$rel=mysqli_query($link,$sql_select);
$row = mysqli_fetch_array($rel);
if($row){

}else{
    echo "<script>alert('您还未登录!');window.location.href='denglu.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>登录过渡</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  
<div class="container">
  <div class="season"></div>
  <div class="sun"></div>
  <div class="rainbow">
    <div class="rainbow-colour"></div>
    <div class="rainbow-colour"></div>
    <div class="rainbow-colour"></div>
    <div class="rainbow-colour"></div>
    <div class="rainbow-colour"></div>
    <div class="rainbow-colour"></div>
    <div class="rainbow-colour"></div>
  </div>
  <div class="cloud-group">
    <div class="cloud">
      <div class="weather-container">
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
      </div>
    </div>
    <div class="cloud">
      <div class="weather-container">
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
      </div>
    </div>
    <div class="cloud">
      <div class="weather-container">
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
      </div>
    </div>
    <div class="cloud">
      <div class="weather-container">
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
      </div>
    </div>
    <div class="cloud">
      <div class="weather-container">
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
      </div>
    </div>
    <div class="cloud">
      <div class="weather-container">
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
      </div>
    </div>
    <div class="cloud">
      <div class="weather-container">
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
      </div>
    </div>
    <div class="cloud">
      <div class="weather-container">
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
        <div class="rain"></div>
      </div>
    </div>
  </div>
  <div class="base">
    <div class="bush-group">
      <div class="bush"></div>
      <div class="bush"></div>
      <div class="bush"></div>
      <div class="bush"></div>
      <div class="bush"></div>
      <div class="bush"></div>
      <div class="bush"></div>
      <div class="bush"></div>
      <div class="bush"></div>
    </div>
    <div class="rabbit animated">
      <div class="head">
        <div class="ear"></div>
        <div class="ear"></div>
      </div>
    </div>
    <div class="tree-group">
      <div class="tree">
        <div class="trunk"></div>
        <div class="tree-top"></div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="tree-top"></div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="tree-top"></div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="branch"></div>
        <div class="branch"></div>
        <div class="branch"></div>
        <div class="branch"></div>
        <div class="branch"></div>
        <div class="branch"></div>
        <div class="branch"></div>
        <div class="branch"></div>
        <div class="branch"></div>
        <div class="branch"></div>
        <div class="branch"></div>
        <div class="branch"></div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="tree-top"></div>
        <div class="tree-top"></div>
        <div class="branch-two">
          <div class="tree-top"></div>
        </div>
        <div class="branch-two">
          <div class="tree-top"></div>
        </div>
        <div class="branch-two">
          <div class="tree-top"></div>
        </div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="tree-top"></div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="tree-top"></div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="tree-top">
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
        </div>
        <div class="tree-top"></div>
        <div class="tree-top"></div>
        <div class="flower">
          <div class="flower-in"></div>
          <div class="petal"></div>
          <div class="petal"></div>
          <div class="petal"></div>
        </div>
        <div class="flower">
          <div class="flower-in"></div>
          <div class="petal"></div>
          <div class="petal"></div>
          <div class="petal"></div>
        </div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="tree-top"> </div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="branch">
          <div class="branch-in"></div>
          <div class="pine-cone-row">
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
          </div>
        </div>
        <div class="branch">
          <div class="branch-in"></div>
          <div class="pine-cone-row">
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
          </div>
        </div>
        <div class="branch">
          <div class="branch-in"></div>
          <div class="pine-cone-row">
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
          </div>
        </div>
        <div class="branch">
          <div class="branch-in"></div>
          <div class="pine-cone-row">
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
          </div>
        </div>
        <div class="branch">
          <div class="branch-in"></div>
          <div class="pine-cone-row">
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
          </div>
        </div>
        <div class="branch">
          <div class="branch-in"></div>
          <div class="pine-cone-row">
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
          </div>
        </div>
        <div class="branch">
          <div class="branch-in"></div>
          <div class="pine-cone-row">
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
          </div>
        </div>
        <div class="branch">
          <div class="branch-in"></div>
          <div class="pine-cone-row">
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
          </div>
        </div>
        <div class="branch">
          <div class="branch-in"></div>
          <div class="pine-cone-row">
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
          </div>
        </div>
        <div class="branch">
          <div class="branch-in"></div>
          <div class="pine-cone-row">
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
            <div class="pine-cone"></div>
          </div>
        </div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="tree-top"></div>
        <div class="tree-top"></div>
        <div class="tree-top"></div>
      </div>
      <div class="tree">
        <div class="trunk"> </div>
        <div class="tree-top">
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
        </div>
        <div class="tree-top"></div>
        <div class="tree-top"></div>
        <div class="flower">
          <div class="flower-in"></div>
          <div class="petal"></div>
          <div class="petal"></div>
          <div class="petal"></div>
        </div>
        <div class="flower">
          <div class="flower-in"></div>
          <div class="petal"></div>
          <div class="petal"></div>
          <div class="petal"></div>
        </div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="tree-top"> </div>
        <div class="tree-top"></div>
        <div class="tree-top"></div>
        <div class="branch-two">
          <div class="tree-top"></div>
        </div>
        <div class="branch-two">
          <div class="tree-top"></div>
        </div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="tree-top">
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
        </div>
        <div class="tree-top">
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
        </div>
        <div class="tree-top">
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
          <div class="cone"> </div>
        </div>
      </div>
      <div class="tree">
        <div class="trunk"></div>
        <div class="tree-top">
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
          <div class="cone">      </div>
        </div>
        <div class="tree-top">
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
          <div class="cone">       </div>
        </div>
        <div class="tree-top">
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
          <div class="cone"></div>
        </div>
      </div>
    </div>
  </div>
</div>
    <script  src="js/index.js"></script>
<iframe frameborder="0" scrolling="no" src="indexbutton.php" width="100%" height="1200px" id="iFrame" > </iframe>


</body>

<script>
    // iframe 实现跳转功能
    var IframeOnClick = {
        resolution: 200,
        iframes: [],
        interval: null,
        Iframe: function() {
            this.element = arguments[0];
            this.cb = arguments[1];
            this.hasTracked = false;
        },
        track: function(element, cb) {
            this.iframes.push(new this.Iframe(element, cb));
            if (!this.interval) {
                var _this = this;
                this.interval = setInterval(function() {
                    _this.checkClick();
                }, this.resolution);
            }
        },
        checkClick: function() {
            if (document.activeElement) {
                var activeElement = document.activeElement;
                for (var i in this.iframes) {
                    if (activeElement === this.iframes[i].element) { // user is in this Iframe
                        if (this.iframes[i].hasTracked == false) {
                            this.iframes[i].cb.apply(window, []);
                            this.iframes[i].hasTracked = true;
                        }
                    } else {
                        this.iframes[i].hasTracked = false;
                    }
                }
            }
        }
    }
    IframeOnClick.track(document.getElementById("iFrame"), function() {
        // alert('a click');
        window.location.href = "index/usercenter.php";
    });
</script>
</html>
