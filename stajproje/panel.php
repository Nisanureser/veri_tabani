 <?php
 include("baglanti/baglanti.php");
 ?>
 
 
 
 <?php
  $vt_sunucu="localhost";
  $vt_kullanici="root";
  $vt_parola="";
  $vt="olsana";
  
  $baglanti=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_parola,$vt);
  mysqli_set_charset($baglanti,"UTF8");
  if($baglanti){
      
     
      if(isset($_POST["isim"] )&&isset($_POST["Email"])){
  
  
      $isim=$_POST["isim"];
      $tel=$_POST["tel"];
      $Email=$_POST["Email"];
      $Konu=$_POST["Konu"];
      $mesaj=$_POST["mesaj"];
     
  
      $ekle="INSERT INTO deneme2 (isim, tel, Email, Konu, mesaj) VALUES('$isim','$tel','$Email','$Konu','$mesaj')";
      $calistirekle=mysqli_query($baglanti,$ekle);
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

<h1>iletişim bilgileri</h1>
<form action="baglanti/baglanti.php" method="POST">

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Konu</th>
    <th>mesaj</th>
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
  
        $sec="Select* From deneme2";
         $sonuc=$baglanti->query($sec);  
        if($sonuc->num_rows>0){
            while($cek=$sonuc->fetch_assoc()){
                  echo "<tr>
                      <td>".$cek['isim']."</td>
                      <td> ".$cek['tel']."</td>
                      <td> ".$cek['Email']."</td>
                      <td>".$cek['Konu']."</td>
                      <td>".$cek['mesaj']."</td>
                      </tr>";

        }

        }
        else{
        echo "veritabaninde veri yok";

        }
       
        
        mysqli_close($baglanti);
    

?>



  
  

</table>

</body>
</html>





