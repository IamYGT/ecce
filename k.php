<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
	 $tekil_veri_cek = $db->query("SELECT * FROM icerikler WHERE icerik_durum = 1 AND icerik_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); 
 ?>
<!DOCTYPE html>
<html lang="tr">
   <head>
	<title><?php echo $tekil_veri_cek["icerik_baslik"]; ?> - Ecce Kozmetik Medikal Ltd. Şti.</title>
 <?php include("css.php")?>
   </head>
   <body>
     
      <!-- body wrap start -->
      <div class="body_wrap">
        <?php include("ust.php")?>
         <main>
            <!-- breadcrumb start -->
            <section class="breadcrumb-area jarallax" data-background="<?php echo $ayarlar["strURL"]; ?>/assets/img/breadcrumb-bg.jpg">
                <div class="hero-social">
                    <ul>
                        <li><a href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a></li>
                         <li><a href="https://wa.me/<?php echo  $ayarlar["strWhatsappPhone_".$lang];  ?>?text=<?php echo  $ayarlar["strWhatsappMessage_".$lang];  ?>"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                    <p style="    min-width: 173px;" ><?php echo LANG("Sosyal Medya",$lang); ?></p>
                </div>
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="breadcrumb-inn wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                           <h1><?php echo $tekil_veri_cek["icerik_baslik"]; ?></h1>
                           <ul>
                              <li class="home"><a href="<?php echo $ayarlar["strURL"]; ?>/index"><span class="fas fa-home"></span></a></li>
                                <li><?php echo $tekil_veri_cek["icerik_baslik"]; ?></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="about-page-area pb-0">
               <div class="container"> 
                  <div class="row align-items-center">
                     <div class="col-md-6">
                        <div class="about-left">
                           <div class="single-about-listing wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"> 
                              <div class="about-text">
                           <h3 class="sub-title">Ecce Kozmetik Medikal Ltd. Şti.</h3>
                           <h2 class="section-title"><?php echo $tekil_veri_cek["icerik_baslik"]; ?></h2>
                                 <p><?php echo $tekil_veri_cek["icerik_aciklama"]; ?></p>
                              </div>
                           </div>
                            </div>
                     </div>
                     <div class="col-md-6">
                        <div class="about-right">
                           
                           <div class="single-about-image wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                              <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/pages/<?php echo $tekil_veri_cek["icerik_resim"]; ?>" alt="img" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         
		    <section style="padding-top: 80px;" class="service-area service-page-area">
               <div class="container">
                  <div class="row">  
				  
				          <div class="row">
                     <div class="col-lg-12">
					 
                        <div class="site-heading text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                           <h3 class="sub-title">Ecce Kozmetik Medikal Ltd. Şti.</h3>
                           <h2 class="section-title"><?php echo LANG("Markalarımız",$lang); ?></h2>
                        </div>
                     </div>
                  </div>
				  
				  
				      <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC");
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
                              <a  target="_blank" href="<?php echo 	$veri_listele["haber_kisaaciklama"]; ?>"   class="cta-btn btn-border"><?php echo LANG("Detay",$lang); ?></a>
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
		 
         </main>
       <?php include("alt.php")?>
   </body>
</html>