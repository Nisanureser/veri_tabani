<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="genel">

<form action="girisoldu.php" method="POST" style="max-width:500px;margin:auto">
     <h2>Giriş </h2>
     <div class="inputbox">
        <input type="usrnm" name="usrnm"  required="required">
        <span>Kullanıcı Adı</span>
        <i></i>
     </div>
     <div class="inputbox">
        <input type="psw" name="psw" required="required">
        <span>Şifre</span>
        <i></i>
     </div>
     <input type="submit" value="Giriş" id="deneme">
</form>
<div>

    

    
</body>
</html>
<?php
session_start();
if(isset($_POST["usrnm"],$_POST["psw"])){
  
  function phpalert($mesaj){
    echo '<script> alert("'.$mesaj.'");</script>';
  }

  if($_POST["usrnm"]=="nisanur" && $_POST["psw"]=="123456"){
    $_SESSION["user"]=$_POST["usrnm"];
    header('location:panel.php');
  }

  else{
    phpalert("Kullanıcı Adi veya Şifre Yanlış");
  
  }
}


?>
