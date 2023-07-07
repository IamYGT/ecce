       <!-- footer start -->
        <footer class="footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 order-lg-1 order-1">
                            <div class="single-footer">
                                <h3><?php echo LANG("Kurumsal",$lang); ?></h3>
                                <p><?php echo $ayarlar["kisahakkimizda_".$lang];  ?></p>
                                <ul class="footer-contact">
                                    <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><li><i class="fas fa-phone-square-alt"></i><?php echo $ayarlar["strPhone"]; ?></li></a>
                                   <a href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <li><i class="fas fa-envelope"></i> <?php echo $ayarlar["strMail"]; ?></li> </a>
                                    <li><i class="fas fa-map"></i> <?php echo $ayarlar["strAddress"]; ?></li>
                                </ul>
                            </div>
                        </div>
                        <div style="    text-align: center;" class="col-lg-4 col-sm-6 order-lg-2 order-3">
                            <div class="single-footer">
                                <h3><?php echo LANG("Hızlı Menü",$lang); ?></h3>
                                <ul>
									<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a></li>
									 <li><a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal/hakkimizda"><?php echo LANG("Kurumsal",$lang); ?></a></li>
                                     <li><a href="<?php echo $ayarlar["strURL"]; ?>/markalarimiz"><?php echo LANG("Markalarımız",$lang); ?></a></li>
                                     <li><a href="<?php echo $ayarlar["strURL"]; ?>/insan-kaynaklari"><?php echo LANG("İnsan Kaynakları",$lang); ?></a></li>
                                     <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/hizmetlerimiz"><?php echo LANG("Hizmetlerimiz",$lang); ?></a></li>
                                      <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim"><?php echo LANG("İletişim",$lang); ?></a></li>
                                </ul>
                            </div>
                        </div>
                   
                        <div class="col-lg-4 col-sm-6 order-lg-4 order-2">
                            <div    style="text-align:center;" class="single-footer">
                                <img  style="width: 180px;"  src="<?php echo $ayarlar["strURL"]; ?>/assets/img/footerlogo.png">
                                
                                <ul  style="text-align:center;" class="footer-social">
                        <li><a href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a></li>
                         <li><a href="https://wa.me/<?php echo  $ayarlar["strWhatsappPhone_".$lang];  ?>?text=<?php echo  $ayarlar["strWhatsappMessage_".$lang];  ?>"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="fade_rule"></div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>&copy; Copyright <?php echo date("Y"); ?> by  <a href="https://www.seyhanweb.com" style="color:#fff;" rel="dofollow"> Seyhan Web </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->
    </div>
    <!-- body wrap end -->
    <!-- jquery include -->
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jquery.barfiller.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/flipclock.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jarallax.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/custom-countdown.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/waypoints-min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/wow.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/main.js"></script>