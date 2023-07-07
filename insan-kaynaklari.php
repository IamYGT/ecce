<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
   <head>
	<title><?php echo LANG("İnsan Kaynakları",$lang); ?> - Ecce Kozmetik Medikal Ltd. Şti.</title>
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
                           <h1><?php echo LANG("İnsan Kaynakları",$lang); ?></h1>
                           <ul>
                              <li class="home"><a href="<?php echo $ayarlar["strURL"]; ?>/index"><span class="fas fa-home"></span></a></li>
                              <li><?php echo LANG("İnsan Kaynakları",$lang); ?></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- breadcrumb end -->
            <!-- Contact Page Start -->
            <section style="    background: white;" class="contact-page-area">
               <div class="container">
                  <div class="row align-items-center">
                    
                  <div style="margin-top:70px;" class="col-lg-12">
                        <div  style="    position: unset;
    background-image: none;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: scroll;
    padding: 0px;
    margin-bottom: 100px;
    z-index: 1;" class="contact-form">
                           <div class="site-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                               <h2  style="    color: #000;" class="section-title"><?php echo LANG("İnsan Kaynakları",$lang); ?></h2>
                           </div>
                            <?php 
							  if(isset($submit)){
											if(!empty($isim) ||   !empty($pozisyon) || !empty($telefon) || !empty($eposta) || !empty($dtarih) || !empty($dyeri) || !empty($cinsiyet) || !empty($ogretim) || !empty($YabanciDil) ||  !empty($document) ||   !empty($aciklama)){ 
                                           /*       require 'include/PHPMailer/src/Exception.php';
                                                    require 'include/PHPMailer/src/PHPMailer.php';
                                                    require 'include/PHPMailer/src/SMTP.php'; */
													 
													
												if ($_FILES["document"]) {
													$yol = "uploads/document";
													$dosyaAdi = uniqid().'-'.$_FILES["document"]["name"];
													$yuklemeYeri = __DIR__ . DIRECTORY_SEPARATOR . $yol . DIRECTORY_SEPARATOR . $dosyaAdi;
													if ($_FILES["document"]["size"]  > 5000000) {
														$error = array(
															'type'	=>	'danger',
															'title'	=>	'Hata!',
															'text'	=>	'Maksimum 5MB dosya yükleyebilirsiniz. <a class="alert-link" href="/index"> burayı tıklayın </a> ..'
														);
														return;
													} else {
														$dosyaUzantisi = pathinfo($_FILES["document"]["name"], PATHINFO_EXTENSION);
														if ($dosyaUzantisi != "pdf" && $dosyaUzantisi != "word" && $dosyaUzantisi != "jpg") { # Dosya uzantı kontrolü
															$error = array(
																'type'	=>	'danger',
																'title'	=>	'Hata!',
																'text'	=>	'Sadece jpg ve png uzantılı dosyalar yüklenebilir. <a class="alert-link" href="/index"> burayı tıklayın </a> ..'
															);
															return;
														} else { 
														 //uploads/document/605661a8b1a7a-kvkk-formu.pdf
															$YuklemeDurumu = move_uploaded_file($_FILES["document"]["tmp_name"], $yuklemeYeri); 
															$dosyaLink = $dosyaAdi;
														}
													}
												} else {
													$error = array(
														'type'	=>	'danger',
														'title'	=>	'Hata!',
														'text'	=>	'Lütfen bir dosya seçiniz <a class="alert-link" href="/index"> burayı tıklayın </a> ..'
													);
													return;
												} 
                                                    require_once("include/phpmailer/class.phpmailer.php");
                                                    $mail = new PHPMailer(true); 
                                                    $mail->IsSMTP();
                                                    $mail->SMTPDebug = 1; 
                                                    $mail->SMTPAuth = true;
                                                    $mail->SMTPSecure = 'tls';
                                                    $mail->Host = 'smtp.yandex.com';
                                                    $mail->Port = 567;
                                                    $mail->IsHTML(true);
                                                    $mail->SetLanguage("tr", "phpmailer/language");
                                                    $mail->CharSet ="utf-8";
                                                    $mail->Username = "info@ecce.com.tr"; //yandex mail adresi
                                                    $mail->Password = "srkuybahblvkxyip"; 
                                                    $mail->SetFrom("info@ecce.com.tr", "Kariyer Formundan Gelen Mesaj"); // Mail attığımızda yazacak isim
                                                    $mail->AddAddress("info@ecce.com.tr"); // Maili gondereceğimiz kişi/alıcı
                                                    $mail->Subject = "Kariyer Formundan Gelen Mesaj"; // Konu başlığı 
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
                                                                    <font face="Tahoma" size="2"><strong>Telefon :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $telefon . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>İş Pozisyonu :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $pozisyon . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Doğum Tarihi :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $dtarih . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Doğum Yeri :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $dyeri . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Cinsiyet :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $cinsiyet . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Eğitim Durumu :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $egitim . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Dil :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. implode(",", $YabanciDil) . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>CV :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. 'https://www.ecce.com.tr/test/uploads/document/'.$dosyaLink . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Hakkında Bilgiler :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $aciklama . '</font></td>
                                                                </tr>  
																 
                                                            </table>
                                                        </body>
                                                    </html>
                                                    '; // Mailin içeriği
                                               
												if($mail->send()){
													$error = array(
														'type'	=>	'success',
														'title'	=>	'Başarılı!',
														'text'	=>	'Talebiniz başarıyla gönderildi, Ana sayfaya dönmek için <a class="alert-link" href="/index"> burayı tıklayın </a> ..'
													);
												} else {
													$error = array(
														'type'	=>	'danger',
														'title'	=>	'Hata!',
														'text'	=>	'Mesajınız Gönderilemedi.'
													);
												}
											} else {
												$error = array(
													'type'	=>	'danger',
														'title'	=>	'Hata!',
														'text'	=>	'Mesajınız Gönderilemedi.'
												);
											}
										} 
