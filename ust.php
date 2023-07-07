         <header class="header">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-inn">
                        <div class="site-logo">
                            <a href="<?php echo $ayarlar["strURL"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/logo.png" alt="Ecce Logo"></a>
                        </div>
                        <div class="header-navigation">
                            <div class="mainmenu">
                                <nav id="menu">
                                    <ul class="dropdown">
                                        <li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a></li>
                                        <li>
                                            <a href="#"><?php echo LANG("Kurumsal",$lang); ?></a>
                                            <ul>
											   <?php
				$veri_cek = $db->query("SELECT * FROM icerikler WHERE icerik_durum = 1 AND dil_id = '{$lang}' ORDER BY icerik_ust_id = '1' ");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
   <li><a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal/<?php echo $veri_listele["icerik_seo"]; ?>"><?php echo 	$veri_listele["icerik_baslik"]; ?></a></li>
												
												<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>

                                            </ul>
                                        </li>
                                     <li><a href="<?php echo $ayarlar["strURL"]; ?>/markalarimiz"><?php echo LANG("Markalarımız",$lang); ?></a></li>
                                     <li><a href="<?php echo $ayarlar["strURL"]; ?>/insan-kaynaklari"><?php echo LANG("İnsan Kaynakları",$lang); ?></a></li>
                                     <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/hizmetlerimiz"><?php echo LANG("Hizmetlerimiz",$lang); ?></a></li>
                                     <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim"><?php echo LANG("İletişim",$lang); ?></a></li>

                                    </ul>
                                </nav>
                            </div>
                            <div class="header-action">
                                <?php  
			$dilq = $db->query("select * from dil where dil_kod != '".$secili_dil["dil_kod"]."' and dil_durum = '1' order by dil_id ASC");
			if ($dilq->rowCount() > 0) {
?>
				 
<?php
							foreach ($dilq AS $dil) {
?>
								<a href="<?php echo $ayarlar["strURL"]; ?>/lang.php?l=<?php echo $dil["dil_kod"]; ?>&return=<?php echo $ayarlar["strURL"]; ?>"  >
									<i class="flag-icon flag-icon-<?php echo $dil["dil_kod"]; ?> icon-2x"></i> 
								</a>
<?php 
			} 
?>		
						  
<?php 
			} 
?>   <a href="<?php echo $ayarlar["strURL"]; ?>/iletisim" class="header-btn">
                                    <div class="icon-holder"><i class="far fa-envelope"></i></div>
                                    <?php echo LANG("İletişim",$lang); ?>
                                </a>
                            </div> 
                            <div class="spinner-master">
                                <div id="spinner-form" class="spinner-spin">
                                    <div class="spinner diagonal part-1"></div>
                                    <div class="spinner horizontal"></div>
                                    <div class="spinner diagonal part-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->