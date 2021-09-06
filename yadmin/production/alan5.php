<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'inc/head.php'; 

   $alan5sor=$db->prepare("SELECT * from alan_5 where alan5_id=:id");

   $alan5sor->execute(array(

     'id' => 1

  ));

   $alan5cek=$alan5sor->fetch(PDO::FETCH_ASSOC);


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
                           <h2>Söz Alanı <small>
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
                            if(strlen($alan5cek['alan5_bgphoto'])>0){ ?>
                               <img width="200" src="../../<?php echo $alan5cek['alan5_bgphoto']; ?>" alt="logo">
                            <?php }?>
                         </div>
                      </div>
                      <div class="form-group">
                        <label for="resim-sec" class="control-label col-md-3 col-sm-3 col-xs-12">Resim Seç</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="file" id="logo" name="alan5_bgphoto" class="form-control col-md-7 col-xs-12">
                      </div>
                   </div>
                   <input type="hidden" name="eski_yol" value="<?php echo $alan5cek['alan5_bgphoto']; ?>">

                   <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea rows="7" class="col-md-12 form-control" name="alan5_text" style="resize:vertical; "><?php echo $alan5cek['alan5_text']; ?></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alt Yazı <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="alan5_btmtext" value="<?php echo $alan5cek['alan5_btmtext']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                   <button type="submit" name="alan5update" class="btn btn-success">Güncelle</button>
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