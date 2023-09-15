<?php
require_once("baglan.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    
    <table style="width: 1218px;height: 800px;text-align:center;box-sizing: border-box;padding: 0px;margin: 0px;margin-left: auto;margin-right: auto;">
        <tr>
            <td colspan="5" style="height: 100px;background-color: ghostwhite;"><img src="images/CharmagicoBanner.jpg" style="height: 230px;width: 1000px;margin-top: -1px;"></td>
        </tr>
        <tr>
            <td colspan="5" height="20">&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align: center; background-color: #d2cbd6;width: 200px; height: 470px;">
                <p><a href="index.php" style="text-decoration: none; color: black;font-size: 32px">Ana Sayfa</a></p>
                <p><a href="hakkımızda.php" style="text-decoration: none; color: black;font-size: 27px;">Hakkımızda</a></p>
                <p><a href="urunler.php" style="text-decoration: none; color: black;font-size: 27px">Ürünler</a></p>        
            </td>
            <td width="10" height="400">&nbsp;</td>
            <td style="background-color: #d2cbd6;width: 553px;height:400px;">
                <h4 style="margin-top: 11px;font-size: 28px;margin-bottom: 41px;">Charmagico'ya Hoşgeldiniz</h4>
                <p style="font-size: 19px;font-family: math;">Cadı Tarzı ve Minimalist Tasarımlarla Dolu Online Mağazamıza Hoş Geldiniz! <br>
                    Sizlere eşsiz bir deneyim sunmak için buradayız. Cadı tarzının büyüleyici ve minimalist estetiğin sade zarafeti ile buluştuğu mağazamızda, evinizi ve yaşamınızı dönüştürecek benzersiz ürünler sunuyoruz. <br>
                    Unutulmaz bir alışveriş deneyimi ve kendi cadı tarzı ve minimalist yolculuğunuz için ilham verici ürünlerle dolu bir dünyanın kapılarını aralayın. <br> Mağazamızı ziyaret edin ve kendi büyülü dünyanızı yaratmaya başlayın. <br><br>
                    Hemen şimdi alışveriş yapmak için <a href="https://www.etsy.com/shop/charmagico" target="_blank" style="text-decoration: none;color: mediumorchid;">tıklayın</a> ve sizi bekleyen özel fırsatları kaçırmayın!
                </p>
                   
            </td>
            <td width="10px" height="400">&nbsp;</td>
            <td width="300px" height="400" valign="top">
                <?php if(isset($_SESSION["Kullanici"])){ ?>
                    <table width="300px" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="30" style="color: #FFFFFF; background-color: #7327A2">&nbsp;Üyelik Alanı</td>
                        </tr>
                        <tr>
                            <td height="30" align="left">Merhaba<?php echo " " . $uyeninAdiSoyadi; ?></td>
                        </tr>
                        <tr>
                            <td height="30" align="right"><a href="cikis.php" style="text-decoration: none; color: #6c666e">Çıkış Yap</a></td>
                        </tr>
                    </table>
                    
                <?php }else{ ?>
                      
                    <form action="uyegiris.php" method="post">
                        <table width="300px" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td colspan="3" height="30" style="color: #FFFFFF; background-color: #7327A2">&nbsp;Üyelik Alanı</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mb-3">
                                        <label for="" class="form-label"></label>
                                        <input type="text" class="form-control" name="kullaniciadi" style="width: 100%;height: 29px;margin-left: 0px;margin-top: -16px;border-radius: 8px;border-color: lightgray;border-left-color: lightgray;" placeholder="Kullanıcı Adı">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mb-3">
                                        <label for="" class="form-label"></label>
                                        <input type="password" class="form-control" name="sifre" style="width: 100%;height: 29px;margin-left: 0px;margin-top: -29px;border-radius: 8px;border-color: lightgray;border-left-color: lightgray;" placeholder="Şifre">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td height="30" width="190%" align="left"><button type="submit" class="btn btn-outline-secondary" style="height: 28px;margin-top: -22px;width: 87px;margin-left: 212px;border-radius: 8px;border-color: lightgray;border-left-color: lightgray;border-block-color: lightgray;border-block-end-color: lightgray;font: caption;font-size: 14px;">Giriş Yap</button></td>
                            </tr>
                            <tr>
                                <td colspan="3" height="30" align="left">
                                    <p style="margin-left: -5px;margin-top: -8px;"><a href="uyeol.php" style="text-decoration: none;color: #6c666e;margin-left: 226px;font-size: 14px;">Yeni Üye Ol</a></p>
                                </td>
                            </tr>
                        </table>
                    </form>
                
                
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td colspan="5" height="20">&nbsp;</td>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
<?php
$veritabaniBaglantisi = null;
?>
