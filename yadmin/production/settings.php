<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'inc/head.php'; 

   $settingsor=$db->prepare("SELECT * from pagesettings where settings_id=:id");

   $settingsor->execute(array(

     ':id' => 1

  ));

   $settingscek=$settingsor->fetch(PDO::FETCH_ASSOC);


   ?>
</head>
<body class="nav-md">
   <div class="container body">
      <div class="main_container">
         <?php include 'inc/leftmenu.php'; ?>
         <?php include 'inc/topmenu.php'; ?>
         <!-- page content -->
         <div class="right_col" role="main">
            <div class="">
               <div class="clearfix"></div>
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="x_panel">
                        <div class="x_title">
                           <h2>GENEL AYARLAR <small>
                              <?php if ($_GET['updateimg']=='ok') {?>
                                 <b style="color: seagreen;">Resim Güncellendi.</b>
                              <?php }  
                              elseif ($_GET['updatetext']=='ok') {?>
                                 <b style="color: seagreen;">Yazılar Güncellendi.</b>
                              <?php }  ?>
                           </small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                           </li>
                           <li><a class="close-link"><i class="fa fa-close"></i></a>
                           </li>
                        </ul>
                        <div class="clearfix"></div>
                     </div>
                     <div class="x_content">
                        <br />
                        <form action="../process/process.php" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                          <div class="form-group">
                           <label for="ayar_logo" class="control-label col-md-3 col-sm-3 col-xs-12">Yüklü Logo</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php 
                            if(strlen($settingscek['settings_logo'])>0){ ?>
                               <img width="200" src="../../<?php echo $settingscek['settings_logo']; ?>" alt="logo">
                            <?php }?>
                            
                         </div>
                      </div>
                      <div class="form-group">
                        <label for="resim-sec" class="control-label col-md-3 col-sm-3 col-xs-12">Resim Seç</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="file" id="logo" name="settings_logo" class="form-control col-md-7 col-xs-12">
                      </div>
                   </div>
                   <input type="hidden" name="eski_yol" value="<?php echo $settingscek['settings_logo']; ?>">
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Başlığı <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="settings_title" value="<?php echo $settingscek['settings_title']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Açıklaması <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="settings_description" value="<?php echo $settingscek['settings_description']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Anahtar Kelime <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="settings_keywords" value="<?php echo $settingscek['settings_keywords']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Author <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="settings_author" disabled="" value="<?php echo $settingscek['settings_author']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail Adresi <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="settings_mail" value="<?php echo $settingscek['settings_mail']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Analiz Kodu <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="settings_analytics" value="<?php echo $settingscek['settings_analytics']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="settings_facebook" value="<?php echo $settingscek['settings_facebook']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="settings_twitter" value="<?php echo $settingscek['settings_twitter']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="settings_google" value="<?php echo $settingscek['settings_google']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Linkedin <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="settings_linkedin" value="<?php echo $settingscek['settings_linkedin']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İnstagram <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="settings_instagram" value="<?php echo $settingscek['settings_instagram']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pinterest <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="settings_pinterest" value="<?php echo $settingscek['settings_pinterest']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site URL <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" disabled="" name="settings_url" value="<?php echo $settingscek['settings_url']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="right">
                        <button type="submit" name="settingsupdate" class="btn btn-success">Güncelle</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Bitiyor -->
   </div>
</div>
</div>
<!-- /page content -->
<?php include 'inc/footer.php'; ?>
</div>
</div>
<?php include 'inc/script.php'; ?>
</body>
</html>