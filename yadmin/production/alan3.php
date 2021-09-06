<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'inc/head.php'; 

   $alan3sor=$db->prepare("SELECT * from alan_3 where alan3_id=:id");

   $alan3sor->execute(array(

     'id' => 1

  ));

   $alan3cek=$alan3sor->fetch(PDO::FETCH_ASSOC);


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
                           <h2>Pembe Alan <small>
                              <?php if ($_GET['update']=='ok') {?>
                                 <b style="color: seagreen;">Yazılar Güncellendi.</b>
                              <?php }  
                              elseif ($_GET['updatetext']=='no') {?>
                                 <b style="color: red;">Yazılar Güncellenemedi.</b>
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
                        <form action="../process/process.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                         <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea rows="7" class="col-md-12 form-control" name="alan3_title" style="resize:vertical; "><?php echo $alan3cek['alan3_title']; ?></textarea>

                           </div>
                        </div>
                         <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yazı Alanı (SOL) <span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea rows="7" class="col-md-12 form-control" name="alan3_textleft" style="resize:vertical; "><?php echo $alan3cek['alan3_textleft']; ?></textarea>
                           </div>
                        </div>
                         <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yazı Alanı (SAĞ) <span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea rows="7" class="col-md-12 form-control" name="alan3_textright" style="resize:vertical; "><?php echo $alan3cek['alan3_textright']; ?></textarea>

                           </div>
                        </div>
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         <button type="submit" name="alan3update" class="btn btn-success">Güncelle</button>
                      </div>
                   </form>
                <!--

               <form action="../process/process.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Başlığı <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="slider_text" value="<?php echo $slidercek['slider_text']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="right">
                        <button type="submit" name="sliderupdate" class="btn btn-success">Güncelle</button>
                     </div>
                  </div>
               </form>

            -->
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