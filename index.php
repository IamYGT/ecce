<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 
	 $tekil_veri_cek = $db->query("SELECT * FROM icerikler WHERE icerik_durum = 1 AND icerik_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo LANG("Anasayfa",$lang); ?> -  Ecce Kozmetik Medikal Ltd. Şti.</title>
<?php include("css.php")?>
</head>

<body>

    <!-- body wrap start -->
    <div class="body_wrap">
	<?php include("ust.php")?>
        <main>
            <!-- hero start -->
            <section class="hero-area">
                <div class="hero-social">
                    <ul>
                        <li><a href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a></li>
                         <li><a href="https://wa.me/<?php echo  $ayarlar["strWhatsappPhone_".$lang];  ?>?text=<?php echo  $ayarlar["strWhatsappMessage_".$lang];  ?>"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                    <p style="    min-width: 173px;" ><?php echo LANG("Sosyal Medya",$lang); ?></p>
                </div>
                <div class="hero-slider owl-carousel">
                     <?php
				$veri_cek = $db->query("SELECT * FROM slayt WHERE slayt_durum = 1 AND dil_id = '{$lang}' ORDER BY slayt_ust_id ASC");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>  <div class="hero-slide-item" data-background="<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>">
                        <div class="container">
                            <div class="hero-text">
                                <h2><?php echo 	$veri_listele["slayt_baslik"]; ?></h2>
                                <div class="hero-action">
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/<?php echo 	$veri_listele["slayt_butonlink"]; ?>" class="cta-btn btn-fill"><?php echo 	$veri_listele["slayt_buton"]; ?></a>
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/iletisim" class="cta-btn btn-border"><?php echo LANG("İletişim",$lang); ?></a>
                                </div>
                            </div> 
							   <div class="video-main">
                                <div class="promo-video">
                                    <div class="waves-block">
                                        <div class="waves wave-1"></div>
                                        <div class="waves wave-2"></div>
                                        <div class="waves wave-3"></div>
                                    </div>
                                </div>
                                <a href="tel:<?php echo $ayarlar["strPhone"]; ?>" class="video" data-lity=""><i class="fas fa-phone"></i></a>
                            </div>

                        </div>
                    </div>
                    <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
					</div>
            </section>
            <!-- hero end -->
            <!-- about start -->
		 

    <?php
				$veri_cek = $db->query("SELECT * FROM icerikler WHERE icerik_durum = 1 AND dil_id = '{$lang}' AND icerik_seo = 'hakkimizda'  ORDER BY icerik_ust_id ASC LIMIT 4");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
            <section class="about-area" data-background="assets/img/about-bg.png">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="site-heading">
                                    <h3 class="sub-title">Ecce Kozmetik Medikal Ltd. Şti.</h3>
                                    <h2 class="section-title"><?php echo 	$veri_listele["icerik_baslik"]; ?></h2>
                                </div>
                                <p><?php echo 	$veri_listele["icerik_aciklama"]; ?></p>
                               
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 col-md-6">
                        
                            <div class="about-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                <img  src="<?php echo $ayarlar["strURL"]; ?>/uploads/pages/<?php echo $veri_listele["icerik_resim"]; ?>" alt="img">
                             </div>
                        </div>
                    </div>
                </div>
            </section>
			 <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
  
     <section class="service-area service-page-area">
               <div class="container">
                  <div class="row">  
				  
				     <div class="row">
                        <div class="col-lg-12">
                            <div  class="site-heading">
                                <h3 class="sub-title">Ecce Kozmetik Medikal Ltd. Şti.</h3>
                                <h2 class="section-title"><?php echo LANG("Markalarımız",$lang); ?></h2>
                            </div>
                        </div>
                    </div>
					
					
				      <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 6");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 		<div class="col-lg-4 col-sm-6">
                        <div class="service-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                           <div class="service-icon">
                              <img style="    width: 150px;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>" />
                           </div>
                           <div class="service-text">
                              <h3><?php echo 	$veri_listele["haber_baslik"]; ?></h3>
                              <p><?php echo 	$veri_listele["haber_aciklama"]; ?></p>
                              <a  target="_blank" href="<?php echo 	$veri_listele["haber_kisaaciklama"]; ?>"  class="cta-btn btn-border"><?php echo LANG("Detay",$lang); ?></a>
                           </div>
                         </div>
                     </div> 
				 <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>

				 </div>
               </div>
            </section>
			 
            <!-- Latest News End -->
        </main>
       	<?php include("alt.php")?>
</body>

</html>
