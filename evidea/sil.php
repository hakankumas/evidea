<?php
if(isset($_GET["magazalarid"])){
    include("baglan.php");
    $sorgu = $db->prepare('DELETE FROM magazalar WHERE magaza_id=?');
    $sonuc = $sorgu->execute([$_GET['magazalarid']]);
    if($sonuc){
        header("Location:magazalar.php");
    }else{
        echo 0;
    }
}

if(isset($_GET["kargoid"])){
    include("baglan.php");
    $sorgu = $db->prepare('DELETE FROM kargo1 WHERE kargo_id=?');
    $sonuc = $sorgu->execute([$_GET['kargoid']]);
    if($sonuc){
        header("Location:kargo.php");
    }else{
        echo 0;
    }
}

if(isset($_GET["ilcelerid"])){
    include("baglan.php");
    $sorgu = $db->prepare('DELETE FROM ilceler1 WHERE ilce_id=?');
    $sonuc = $sorgu->execute([$_GET['ilcelerid']]);
    if($sonuc){
        header("Location:ilceler.php");
    }else{
        echo 0;
    }
}

if(isset($_GET["urunlerid"])){
    include("baglan.php");
    $sorgu = $db->prepare('DELETE FROM urunler1 WHERE urun_id=?');
    $sonuc = $sorgu->execute([$_GET['urunlerid']]);
    if($sonuc){
        header("Location:urunler.php");
    }else{
        echo 0;
    }
}


if(isset($_GET["musterilerid"])){
    include("baglan.php");
    $sorgu = $db->prepare('DELETE FROM musteriler1 WHERE musteri_id=?');
    $sonuc = $sorgu->execute([$_GET['musterilerid']]);
    if($sonuc){
        header("Location:musteriler.php");
    }else{
        echo 0;
    }
}

if(isset($_GET["siparislerid"])){
    include("baglan.php");
    $sorgu = $db->prepare('DELETE FROM siparisler1 WHERE siparis_id=?');
    $sonuc = $sorgu->execute([$_GET['siparislerid']]);
    if($sonuc){
        header("Location:siparisler.php");
    }else{
        echo 0;
    }
}
















?>