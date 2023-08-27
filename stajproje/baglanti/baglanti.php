

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
    if($calistirekle){
        echo 'Talebiniz Alınmıştır';
    }


    else{
      
       ' <div class="alert alert-success" role="alert">
         bağlantı  olmadi
        </div> ';

    }
}
    mysqli_close($baglanti);
}



