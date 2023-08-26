  <?php
  $vt_sunucu="localhost";
  $vt_kullanici="root";
  $vt_parola="";
  $vt="exeldeneme";
  
  $baglantim=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_parola,$vt);
  mysqli_set_charset($baglantim,"UTF8");
  if($baglantim){
      
     
      if(isset($_POST["yıl"] )&& isset($_POST["yolcu_sayisi"])){
  
  
      $yil=$_POST["yıl"];
      $yolcu_sys=$_POST["yolcu_sayısı"];
      $yolculuk_tr=$_POST["yolculuk_türü"];

     
  
      $ekle="INSERT INTO exeldeneme (yıl,yolcu_sayısı,yolculuk_türü) VALUES('$yil','$yolcu_sys','$yolculuk_tr')";
      $calistirekle=mysqli_query($baglantim,$ekle);
    }
   
} 
  ?>


<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Yolculuk Türü Bazında Yolcu Sayısı</h1>
<form action="baglayamam.php" method="POST">

<table id="customers">
  <tr>
    <th>yıl</th>
    <th>yolcu_sayısı</th>
    <th>yolculuk_türü</th>
    
  </tr>
  </form>

  <?php

    // function cikis($cikisphp){
    //   echo '<script> window.location.href='$cikisphp'</script>';
    // }

    //   session_start();
    //   if($_SESSION["user"]==""){
    //       //echo "location.href='cikis.php";
    //       header('location:cikis.php');

    //    }
    //  else{
      
         //echo "kullanı adınız: " .$_SESSION['user']. "<br>";
        // echo "ÇIKIŞ YAP";
  
        $sec="Select* From exeldeneme";
         $sonuc=$baglantim->query($sec);  
        if($sonuc->num_rows>0){
            while($cek=$sonuc->fetch_assoc()){
                  echo "<tr>
                      <td>".$cek['yıl']."</td>
                      <td> ".$cek['yolcu_sayısı']."</td>
                      <td> ".$cek['yolculuk_türü']."</td>
                      </tr>";

        }

        }
        else{
        echo "veritabaninde veri yok";

        }
       
        
        mysqli_close($baglantim);
    

?> 

</table>

</body>
</html>
