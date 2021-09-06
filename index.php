<?php include 'yadmin/process/db.php';  error_reporting(0);?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <?php include 'inc/head.php'; 
  $slidersor=$db->prepare("SELECT * from slider where slider_id=:id");

  $slidersor->execute(array(

    'id' => 1

  ));

  $slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);


  $alan1sor=$db->prepare("SELECT * from alan_1 where alan1_id=:id");

  $alan1sor->execute(array(

   'id' => 1

 ));

  $alan1cek=$alan1sor->fetch(PDO::FETCH_ASSOC);


  $aboutsor=$db->prepare("SELECT * from alan_2 where alan2_id=:id");

  $aboutsor->execute(array(

    'id' => 1

  ));

  $aboutcek=$aboutsor->fetch(PDO::FETCH_ASSOC);

  $portfolyosor=$db->prepare("SELECT * from portfolyo order by portfolyo_id ASC");

  $portfolyosor->execute();

  $alan3sor=$db->prepare("SELECT * from alan_3 where alan3_id=:id");

  $alan3sor->execute(array(

   'id' => 1

 ));

  $alan3cek=$alan3sor->fetch(PDO::FETCH_ASSOC);


  $alan4sor=$db->prepare("SELECT * from alan_4 where alan4_id=:id");

  $alan4sor->execute(array(

    'id' => 1

  ));

  $alan4cek=$alan4sor->fetch(PDO::FETCH_ASSOC);



  $alan5sor=$db->prepare("SELECT * from alan_5 where alan5_id=:id");

  $alan5sor->execute(array(

   'id' => 1

 ));

  $alan5cek=$alan5sor->fetch(PDO::FETCH_ASSOC);


  $referanssor=$db->prepare("SELECT * from referanslar order by referanslar_id ASC");

  $referanssor->execute();


  ?> 



