<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
	 $tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); 
 ?>
<!DOCTYPE html>
<html lang="tr">
   <head>
	<title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Ecce Kozmetik Medikal Ltd. Şti.</title>
 <?php include("css.php")?>
   </head>
   <body>
     
      <!-- body wrap start -->
      <div class="body_wrap">
        <?php include("ust.php")?>
         <main>
            <!-- breadcrumb start -->
            <section style="    background-image: url(<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>);" class="breadcrumb-area jarallax" data-background="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>">
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
                           <h1><?php echo $tekil_veri_cek["haber_baslik"]; ?></h1>
                           <ul>
                              <li class="home"><a href="<?php echo $ayarlar["strURL"]; ?>/index"><span class="fas fa-home"></span></a></li>
                                <li><?php echo LANG("Haberler",$lang); ?></li>
                               <li><?php echo $tekil_veri_cek["haber_baslik"]; ?></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- breadcrumb end -->
            <!-- Blog Start -->
            <section class="blog-details-page-area">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="blog-left wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"> 
                           <div  style="text-align:center;" class="blog-left-content">
                              
                              <p> <?php echo $tekil_veri_cek["haber_aciklama"]; ?> </p>
                              <div style="margin-top:23px" class="blog-left-content-share">
                                 <h3><?php echo LANG("Paylaş",$lang); ?></h3>
                                 <ul>
                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript:;"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="javascript:;"><i class="fab fa-instagram-square"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                            </div>
                     </div>
                    
                  </div>
               </div>
            </section>
            <!-- Blog End -->
         </main>
      <?php include("alt.php")?>
   </body>
</html>