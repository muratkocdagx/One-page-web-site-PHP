<?php   

 $settingsor=$db->prepare("SELECT * from pagesettings where settings_id=:id");

   $settingsor->execute(array(

     ':id' => 1

  ));

   $settingscek=$settingsor->fetch(PDO::FETCH_ASSOC);
 ?>


<link rel="icon" href="<?php echo $settingscek['settings_logo'] ?>" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">

<meta name="keywords" content="<?php  echo $settingscek['settings_keywords'] ?>">
<meta name="description" content="<?php  echo $settingscek['settings_description'] ?>">
<meta name="author" content="<?php  echo $settingscek['settings_author'] ?>">

<title><?php  echo $settingscek['settings_title'] ?></title>
<link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/main.css">
<script class="u-script" type="text/javascript" src="js/jquery-1.9.1.min.js" defer=""></script>
<script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

