<?php
require_once("baglan.php");

if(isset($_POST["kullaniciadi"])){
    $gelenKullaniciAdi = Filtre($_POST["kullaniciadi"]);
}else{
    $gelenKullaniciAdi = "";
}

if(isset($_POST["sifre"])){
    $gelenSifre = Filtre($_POST["sifre"]);
}else{
    $gelenSifre = "";
}

$kontrolSorgusu = $veritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi=? AND sifre=?");
$kontrolSorgusu->execute([$gelenKullaniciAdi, $gelenSifre]);
$kontrolSayisi = $kontrolSorgusu->rowCount();

if($kontrolSayisi>0){
    $_SESSION["Kullanici"] = $gelenKullaniciAdi;
    header("Location:index.php");
    exit();
}else{
    echo "HATA<br/>";
    echo "Girilen Bilgiler İle Eşleşen Kullanıcı Kaydı Bulunmamaktadır.<br/>";
    echo "Ana Sayfaya Dönmek İçin Buraya <a href='index.php'>Tıklayınız</a>.";
}

?>