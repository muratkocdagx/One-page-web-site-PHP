
<!DOCTYPE html>
<html lang="en">
  <head>
        <?php include 'inc/head.php'; ?>
  </head>

<?php 

/*KULLANICILARI LİSTELEME*/

   $iletisimsor=$db->prepare("SELECT * from iletisim order by iletisim_id ASC");

   $iletisimsor->execute();


/*KULLANICILARI LİSTELEME*/


 ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <?php include 'inc/leftmenu.php'; ?>

        <?php include 'inc/topmenu.php'; ?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>İLETİŞİM 
                  <small>
                  <?php if ($_GET['delete']=='ok') {?>
                  <b style="color: seagreen;">Silme İşlemi başarılı.</b>
                  <?php }  
                  elseif ($_GET['delete']=='no') {?>
                  <b style="color: red;">Silme İşlemi başarısız.</b>
                  <?php }  ?>
                  </small>
                </h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>İletişim Adı</th>
                          <th>Konu</th>
                          <th>Mail</th>
                          <th>Mesaj</th>
                          <th>Zaman</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 

                      $orderno=0;
                      while ($iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC)) { $orderno++;
                        
                      



                       ?>

                        <tr>
                          <td><?php echo $orderno; ?></td>
                          <td><?php echo $iletisimcek['iletisim_ad']; ?></td>
                          <td><?php echo $iletisimcek['iletisim_konu']; ?></td>
                          <td><?php echo $iletisimcek['iletisim_mail']; ?></td>
                          <td><?php echo $iletisimcek['iletisim_mesaj']; ?></td>
                          <td><?php echo $iletisimcek['iletisim_zaman']; ?></td>
                          <td><center><a href="../process/process.php?iletisim_id=<?php echo $iletisimcek['iletisim_id']; ?>&iletisim_delete=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                        </tr>

                        <?php 
                        }

                        ?>

                      </tbody>
                    </table>

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