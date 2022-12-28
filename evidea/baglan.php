<?php
try{
    $db= new PDO("mysql:host=localhost; dbname=evidea; charset=utf8", 'root','');
    //echo "Başarılı";//
}
catch(Exception $e)
{
    echo $e->message;
}

$hostname = "localhost";
$username = "root";
$password = "";
$database = "evidea";

$baglan = new mysqli($hostname, $username, $password, $database);
$baglan->set_charset("utf8");

$connect= mysqli_connect($hostname,$username,$password,$database);
$connect->set_charset("utf8");

try{
	$host='localhost';
	$vtadi='evidea';
	$kullanici='root';
	$sifre='';
	$vt=new PDO("mysql:host=$host;dbname=$vtadi;charset=UTF8","$kullanici",$sifre);
}
catch(PDOException $e){
	print $e->getMessage();
}

$con = mysqli_connect("localhost","root","","evidea");
$con->set_charset("utf8");
mysqli_query($con,"SET CHARACTER 'utf8'");
mysqli_query($con,"SET SESSION collation_connection ='utf8_turkish_ci'");

?>