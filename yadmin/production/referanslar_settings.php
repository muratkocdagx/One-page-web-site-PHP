<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'inc/head.php';

   $referanssor=$db->prepare("SELECT * from referanslar where 

    referanslar_id=:id


    ");

   $referanssor->execute(array(

      'id'=>$_GET['referanslar_id']

   ));

$referanscek=$referanssor->fetch(PDO::FETCH_ASSOC);

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
                           <h2>Referans Düzenle <small>
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
                             if(strlen($referanscek['referanslar_logo'])>0){ ?>
                                <img width="200" src="../../<?php echo $referanscek['referanslar_logo']; ?>" alt="logo">
                             <?php }?>
                          </div>
                       </div>
                       <div class="form-group">
                        <label for="resim-sec" class="control-label col-md-3 col-sm-3 col-xs-12">Resim Seç</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="logo" name="referanslar_logo" class="form-control col-md-7 col-xs-12">
                       </div>
                    </div>
                    <input type="hidden" name="eski_yol" value="<?php echo $referanscek['referanslar_logo']; ?>">
                    <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Referans Ad <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="referanslar_ad" value="<?php echo $referanscek['referanslar_ad']; ?>" class="form-control col-md-7 col-xs-12">
                        <input type="hidden" id="first-name" name="referanslar_id" value="<?php echo $referanscek['referanslar_id']; ?>" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="referanslarupdate" class="btn btn-success">Güncelle</button>
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