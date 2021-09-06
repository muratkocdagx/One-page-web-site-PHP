<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yönetim Paneli | YAREN KAMİT </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="../process/process.php" method="POST">
              <h1>Panel Giriş</h1>
              <div>
                <input type="text" class="form-control" placeholder="Kullanıcı Adınız" required="" name="admin_username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Şifreniz" required="" name="admin_password" />
              </div>
              <div>
                <button type="submit" class="btn" name="adminlogin" style="color: #fff; background-color: #73879c; border-color: #73879c; width: 100%;">Giriş Yap</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-user"></i> Admin Panele Hoşgeldiniz!</h1>
                  <p>©2021 Tüm Hakları Saklıdır. Murat KOÇDAĞ!</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
