<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'inc/head.php'; 

   $alan4sor=$db->prepare("SELECT * from alan_4 where alan4_id=:id");

   $alan4sor->execute(array(

    'id' => 1

 ));

   $alan4cek=$alan4sor->fetch(PDO::FETCH_ASSOC);


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
                           <h2>Pembe Alan Altı <small>
                              <?php if ($_GET['updateimg']=='ok') {?>
                                 <b style="color: seagreen;">Resim Güncellendi.</b>
                              <?php }  
                              elseif ($_GET['updatetext']=='ok') {?>
                                 <b style="color: seagreen;">Yazı Güncellendi.</b>
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
                           <label for="ayar_logo" class="control-label col-md-3 col-sm-3 col-xs-12">Yüklü Arkaplan(SOL)</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <?php 
                             if(strlen($alan4cek['alan4_leftphoto'])>0){ ?>
                                <img width="200" src="../../<?php echo $alan4cek['alan4_leftphoto']; ?>" alt="logo">
                             <?php }?>
                          </div>
                       </div>
                       <div class="form-group">
                        <label for="resim-sec" class="control-label col-md-3 col-sm-3 col-xs-12">Resim Seç</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="logo" name="alan4_leftphoto" class="form-control col-md-7 col-xs-12">
                       </div>
                    </div>
                    <input type="hidden" name="eski_yol" value="<?php echo $alan4cek['alan4_leftphoto']; ?>">

                    <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik (SOL)<span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea rows="7" class="col-md-12 form-control" name="alan4_lefttext" style="resize:vertical; "><?php echo $alan4cek['alan4_lefttext']; ?></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="ayar_logo" class="control-label col-md-3 col-sm-3 col-xs-12">Yüklü Arkaplan(SAĞ)</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <?php 
                       if(strlen($alan4cek['alan4_rightphoto'])>0){ ?>
                        <img width="200" src="../../<?php echo $alan4cek['alan4_rightphoto']; ?>" alt="logo">
                       <?php }?>
                    </div>
                 </div>
                 <div class="form-group">
                  <label for="resim-sec" class="control-label col-md-3 col-sm-3 col-xs-12">Resim Seç</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="file" id="logo" name="alan4_rightphoto" class="form-control col-md-7 col-xs-12">
                 </div>
              </div>
              <input type="hidden" name="eski_yol2" value="<?php echo $alan4cek['alan4_rightphoto']; ?>">

              <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik (SAĞ)<span class="required">*</span>
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea rows="7" class="col-md-12 form-control" name="alan4_righttext" style="resize:vertical; "><?php echo $alan4cek['alan4_righttext']; ?></textarea>
               </div>
            </div>

            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" name="alan4update" class="btn btn-success">Güncelle</button>
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