
<?php
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_parola="";
$vt="exeldeneme";

$baglantim=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_parola,$vt);
mysqli_set_charset($baglantim,"UTF8");
if($baglantim){
    
   
    if(isset($_POST["yıl"] )){


    $yil=$_POST["yıl"];
    $yolcu_sys=$_POST["yolcu_sayısı"];
    $yolculuk_tr=$_POST["yolculuk_türü"];

   

    $ekle="INSERT INTO exeldeneme (yıl,yolcu_sayısı,yolculuk_türü) VALUES('$yil','$yolcu_sys','$yolculuk_tr')";
    $calistirekle=mysqli_query($baglantim,$ekle);
         if($calistirekle){
              echo 'olduuu';
            }


             else{
      
                    ' <div class="alert alert-success" role="alert">
                     bağlantı  olmadi
                 </div> ';

             }
}
    mysqli_close($baglantim);
}

?>
