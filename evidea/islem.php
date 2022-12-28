<?php
include("baglan.php");
$baglanti = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($baglanti,"evidea");


if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username = '$username' and password ='$password'";
    
    $sorgu = mysqli_query($baglanti, $sql);
    $dizi = mysqli_fetch_array($sorgu);
    
    if($dizi!=0){
        header("location:index.php");
    }else{
        echo "Yanlış Kimlik Bilgisi Girdiniz!</br>";
        echo "Lütfen Giriş Bilgilerinizi Kontrol Ediniz.</br>";
        echo "Giriş Ekranına Yönlendiriliyorsunuz...";
        header('Refresh:5; login.php');
    }    

}

// MAĞAZA EKLEME İŞLEMİ //
if(isset($_POST['magaza_ad'])){
    $magaza_ad = $_POST["magaza_ad"];
    $ilce = $_POST["ilce"];
    if(!$_POST['magaza_ad'] || !$_POST['ilce']){
        echo "Eksik veri girişi yaptınız!";
        header('Refresh:2; magazalar.php');
    }elseif($_POST['magaza_ad'] && $_POST['ilce']){
        $sorgu = $db->prepare('INSERT INTO magazalar SET magaza_ad =?, ilce_id =?');
        $ekle = $sorgu->execute([
            $magaza_ad, $ilce
        ]);
        if($ekle){
            echo"Kayıt Başarıyla Gerçekleştirildi.<br>Yönlendiriliyorsunuz... ";
            header('Refresh:2; magazalar.php');
        }else{
            echo "Bir Hata Oluştu. Tekrar Deneyiniz...";
        }
    }
    
}




?>