?>

									
									<?php  
			if(isset($error)) {
?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-<?php echo $error["type"]; ?> solid alert-dismissible fade show">
								<strong><?php echo $error["title"]; ?></strong>
								<p><?php echo $error["text"]; ?></p>
							</div>
						</div>
					</div>
<?php
			}
?> 	<form   action="#" method="POST" enctype="multipart/form-data">
											<div class="messages"></div> <div class="input__wrap controls">
												<div class="row">
													<div class="col-lg-6">
														<div class="form-group">
															<div class="entry">
																<label><?php echo LANG("isminiz",$lang); ?> *</label>
																<input type="text" id="isim"  name="isim"  required="required" data-error="name is required.">
															</div>
															<div class="help-block with-errors"></div>
														</div>
													</div>

								 					<div class="col-lg-6">
														<div class="form-group">
															<div class="entry">
																<label><?php echo LANG("eposta",$lang); ?> *</label>
																<input   type="email" id="eposta"  name="eposta"   required="required" data-error="Valid email is required.">
															</div>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													
								 					
													
													<div class="col-lg-6">
														<div class="form-group">
															<div class="entry">
																<label><?php echo LANG("telefon",$lang); ?> *</label>
																<input  type="text" id="telefon"  name="telefon"  required="required" data-error="name is required.">
															</div>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													
													
													<div class="col-lg-6">
														<div class="form-group">
															<div class="entry">
																<label><?php echo LANG("İş Pozisyonu",$lang); ?> *</label>
																<input  type="text" id="pozisyon"  name="pozisyon"   required="required" data-error="name is required.">
															</div>
															<div class="help-block with-errors"></div>
														</div>
													</div>
	
													<div class="col-lg-6">
														<div class="form-group">
															<div class="entry">
																<label><?php echo LANG("Doğum Tarihiniz",$lang); ?> *</label>
																<input  type="text" id="dtarih"  name="dtarih"  required="required" data-error="name is required.">
															</div>
															<div class="help-block with-errors"></div>
														</div>
													</div>
	
													<div class="col-lg-6">
														<div class="form-group">
															<div class="entry">
																<label><?php echo LANG("Doğum Yeriniz",$lang); ?> *</label>
																<input  type="text" id="dyeri"  name="dyeri"  required="required" data-error="name is required.">
															</div>
															<div class="help-block with-errors"></div>
														</div>
													</div>

<div class="col-lg-6">
	<div class="form-group">
		<div class="entry">
			<select id="cinsiyet"  name="cinsiyet"  style="background: none;    padding: 15px;    border-color: #11a19a;    width: 100%;        font-family: 'Rubik', sans-serif;    font-size: 16px;"  class="form-select" aria-label="Default select example">
				<option selected><?php echo LANG("Cinsiyet Seçiniz",$lang); ?></option>
				<option value="Erkek"><?php echo LANG("Erkek",$lang); ?></option>
				<option value="Kadın"><?php echo LANG("Kadın",$lang); ?></option>
			</select> 

		</div>
 	</div>
</div>

<div class="col-lg-6">
	<div class="form-group">
		<div class="entry">
			<select id="egitim"  name="egitim"  style="background: none;    padding: 15px;    border-color: #11a19a;    width: 100%;        font-family: 'Rubik', sans-serif;    font-size: 16px;"  class="form-select" aria-label="Default select example">
				<option selected><?php echo LANG("Eğitim",$lang); ?></option>
				<option value="İlkokul"><?php echo LANG("İlkokul",$lang); ?></option>
				<option value="Ortaokul"><?php echo LANG("Ortaokul",$lang); ?></option>
				<option value="Lise"><?php echo LANG("Lise",$lang); ?></option>
 				<option value="Üniversite"><?php echo LANG("Üniversite",$lang); ?></option>
			</select> 

		</div>
 	</div>
