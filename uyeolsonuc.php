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

if(isset($_POST["adsoyad"])){
    $gelenIsimSoyisim = Filtre($_POST["adsoyad"]);
}else{
    $gelenIsimSoyisim = "";
}

if(isset($_POST["emailadresi"])){
    $gelenEmailAdresi = Filtre($_POST["emailadresi"]);
}else{
    $gelenEmailAdresi = "";
}

$kontrolSorgusu = $veritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi=? OR emailadresi=?");
$kontrolSorgusu->execute([$gelenKullaniciAdi, $gelenEmailAdresi]);
$kontrolSayisi = $kontrolSorgusu->rowCount();

if($kontrolSayisi>0){
    echo "HATA<br/>";
    echo "Kullanıcı Adı veya E-Mail Adresi Başka Bir Üye Tarafından Kullanılmaktadır.<br/>";
    echo "Ana Sayfaya Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
}else{
    $kayitEkle = $veritabaniBaglantisi->prepare("INSERT INTO uyeler (kullaniciadi, sifre, adisoyadi, emailadresi, kayittarihi) values (?, ?, ?, ?, ?)");
    $kayitEkle->execute([$gelenKullaniciAdi, $gelenSifre, $gelenIsimSoyisim, $gelenEmailAdresi, $zamanDamgasi]);
    $kayitKontrol = $kayitEkle->rowCount();

    if($kayitKontrol>0){
        echo "TEBRİKLER<br/>";
        echo "Kullanıcı Kaydı Başarıyla Tamamlandı.<br/>";
        echo "Ana Sayfaya Dönmek İçin Buraya <a href='index.php'>Tıklayınız</a>.";
    }
}

?>