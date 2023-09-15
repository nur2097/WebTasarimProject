<?php
session_start();
ob_start();

try{
    $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=deneme;charset=UTF8", "root", "");
}catch(PDOException $hata){
    echo "Bağlantı Hatası<br/>" . $hata->getMessage();
    die();
}

function Filtre($deger){
    $bir = trim($deger);
    $iki = strip_tags($bir);
    $uc = htmlspecialchars($iki, ENT_QUOTES);
    $sonuc = $uc;
    return $sonuc;
}

$zamanDamgasi = time();

if(isset($_SESSION["Kullanici"])){
    $uyelerSorgusu = $veritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi=?");
    $uyelerSorgusu->execute([$_SESSION["Kullanici"]]);
    $uyelerKayitSayisi = $uyelerSorgusu->rowCount();
    $uyelerKaydi =$uyelerSorgusu->fetch(PDO::FETCH_ASSOC);
    
    if($uyelerKayitSayisi>0){
        $uyeninAdiSoyadi = $uyelerKaydi["adisoyadi"];
    }else{
        $uyeninAdiSoyadi = "";
    }
}
?>