</div>
 
													
	 <div class="col-lg-12 " style="margin-bottom:40px;">
	<div id="dil"  name="dil" class="form-group">
		<div class="row"> 
			<div class="col-lg-12" style="margin-bottom:15px;">
				<label><?php echo LANG("Yabancı Dil",$lang); ?></label>
			</div>
			<div class="col-lg-2">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" name="YabanciDil[]" id="inlineCheckbox1" value="İngilizce">
						<label style="    margin-top: 18px;    margin-left: 12px;" class="form-check-label" for="inlineCheckbox1"><?php echo LANG("İngilizce",$lang); ?></label>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="YabanciDil[]" id="inlineCheckbox2" value="Almanca">
							<label style="    margin-top: 18px;    margin-left: 12px;"  class="form-check-label" for="inlineCheckbox2"><?php echo LANG("Almanca",$lang); ?></label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="YabanciDil[]" id="inlineCheckbox3" value="Fransızca">
								<label style="    margin-top: 18px;    margin-left: 12px;"  class="form-check-label" for="inlineCheckbox3"><?php echo LANG("Fransızca",$lang); ?></label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" name="YabanciDil[]" id="inlineCheckbox4" value="İspanyolca">
									<label style="    margin-top: 18px;    margin-left: 12px;"  class="form-check-label" for="inlineCheckbox4"><?php echo LANG("İspanyolca",$lang); ?></label>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" name="YabanciDil[]" id="inlineCheckbox5" value="Arapça">
										<label style="    margin-top: 18px;    margin-left: 12px;"  class="form-check-label" for="inlineCheckbox5"><?php echo LANG("Arapça",$lang); ?></label>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="YabanciDil[]" id="inlineCheckbox6" value="Rusça">
											<label style="    margin-top: 18px;    margin-left: 12px;"  class="form-check-label" for="inlineCheckbox6"><?php echo LANG("Rusça",$lang); ?></label>
										</div>
									</div>
								</div>
							</div>
						</div>
													<div class="col-lg-12">
														<div class="form-group">
															<div class="entry">
 																 
																 <div class="mb-3">
  <label for="formFile" class="form-label"><?php echo LANG("CV",$lang); ?></label>
   <input id="dosya"  name="document" class="form-control" type="file"  >
</div>

															</div>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-lg-12">
														<div class="form-group">
															<div class="entry">
																<label><?php echo LANG("Hakkınızda Bilgiler",$lang); ?></label>
																<textarea   class="form-control" id="aciklama"  name="aciklama"  required="required" data-error="Please,leave us a message."></textarea>
															</div>
															<div class="help-block with-errors"></div>
														</div>
													</div>

														

													<div class="col-12">
														<div class="text-center">
															<div class="image-zoom w-auto d-inline-block">
																<button class="form-button" type="submit" name="submit">
																	 <?php echo LANG("Gönder",$lang); ?> 
																	 
																</button>
															<div class="icon-circle"></div></div>
														</div>
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
	   <style>
	   .news-content .post-tags a {
	color: #fff;
	margin-right: 30px;
	display: inline-block;
	line-height: 1;
	float: left
}

.v-light:not(.no-light) .news-content .post-tags a {
	color: #000
}

.news-content .post-tags a:before {
	content: "#";
	position: relative;
	margin-right: 5px;
	font-size: 14px;
	background-color: transparent;
	border: 0
}

.news-content .post-tags a:after {
	display: none
}

.form-box {
	position: relative
}

.form-box .form-group {
	width: 100%
}

.form-box .form-group .help-block {
	color: red;
	font-weight: 600;
	margin-bottom: 15px
}

.form-box .form-group li {
	list-style: none
}

.entry {
	width: 100%;
	margin-bottom: 30px
}

.entry input,
.entry textarea {
	    font-family: 'Rubik', sans-serif;
	font-weight: bold;
	font-size: 16px;
	width: 100%;
	background-color: transparent;
	border: none;
	border-bottom: 1.5px solid #000;
	padding-bottom: 20px;
	color: #eee;
	margin-top: 10px;
	margin-bottom: 0;
	letter-spacing: -0.5px
}

.v-light:not(.no-light) .entry input,
.v-light:not(.no-light) .entry textarea {
	border-color: #11a19a;
	color: #0009
}

.entry input::-webkit-input-placeholder,
.entry textarea::-webkit-input-placeholder {
	font-weight: 700;
	font-size: 16px;
	letter-spacing: -0.5px
}

.entry input:-ms-input-placeholder,
.entry textarea:-ms-input-placeholder {
	font-weight: 700;
	font-size: 16px;
	letter-spacing: -0.5px
}

.entry input::-ms-input-placeholder,
.entry textarea::-ms-input-placeholder {
	font-weight: 700;
	font-size: 16px;
	letter-spacing: -0.5px
}

.entry input::placeholder,
.entry textarea::placeholder {
	font-weight: 700;
	font-size: 16px;
	letter-spacing: -0.5px
}

.entry input {
	height: 100%
}

label {
	color: #11a19a;
	font-size: 15px;
	font-weight: 600
}

.v-light:not(.no-light) label {
	color: #11a19a
}

.form-check-input[type=checkbox] {
    border-radius: 0.25em;
    width: 46px;
}

.form-check-input:checked {
    background-color: #11a19a;
    border-color: #11a19a;
}

.form-check-input {
     border-color: #11a19a;
}

</style>
   </body>
</html>