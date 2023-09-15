<?php
require_once("baglan.php");
if(isset($_SESSION["Kullanici"])){
    header("Location:index.php");
    exit();
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Ol</title>
</head>
<body>
    <table style="width: 1000px;height: 600px;text-align:center;box-sizing: border-box;padding: 0px;margin: 0px;margin-left: auto;margin-right: auto;">
        <tr>
            <td colspan="5" style="height: 100px;background-color: #CCCCCC;"><img src="images/CharmagicoBanner.jpg" style="height: 230px;width: 1000px;"></td>
        </tr>
        <tr>
            <td colspan="5" height="20">&nbsp;</td>
        </tr>
        <tr>
            <td width="200" height="400" style="text-align: center; background-color: #d2cbd6">
                <p><a href="index.php" style="text-decoration: none; color: black;font-size: 27px">Ana Sayfa</a></p>
                <p><a href="hakkımızda.php" style="text-decoration: none; color: black;font-size: 24px;">Hakkımızda</a></p>
                <p><a href="urunler.php" style="text-decoration: none; color: black;font-size: 24px">Ürünler</a></p>        
            </td>
            <td width="10" height="400">&nbsp;</td>
            <td width="480" height="400" style="background-color: #d2cbd6;">
                <h4 style="margin-top: -124px;font-size: 25px;margin-bottom: 19px;">Charmagico'ya Hoşgeldiniz</h4>
                <p style="font-size: 17px;font-family: math;margin-bottom: -119px;">Cadı Tarzı ve Minimalist Tasarımlarla Dolu Online Mağazamıza Hoş Geldiniz! <br>
                    Sizlere eşsiz bir deneyim sunmak için buradayız. Cadı tarzının büyüleyici ve minimalist estetiğin sade zarafeti ile buluştuğu mağazamızda, evinizi ve yaşamınızı dönüştürecek benzersiz ürünler sunuyoruz. <br>
                    Unutulmaz bir alışveriş deneyimi ve kendi cadı tarzı ve minimalist yolculuğunuz için ilham verici ürünlerle dolu bir dünyanın kapılarını aralayın. <br> Mağazamızı ziyaret edin ve kendi büyülü dünyanızı yaratmaya başlayın. <br><br>
                    Hemen şimdi alışveriş yapmak için <a href="https://www.etsy.com/shop/charmagico" style="text-decoration: none;">tıklayın</a> ve sizi bekleyen özel fırsatları kaçırmayın!
                </p>
                   
            </td>
            <td width="10" height="400">&nbsp;</td>
            <td width="300" height="400" valign="top">
                <form action="uyeolsonuc.php" method="post">
                    <table width="300" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td colspan="3" height="30" style="background-color: #7327A2;color:#FFFFFF">&nbsp;Yeni Üye Kayıt Alanı</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-3">
                                    <label for="" class="form-label"></label>
                                    <input type="text" class="form-control" name="kullaniciadi" style="width: 98%;height: 27px;margin-left: -1px;margin-top: 8px;border-radius: 8px;border-color: darkgray;border-block-start-color: unset;border-left-color: lightgray;" placeholder=" Kullanıcı Adı">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-3">
                                    <label for="" class="form-label"></label>
                                    <input type="password" class="form-control" name="sifre" style="width: 98%;height: 27px;margin-left: -1px;margin-top: 9px;border-radius: 8px;border-color: darkgray;border-block-start-color: unset;border-left-color: lightgray;" placeholder=" Şifre">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-3">
                                    <label for="" class="form-label"></label>
                                    <input type="text" class="form-control" name="adsoyad" style="width: 98%;height: 27px;margin-left: -1px;margin-top: 9px;border-radius: 8px;border-color: darkgray;border-block-start-color: unset;border-left-color: lightgray;" placeholder=" Adı Soyadı">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-3">
                                    <label for="" class="form-label"></label>
                                    <input type="email" class="form-control" name="emailadresi" style="width: 98%;height: 27px;margin-left: -1px;margin-top: 9px;border-radius: 8px;border-color: darkgray;border-block-start-color: unset;border-left-color: lightgray;" placeholder=" E-Posta Adresi">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td height="30" width="190" align="right"><button type="submit" class="btn btn-outline-secondary" style="height: 28px;margin-top: 6px;width: 76px;margin-left: 222px;border-radius: 8px;border-color: ghostwhite;border-left-color: lightgray;border-block-color: lightgray;border-block-end-color: ghostwhite;">Kayıt Ol</button></td>
                        </tr>
                    </table>
                </form>  
            </td>
        </tr>
        <tr>
            <td colspan="5" height="20">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="5" height="100" style="background-color: #d2cbd6;">
                <p style="font-size: 19px;margin-bottom: 13px;">Sosyal Medya Ve İletişim Hesaplarımız</p>
                <a href="https://instagram.com/charmagico" target="_blank"><input type="image" src="images/instagram-logo.png" style="height: 34px;margin-right: 23px;margin-bottom: -7px;"></a>
                <a href="https://www.facebook.com/charmagico" target="_blank"><input type="image" src="images/facebook-logo.png" style="height: 22px;"></a>
                <a href="https://tr.pinterest.com/charmagicos/" target="_blank"><input type="image" src="images/pinterest-logo.png" style="height: 22px;margin-right: 21px;margin-left: 25px;"></a>
                <a href="https://charmagicos@gmail.com" target="_blank"><input type="image" src="images/Gmail-Logo.svg" style="height: 23px;"></a>
            </td>
        </tr>
    </table>
</body>
</html>
<?php
}
$veritabaniBaglantisi = null;
?>