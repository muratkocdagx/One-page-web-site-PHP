<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'inc/head.php'; 

   $aboutsor=$db->prepare("SELECT * from alan_2 where alan2_id=:id");

   $aboutsor->execute(array(

    'id' => 1

 ));

   $aboutcek=$aboutsor->fetch(PDO::FETCH_ASSOC);


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
                           <h2>Hakkında <small>
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
                           <label for="ayar_logo" class="control-label col-md-3 col-sm-3 col-xs-12">Yüklü Arkaplan</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <?php 
                             if(strlen($aboutcek['alan2_photo'])>0){ ?>
                                <img width="200" src="../../<?php echo $aboutcek['alan2_photo']; ?>" alt="logo">
                             <?php }?>
                          </div>
                       </div>
                       <div class="form-group">
                        <label for="resim-sec" class="control-label col-md-3 col-sm-3 col-xs-12">Resim Seç</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="logo" name="alan2_photo" class="form-control col-md-7 col-xs-12">
                       </div>
                    </div>
                    <input type="hidden" name="eski_yol" value="<?php echo $aboutcek['alan2_photo']; ?>">
                    <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea rows="7" class="col-md-12 form-control" name="alan2_about" style="resize:vertical; "><?php echo $aboutcek['alan2_about']; ?></textarea>

                     </div>
                  </div>
                  <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="aboutupdate" class="btn btn-success">Güncelle</button>
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