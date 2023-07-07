<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
   <head>
	<title><?php echo LANG("İletişim",$lang); ?> - Ecce Kozmetik Medikal Ltd. Şti.</title>
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
                           <h1><?php echo LANG("İletişim",$lang); ?></h1>
                           <ul>
                              <li class="home"><a href="<?php echo $ayarlar["strURL"]; ?>/index"><span class="fas fa-home"></span></a></li>
                              <li><?php echo LANG("İletişim",$lang); ?></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- breadcrumb end -->
            <!-- Contact Page Start -->
            <section class="contact-page-area">
               <div class="container">
                  <div class="row align-items-center">
                    
                     <div class="col-lg-5 col-sm-6">
                        <div class="contact-page-left">
                           <h3><?php echo LANG("İletişim Bilgileri",$lang); ?></h3>
                           <div class="contact-info">
                              <div class="single-contact-info wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                 <div class="contact-info-icon">
                                    <span class="fas fa-map-marker-alt"></span>
                                 </div>
                                 <div class="contact-info-text">
                                    <h5><?php echo LANG("Adres",$lang); ?></h5>
                                    <p><?php echo $ayarlar["strAddress"]; ?></p>
                                 </div>
                              </div>
                              <div class="single-contact-info wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                 <div class="contact-info-icon">
                                    <span class="fas fa-phone-alt"></span>
                                 </div>
                                 <div class="contact-info-text">
                                    <h5><?php echo LANG("Telefon",$lang); ?></h5>
                                   <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <p><?php echo $ayarlar["strPhone"]; ?></p> </a>
                                  </div>
                              </div>
                              <div class="single-contact-info wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                 <div class="contact-info-icon">
                                    <span class="fas fa-envelope"></span>
                                 </div>
                                 <div class="contact-info-text">
                                    <h5><?php echo LANG("Eposta",$lang); ?></h5>
                                   <a href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <p><?php echo $ayarlar["strMail"]; ?></p> </a>
                                  </div>
                              </div>
                           </div>
                        </div>
                     </div>
					  <div class="col-lg-7 col-sm-6">
                        <div class="contact-page-right">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1018.4140237222989!2d28.99113923960071!3d41.068100998023134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab6fc4a46fc63%3A0x9ce9fcc6cd43250!2sTrump%20Towers!5e0!3m2!1str!2str!4v1635422309266!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                        </div>
                     </div>
					 
					  <div style="margin-top:70px;" class="col-lg-12">
                        <div class="contact-form">
                           <div class="site-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                               <h2 class="section-title"><?php echo LANG("İletişim Formu",$lang); ?></h2>
                           </div>
                           <?php 
										if(isset($submit)){
											if(!empty($isim) ||  !empty($eposta) || !empty($telefon) || !empty($konu) ||  !empty($mesaj)){  

                                           /*          require 'include/PHPMailer/src/Exception.php';
                                                    require 'include/PHPMailer/src/PHPMailer.php';
                                                    require 'include/PHPMailer/src/SMTP.php'; */
                                                    require_once("include/phpmailer/class.phpmailer.php");
                                                    $mail = new PHPMailer(true); 
                                                    $mail->IsSMTP();
                                                    $mail->SMTPDebug = 0; 
                                                    $mail->SMTPAuth = true;
													$mail->SMTPSecure = "tls";
													$mail->Host = "smtp.yandex.com";
													$mail->Port = 587;
                                                    $mail->IsHTML(true);
                                                    $mail->SetLanguage("tr", "phpmailer/language");
                                                    $mail->CharSet ="utf-8";
                                                    $mail->Username = "info@ecce.com.tr"; //yandex mail adresi
                                                    $mail->Password = "srkuybahblvkxyip"; 
                                                    $mail->SetFrom("info@ecce.com.tr", "İletişim Formundan Gelen Mesaj"); // Mail attığımızda yazacak isim
                                                    $mail->AddAddress("info@ecce.com.tr"); // Maili gondereceğimiz kişi/alıcı
                                                    $mail->Subject = "İletişim Formundan Gelen Mesaj"; // Konu başlığı 
                                                    $mail->Body = '
                                                    <html>
                                                        <body>
                                                            <table class="made-in_text" border="0" cellSpacing="10" cellPadding="4" height="254" width="700">
																<tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Adı :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $isim . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Eposta :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $eposta . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Konu :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $konu . '</font></td>
                                                                </tr>  
																 	 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Telefon :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $telefon . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Mesaj :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $mesaj . '</font></td>
                                                                </tr>  
																  
                                                            </table>
                                                        </body>
                                                    </html>
                                                    '; // Mailin içeriği
                                               
												if($mail->send()){
													$error = array(
														'type'	=>	'success',
														'title'	=>	'Başarılı!',
														'text'	=>	'Başvurunuz başarılı şekilde gönderildi, anasayfaya dönmek için <a class="alert-link" href="/">buraya tıklayın</a>..'
													);
												} else {
													$error = array(
														'type'	=>	'danger',
													'title'	=>	'Hata!',
													'text'	=>	'Boş alan bıraktınız, geri dönmek için <a class="alert-link" onclick="javascript:history.go(-1); return false;" href="#">buraya tıklayın</a>..'
													);
												}
											} else {
												$error = array(
													'type'	=>	'danger',
													'title'	=>	'Hata!',
													'text'	=>	'Boş alan bıraktınız, geri dönmek için <a class="alert-link" onclick="javascript:history.go(-1); return false;" href="#">buraya tıklayın</a>..'
												);
											}
										} 
?>

									
									<?php  
			if(isset($error)) {
?>
					<div class="row">
						<div class="col-lg-12" style="margin-bottom:30px;">
							<div class="alert alert-<?php echo $error["type"]; ?> solid alert-dismissible fade show">
								<strong><?php echo $error["title"]; ?></strong>
								<p><?php echo $error["text"]; ?></p>
							</div>
						</div>
					</div>
<?php
			}
?>
<form  action="#" method="POST" >
                              <div class="row">
                                 <div class="col-lg-6 col-sm-6">
                                    <input type="text"  name="isim" placeholder="<?php echo LANG("İsminiz",$lang); ?>">
                                 </div>
                                 <div class="col-lg-6 col-sm-6">
                                    <input type="email" name="eposta"  placeholder="<?php echo LANG("Eposta",$lang); ?>">
                                 </div>
                                 <div class="col-lg-6 col-sm-6">
                                    <input type="tel"  name="telefon" placeholder="<?php echo LANG("Telefon",$lang); ?>">
                                 </div>
                                 <div class="col-lg-6 col-sm-6">
                                    <input type="text" name="konu"  placeholder="<?php echo LANG("Konu",$lang); ?>">
                                 </div>
                                 <div class="col-lg-12 col-sm-12">
                                    <textarea name="mesaj"  placeholder="<?php echo LANG("Mesajınız",$lang); ?>"></textarea>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="contact-form-action">
                                       <button  name="submit"  class="form-button" type="submit"><?php echo LANG("Gönder",$lang); ?></button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
					 
                    
                  </div>
               </div>
            </section>
            <!-- Contact Page End -->
         </main>
       <?php include("alt.php")?>
   </body>
</html>