</head>
<body class="u-body">

  <section class="u-align-center u-clearfix u-image u-section-2" style="background-image:url(<?php echo $slidercek['slider_img']; ?>);" id="carousel_8426" data-image-width="1600" data-image-height="1067">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
      <div class="u-border-20 u-border-palette-2-base u-container-style u-expanded-width-xs u-group u-shape-circle u-group-1">
        <div class="u-container-layout u-valign-middle-xs u-container-layout-1">
          <h2 class="u-align-center u-text u-text-body-alt-color u-text-1"><?php echo $slidercek['slider_text']; ?></h2>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-image u-section-8" style="background-image: none;">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1" style="min-height: auto;">
      <div class="u-rotation-parent u-rotation-parent-1" style="margin:10px auto 0;"><span class="u-icon u-icon-circle u-rotate-90 u-text-palette-2-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 320.001 320.001" style=""><use xlink:href="#svg-668e"></use></svg><svg class="u-svg-content" viewBox="0 0 320.001 320.001" id="svg-668e"><path d="m295.84 146.049-256-144c-4.96-2.784-11.008-2.72-15.904.128-4.928 2.88-7.936 8.128-7.936 13.824v288c0 5.696 3.008 10.944 7.936 13.824 2.496 1.44 5.28 2.176 8.064 2.176 2.688 0 5.408-.672 7.84-2.048l256-144c5.024-2.848 8.16-8.16 8.16-13.952s-3.136-11.104-8.16-13.952z"></path></svg></span>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-3" id="carousel_f7b3">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <p class="u-text u-text-1"><?php echo $alan1cek['alan1_text1']; ?></p>
      <h6 class="u-text u-text-grey-40 u-text-2"><?php echo $alan1cek['alan1_text2']; ?></h6>
      <p class="u-text u-text-3">&nbsp;<?php echo $alan1cek['alan1_text3']; ?></p>
    </div>
  </section>
  <section class="u-clearfix u-valign-middle-xs u-section-4" id="carousel_76a9">
    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-size-36">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-top-xs u-container-layout-1">
                  <h5 class="u-text u-text-1">Hakkımda</h5>
                  <p class="u-text u-text-2"><?php echo $aboutcek['alan2_about']; ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-size-24">
            <div class="u-layout-col">
              <div class="u-align-center u-container-style u-layout-cell u-palette-2-base u-size-60 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-2">
                  <div class="u-image u-image-circle u-image-1" style="background-image:url(<?php echo $aboutcek['alan2_photo']; ?>);" data-image-width="720" data-image-height="1080"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-grey-5 u-section-5" id="carousel_d2ed">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h5 class="u-text u-text-1 owl-title">PORTFOLYO</h5>
      <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
        <div class="u-gallery-inner u-gallery-inner-1">

          <?php while ($portfolyocek=$portfolyosor->fetch(PDO::FETCH_ASSOC)) {  ?>
            <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="<?php echo $portfolyocek['portfolyo_photourl']; ?>">
              </div>
              <div class="u-over-slide u-shading u-over-slide-1">
                <h3 class="u-gallery-heading"><?php echo $portfolyocek['portfolyo_ad'] ?></h3>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <section class="u-align-center u-clearfix u-palette-2-base u-section-6" id="carousel_4c69">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h6 class="u-text u-text-1"><?php echo $alan3cek['alan3_title']; ?></h6>
      <div class="u-border-20 u-border-white u-expanded-width u-line u-line-horizontal u-line-1"></div>
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <h5 class="u-text u-text-default u-text-2"><?php echo $alan3cek['alan3_textleft']; ?></h5>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-text u-text-default u-text-3"><?php echo $alan3cek['alan3_textright']; ?> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-7" id="carousel_991d">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <div class="u-image u-image-circle u-image-1" style="background-image:url(<?php echo $alan4cek['alan4_leftphoto']; ?>);" alt="" data-image-width="720" data-image-height="1080"></div>
                <h2 class="u-text u-text-1"><?php echo $alan4cek['alan4_lefttitle']; ?></h2>
                <p class="u-text u-text-2"><?php echo $alan4cek['alan4_lefttext']; ?></p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <div alt="" class="u-image u-image-circle u-image-2" style="background-image:url(<?php echo $alan4cek['alan4_rightphoto']; ?>);"  data-image-width="1000" data-image-height="1500"></div>
                <p class="u-text u-text-3"><?php echo $alan4cek['alan4_righttext']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-image u-section-8" id="carousel_84f1" style="background-image: url(<?php echo $alan5cek['alan5_bgphoto']; ?>);" data-image-width="2250" data-image-height="1500">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
      <h4 class="u-text u-text-body-alt-color u-text-1"><?php echo $alan5cek['alan5_text']; ?></h4>
      <div class="u-rotation-parent u-rotation-parent-1"><span class="u-icon u-icon-circle u-rotate-90 u-text-palette-2-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 320.001 320.001" style=""><use xlink:href="#svg-668e"></use></svg><svg class="u-svg-content" viewBox="0 0 320.001 320.001" id="svg-668e"><path d="m295.84 146.049-256-144c-4.96-2.784-11.008-2.72-15.904.128-4.928 2.88-7.936 8.128-7.936 13.824v288c0 5.696 3.008 10.944 7.936 13.824 2.496 1.44 5.28 2.176 8.064 2.176 2.688 0 5.408-.672 7.84-2.048l256-144c5.024-2.848 8.16-8.16 8.16-13.952s-3.136-11.104-8.16-13.952z"></path></svg></span>
      </div>
      <h5 class="u-text u-text-body-alt-color u-text-2">- <?php echo $alan5cek['alan5_btmtext']; ?>  -</h5>
    </div>
  </section>
  <section class="u-clearfix u-white u-section-9" id="carousel_6370">
    <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
      <div class="u-clearfix u-disable-padding u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <?php while ($referanscek=$referanssor->fetch(PDO::FETCH_ASSOC)) { ?>
              <div class="u-container-style u-expand-resize u-image u-image-contain u-layout-cell u-left-cell u-size-12 u-size-60-md u-image-1" style="background-image: url(<?php echo $referanscek['referanslar_logo'] ?>);" imgwidth="150" imgheight="150">
                <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
              </div>
            <?php }  ?>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-grey-5 u-section-10" id="carousel_ea1e">
    <img alt="" class="u-image u-image-default u-image-1" data-image-width="1125" data-image-height="1500" src="//images01.nicepage.com/a1389d7bc73adea1e1c1fb7e/a20a98678a5e56ad940c886f/pexels-photo-4117924.jpeg">
    <div class="u-align-center u-container-style u-group u-group-1">
      <div class="u-container-layout u-container-layout-1">
        <h1 class="u-text u-text-1">BENİMLE İLETİŞİME  GEÇMEK  İÇİN <br> FORMU DOLDURABİLİRSİNİZ.
        </h1>
        <p class="u-text u-text-2">Formu doldurmak yerine sosyal medya hesaplarımdan da takip edebilirsiniz.</p>
        <div class="u-expanded-width u-form u-form-1">
          <form method="POST"  action="yadmin/process/process.php" class="u-clearfix u-form-spacing-30 u-form-vertical1 u-inner-form" style="padding: 0;" >
            <div class="u-form-group u-form-name u-form-partition-factor-3 u-form-group-1">
              <label class="u-label">Ad Soyad</label>
              <input type="text" placeholder="Adınızı giriniz" name="iletisim_ad" class="u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-address u-form-group u-form-partition-factor-3 u-form-group-2">
              <label class="u-label">Konu</label>
              <input type="text" placeholder="Konuyu giriniz"  name="iletisim_konu" class="u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-email u-form-group u-form-partition-factor-3 u-form-group-3">
              <label class="u-label">Email</label>
              <input type="email" placeholder="Email" name="iletisim_mail" class="u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-message u-form-group-4">
              <label class="u-label">Mesaj</label>
              <textarea placeholder="Mesajınızı giriniz" rows="4" cols="50" name="iletisim_mesaj" class="u-input u-input-rectangle u-white" required=""></textarea>
            </div>
            <div class="u-form-agree u-form-group u-form-group-5">
              <input type="checkbox" name="agree" class="u-agree-checkbox" required="">
              <label class="u-label">Formu kontrol ettiyseniz işaretleyiniz.</label>
            </div>
            <div class="u-align-left u-form-group u-form-submit u-form-group-6">
              <button type="submit" name="contactadd" class="u-btn u-btn-submit u-button-style u-hover-black u-palette-2-base u-btn-1">GÖNDER</button>
              
            </div>
            <?php   if ($_GET['send']=='ok') {?>
              <div class="u-form-send-message u-form-send-success">Teşekkür ederim! En kısa zaman da geri dönüş sağlayacağım.</div>
            <?php } ?>
            <?php   if ($_GET['error']=='ok') {?>
              <div class="u-form-send-error u-form-send-message"> Üzgünüm! Mesajınız gönderilemedi.</div>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-image u-shading u-section-11" data-image-width="1980" data-image-height="806" id="sec-77fd">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <p class="u-large-text u-text u-text-variant u-text-1">Sizinle iletişime geçmek istiyorum. Lütfen beni sosyal medyadan takip edin, iletişim halinde olalım.</p>
      <p class="u-text u-text-2" style="margin: 15px auto 0px;">Mail: <a target="_blank" href="mailto:<?php  echo $settingscek['settings_mail'] ?>" class="u-border-1 u-border-white u-btn u-button-link u-button-style u-none u-text-body-alt-color u-btn-1" target="_blank"><?php  echo $settingscek['settings_mail'] ?></a>

        <div class="u-social-icons u-spacing-20 u-social-icons-1">
          <a class="u-social-url" target="_blank" href="https://<?php  echo $settingscek['settings_facebook'] ?>"><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-f0f6"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-f0f6"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg>


          </span>
        </a>
        <a class="u-social-url" target="_blank" href="https://<?php  echo $settingscek['settings_twitter'] ?>"><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-1b40"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-1b40"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg>


        </span>
      </a>
      <a class="u-social-url" target="_blank" href="https://<?php  echo $settingscek['settings_instagram'] ?>"><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-51db"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-51db"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg>


      </span>
    </a>
    <a class="u-social-url" target="_blank" href="https://<?php  echo $settingscek['settings_linkedin'] ?>"><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-b867"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-b867"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg>


    </span>
  </a>
  <a class="u-social-url" target="_blank" href="https://<?php  echo $settingscek['settings_pinterest'] ?>"><span class="u-icon u-icon-circle u-social-icon u-social-pinterest u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-b899"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-b899"><path d="M61.9,79.8c-5.5-0.3-7.8-3.1-12-5.8c-2.3,12.4-5.4,24.3-13.8,30.5c-2.6-18.7,3.8-32.8,6.9-47.7 c-5.1-8.7,0.7-26.2,11.5-21.9c13.5,5.4-11.6,32.3,5.1,35.7c17.6,3.5,24.7-30.5,13.8-41.4c-15.7-16.1-45.7-0.5-42,22.3 c0.9,5.6,6.7,7.2,2.3,15c-10.1-2.2-13-10.2-12.7-20.7c0.6-17.3,15.5-29.3,30.5-31.1c19-2.2,36.8,6.9,39.2,24.7 C93.4,59.5,82.3,81.3,61.9,79.8z"></path></svg>


  </span>
</a>
</div>
<p class="u-text u-text-2">Design & Software <a target="_blank" href="https://www.instagram.com/muratkocdag1/" class="u-border-1 u-border-white u-btn u-button-link u-button-style u-none u-text-body-alt-color u-btn-1" target="_blank">Murat KOÇDAĞ</a>
</p>
</div>
</section>


</body>
</html>