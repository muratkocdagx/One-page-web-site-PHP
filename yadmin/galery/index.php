<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="main.css">
  <?php 

   ob_start();
   session_start();
   include '../process/db.php';

   $usersor=$db->prepare("SELECT * from admin where admin_username=:mail");

   $usersor->execute(array(

    'mail' => $_SESSION['admin_username']

   ));
   $say=$usersor->rowCount();
   $usercek=$usersor->fetch(PDO::FETCH_ASSOC);


   if ($say==0) {
      header("Location:../production/login.php?status=izinsiz");
      exit();
   }

   ?>
</head>
<body>
<figure class="red frame">
  <img src="1.jpg" alt="" width=300 />
  
  <figcaption>
    <h2>Unutulmaz arkadaşlıkların <br> başlangıcı ♥</h2>
  </figcaption>
</figure>

<figure class="black thick frame">
  <img src="2.jpg" alt="" width=300 />

</figure>

<figure class="red frame">
  <img src="3.jpg" alt="" width=300 />
  <figcaption>
    <h2>Kayaköy</h2>
    <span>by <span class="fn">Tuba Kaya</span></span>
  </figcaption>
</figure>

<figure class="frame">
  <img src="9.jpg" alt="" width=300 />
  
  <figcaption>
    <h2>12 Adalar</h2>
    <span>by <span class="fn">Yaren Kamit</span></span>
  </figcaption>
</figure>

<figure class="black thick frame">
  <img src="5.jpg" alt="" width=300 />
  <figcaption>
    <h2>Kaputaj Kanyonu</h2>
    <span>by <span class="fn">Mim.Zeynep Yüksel</span></span>
  </figcaption>
</figure>

<figure class="red frame">
  <img src="6.jpg" alt="" width=300 />
  <figcaption>
    <h2>Fethiye Açıkları</h2>
    <span>by <span class="fn">Murat Koçdağ & Hasan Küse</span></span>
  </figcaption>
</figure>

<figure class="frame">
  <img src="7.jpg" alt="" width=300 />
  
  <figcaption>
    <h2>Kayaköy</h2>
    <span>by <span class="fn">Mim.Yaren Yüksel</span></span>
  </figcaption>
</figure>

<figure class="black thick frame">
  <img src="8.jpg" alt="" width=300 />
  <figcaption>
    <h2>Hatırlayamadım İsmini</h2>
    <span>by <span class="fn">Tuba Kaya</span></span>
  </figcaption>
</figure>

<figure class="red frame">
  <img src="4.jpg" alt="" width=300 />
  <figcaption>
    <h2>12 Adalar</h2>
    <span>by <span class="fn">Yaren Kamit</span></span>
  </figcaption>
</figure>


<figure class="black thick frame">
  <img src="10.jpg" alt="" width=300 />
  <figcaption>
    <h2>Kayaköy</h2>
    <span>by <span class="fn">Murat Koçdağ</span></span>
  </figcaption>
</figure>

<figure class="red frame">
  <img src="11.jpg" alt="" width=300 />
  <figcaption>
    <h2>Ala Restaurant</h2>
    <span>by <span class="fn">Çılgın Dershane</span></span>
  </figcaption>
</figure>

<figure class="frame">
  <img src="12.jpg" alt="" width=300 />
  
  <figcaption>
    <h2>Burayı Da Hatırlayamadım</h2>
    <span>by <span class="fn">Hasan Küse</span></span>
  </figcaption>
</figure>

<figure class="black thick frame">
  <img src="13.jpg" alt="" width=300 />
  <figcaption>
    <h2>Sundia Hisaronu By Liberty</h2>
    <span>by <span class="fn">Ekip</span></span>
  </figcaption>
</figure>
<figure class="black thick frame">
  <img src="14.jpg" alt="" width=300 />
  <figcaption>
    <h2>Kayaköy Uçan Kuş Hatırası</h2>
    <span>by <span class="fn">Ebubekir Yigen</span></span>
  </figcaption>
</figure>


</body>
</html>

