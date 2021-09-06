<?php
ob_start();
session_start();
include 'db.php';
include 'fonksiyon.php';

if (isset($_POST['adminlogin']))
{

    $admin_username = $_POST['admin_username'];
    $admin_password = md5($_POST['admin_password']);

    $usersor = $db->prepare("SELECT * FROM admin where admin_username=:username and admin_password=:password");

    $kontrol = $usersor->execute(array(

        'username' => $admin_username,
        'password' => $admin_password

    ));

    if ($kontrol)
    {

        $_SESSION['admin_username'] = $admin_username;
        header("Location:../production/index.php");

    }
    else
    {

        header("Location:../production/login.php?status=no");
    }

}
if (isset($_POST['settingsupdate']))
{

    $settingssave = $db->prepare("UPDATE pagesettings SET

      settings_url=:settings_url,
      settings_title=:settings_title,
      settings_description=:settings_description,
      settings_keywords=:settings_keywords,
      settings_mail=:settings_mail,
      settings_analytics=:settings_analytics,
      settings_facebook=:settings_facebook,
      settings_twitter=:settings_twitter,
      settings_google=:settings_google,
      settings_linkedin=:settings_linkedin,
      settings_instagram=:settings_instagram,
      settings_pinterest=:settings_pinterest

      WHERE settings_id=1

      ");

    $update = $settingssave->execute(array(

        'settings_url' => $_POST['settings_url'],
        'settings_title' => $_POST['settings_title'],
        'settings_description' => $_POST['settings_description'],
        'settings_keywords' => $_POST['settings_keywords'],
        'settings_mail' => $_POST['settings_mail'],
        'settings_analytics' => $_POST['settings_analytics'],
        'settings_facebook' => $_POST['settings_facebook'],
        'settings_twitter' => $_POST['settings_twitter'],
        'settings_google' => $_POST['settings_google'],
        'settings_linkedin' => $_POST['settings_linkedin'],
        'settings_instagram' => $_POST['settings_instagram'],
        'settings_pinterest' => $_POST['settings_pinterest']

    ));

    if (!empty($_FILES['settings_logo']))
    {

        $uploads_dir = '../../img';
        @$tmp_name = $_FILES['settings_logo']["tmp_name"];
        @$name = seo($_FILES['settings_logo']["name"]);

        if (!empty($tmp_name))
        {

            $sayi = rand(20000, 32000);
            echo $refimg = substr($uploads_dir, 6) . "/" . $sayi . $name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$sayi$name");

            $update = $db->prepare("UPDATE pagesettings SET 
              settings_logo=:logo
              WHERE settings_id=1");
            $status = $update->execute(array(

                'logo' => $refimg

            ));

        }

        if ($status)
        {

            $imagedelete = $_POST['eski_yol'];
            unlink("../../$imagedelete");
            header("Location:../production/settings.php?updateimg=ok");

        }
        else
        {

            header("Location:../production/settings.php?updatetext=ok");
        }

    }

}

if (isset($_POST['sliderupdate']))
{

    $slidersave = $db->prepare("UPDATE slider SET

      slider_text=:slider_text

      WHERE slider_id=1

      ");

    $update = $slidersave->execute(array(

        'slider_text' => $_POST['slider_text']
    ));

    if (!empty($_FILES['slider_img']))
    {
        $uploads_dir = '../../img';
        @$tmp_name = $_FILES['slider_img']["tmp_name"];
        @$name = seo($_FILES['slider_img']["name"]);

        if (!empty($tmp_name))
        {

            $sayi = rand(20000, 32000);
            echo $refimg = substr($uploads_dir, 6) . "/" . $sayi . $name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$sayi$name");

            $update = $db->prepare("UPDATE slider SET 
              slider_img=:logo
              WHERE slider_id=1");
            $status = $update->execute(array(

                'logo' => $refimg

            ));

        }

        if ($status)
        {

            $imagedelete = $_POST['eski_yol'];
            unlink("../../$imagedelete");

            header("Location:../production/slider.php?updateimg=ok");

        }
        else
        {
            header("Location:../production/slider.php?updatetext=ok");

        }

    }

}

if (isset($_POST['alan1update']))
{

    $alan1save = $db->prepare("UPDATE alan_1 SET

      alan1_text1=:alan1_text1,
      alan1_text2=:alan1_text2,
      alan1_text3=:alan1_text3

      WHERE alan1_id=1

      ");

    $update = $alan1save->execute(array(

        'alan1_text1' => $_POST['alan1_text1'],
        'alan1_text2' => $_POST['alan1_text2'],
        'alan1_text3' => $_POST['alan1_text3']
    ));

    if ($update)
    {

        header("Location:../production/alan1.php?update=ok");

    }
    else
    {

        header("Location:../production/alan1.php?update=no");
    }

}

if (isset($_POST['aboutupdate']))
{

    $aboutsave = $db->prepare("UPDATE alan_2 SET

      alan2_about=:alan2_about

      WHERE alan2_id=1

      ");

    $update = $aboutsave->execute(array(

        'alan2_about' => $_POST['alan2_about']
    ));

    if (!empty($_FILES['alan2_photo']))
    {
        $uploads_dir = '../../img';
        @$tmp_name = $_FILES['alan2_photo']["tmp_name"];
        @$name = seo($_FILES['alan2_photo']["name"]);

        if (!empty($tmp_name))
        {

            $sayi = rand(20000, 32000);
            echo $refimg = substr($uploads_dir, 6) . "/" . $sayi . $name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$sayi$name");

            $update = $db->prepare("UPDATE alan_2 SET 
              alan2_photo=:logo
              WHERE alan2_id=1");
            $status = $update->execute(array(

                'logo' => $refimg

            ));

        }

        if ($status)
        {

            $imagedelete = $_POST['eski_yol'];
            unlink("../../$imagedelete");

            header("Location:../production/about.php?updateimg=ok");

        }
        else
        {
            header("Location:../production/about.php?updatetext=ok");

        }

    }

}

if (isset($_POST['alan3update']))
{

    $alan1save = $db->prepare("UPDATE alan_3 SET

      alan3_title=:alan3_title,
      alan3_textleft=:alan3_textleft,
      alan3_textright=:alan3_textright

      WHERE alan3_id=1

      ");

    $update = $alan1save->execute(array(

        'alan3_title' => $_POST['alan3_title'],
        'alan3_textleft' => $_POST['alan3_textleft'],
        'alan3_textright' => $_POST['alan3_textright']
    ));

    if ($update)
    {

        header("Location:../production/alan3.php?update=ok");

    }
    else
    {

        header("Location:../production/alan3.php?update=no");
    }

}

if (isset($_POST['alan5update']))
{

    $alan5save = $db->prepare("UPDATE alan_5 SET

      alan5_text=:alan5_text,
      alan5_btmtext=:alan5_btmtext
      WHERE alan5_id=1

      ");

    $update = $alan5save->execute(array(

        'alan5_text' => $_POST['alan5_text'],
        'alan5_btmtext' => $_POST['alan5_btmtext']
    ));

    if (!empty($_FILES['alan5_bgphoto']))
    {
        $uploads_dir = '../../img';
        @$tmp_name = $_FILES['alan5_bgphoto']["tmp_name"];
        @$name = seo($_FILES['alan5_bgphoto']["name"]);

        if (!empty($tmp_name))
        {

            $sayi = rand(20000, 32000);
            echo $refimg = substr($uploads_dir, 6) . "/" . $sayi . $name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$sayi$name");

            $update = $db->prepare("UPDATE alan_5 SET 
              alan5_bgphoto=:logo
              WHERE alan5_id=1");
            $status = $update->execute(array(

                'logo' => $refimg

            ));

        }

        if ($status)
        {

            $imagedelete = $_POST['eski_yol'];
            unlink("../../$imagedelete");

            header("Location:../production/alan5.php?updateimg=ok");

        }
        else
        {
            header("Location:../production/alan5.php?updatetext=ok");

        }

    }
}

if (!empty($_GET['referansdelete']))
{

    if ($_GET['referansdelete'] == "ok")
    {
        $delete = $db->prepare("DELETE from referanslar where referanslar_id=:id");
        $kontrol = $delete->execute(array(

            'id' => $_GET['referanslar_id']

        ));

        if ($kontrol)
        {
            header("Location:../production/referanslar.php?delete=ok");
        }
        else
        {
            header("Location:../production/referanslar.php?delete=no");

        }
    }
}

if (isset($_POST['referansadd']))
{

    $uploads_dir = '../../img';
    @$tmp_name = $_FILES['referanslar_logo']["tmp_name"];
    @$name = seo($_FILES['referanslar_logo']["name"]);

    if (!empty($tmp_name))
    {

        $sayi = rand(20000, 32000);
        echo $refimg = substr($uploads_dir, 6) . "/" . $sayi . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayi$name");

        $update = $db->prepare("INSERT INTO referanslar SET 
            referanslar_logo=:logo,
            referanslar_ad=:referanslar_ad");
        $status = $update->execute(array(

            'logo' => $refimg,
            'referanslar_ad' => $_POST['referanslar_ad']

        ));

    }

    if ($status)
    {
        header("Location:../production/referanslar.php?add=ok");
    }
    else
    {
        header("Location:../production/referanslar.php?add=no");

    }

}

if (isset($_POST['referanslarupdate']))
{

    $referanssave = $db->prepare("UPDATE referanslar SET

      referanslar_ad=:referanslar_ad

      WHERE referanslar_id={$_POST['referanslar_id']}

      ");

    $update = $referanssave->execute(array(

        'referanslar_ad' => $_POST['referanslar_ad']
    ));

    if (!empty($_FILES['referanslar_logo']))
    {
        $uploads_dir = '../../img';
        @$tmp_name = $_FILES['referanslar_logo']["tmp_name"];
        @$name = seo($_FILES['referanslar_logo']["name"]);

        if (!empty($tmp_name))
        {

            $sayi = rand(20000, 32000);
            echo $refimg = substr($uploads_dir, 6) . "/" . $sayi . $name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$sayi$name");

            $update = $db->prepare("UPDATE referanslar SET 
              referanslar_logo=:logo
              WHERE referanslar_id={$_POST['referanslar_id']}");
            $status = $update->execute(array(

                'logo' => $refimg

            ));

        }

        if ($status)
        {

            $imagedelete = $_POST['eski_yol'];
            unlink("../../$imagedelete");

            header("Location:../production/referanslar.php?updateimg=ok");

        }
        else
        {
            header("Location:../production/referanslar.php?updatetext=ok");

        }

    }
}

if (isset($_POST['alan4update']))
{

    $alan4save = $db->prepare("UPDATE alan_4 SET

      alan4_lefttext=:alan4_lefttext,
      alan4_righttext=:alan4_righttext

      WHERE alan4_id=1

      ");

    $update = $alan4save->execute(array(

        'alan4_lefttext' => $_POST['alan4_lefttext'],
        'alan4_righttext' => $_POST['alan4_righttext']
    ));

    if (!empty($_FILES['alan4_leftphoto']))
    {
        $uploads_dir = '../../img';
        @$tmp_name = $_FILES['alan4_leftphoto']["tmp_name"];
        @$name = seo($_FILES['alan4_leftphoto']["name"]);

        if (!empty($tmp_name))
        {

            $sayi = rand(20000, 32000);
            echo $refimg = substr($uploads_dir, 6) . "/" . $sayi . $name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$sayi$name");

            $update = $db->prepare("UPDATE alan_4 SET 
              alan4_leftphoto=:logo
              WHERE alan4_id=1");
            $status = $update->execute(array(

                'logo' => $refimg

            ));

        }

        if ($status)
        {

            $imagedelete = $_POST['eski_yol'];
            unlink("../../$imagedelete");

            header("Location:../production/alan4.php?updateimg=ok");

        }
        else
        {
            header("Location:../production/alan4.php?updatetext=ok");

        }
    }
    if (!empty($_FILES['alan4_rightphoto']))
    {
        $uploads_dir = '../../img';
        @$tmp_name = $_FILES['alan4_rightphoto']["tmp_name"];
        @$name = seo($_FILES['alan4_rightphoto']["name"]);

        if (!empty($tmp_name))
        {

            $sayi = rand(20000, 32000);
            echo $refimg = substr($uploads_dir, 6) . "/" . $sayi . $name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$sayi$name");

            $update = $db->prepare("UPDATE alan_4 SET 
          alan4_rightphoto=:logo
          WHERE alan4_id=1");
            $status = $update->execute(array(

                'logo' => $refimg

            ));

        }

        if ($status)
        {

            $imagedelete = $_POST['eski_yol2'];
            unlink("../../$imagedelete");

            header("Location:../production/alan4.php?updateimg=ok");

        }
        else
        {
            header("Location:../production/alan4.php?updatetext=ok");

        }

    }
}

if (isset($_POST['portfolyoupdate']))
{

    $portfolyosave = $db->prepare("UPDATE portfolyo SET

      portfolyo_ad=:portfolyo_ad

      WHERE portfolyo_id={$_POST['portfolyo_id']}

      ");

    $update = $portfolyosave->execute(array(

        'portfolyo_ad' => $_POST['portfolyo_ad']
    ));

    if (!empty($_FILES['portfolyo_photourl']))
    {
        $uploads_dir = '../../img';
        @$tmp_name = $_FILES['portfolyo_photourl']["tmp_name"];
        @$name = seo($_FILES['portfolyo_photourl']["name"]);

        if (!empty($tmp_name))
        {

            $sayi = rand(20000, 32000);
            echo $refimg = substr($uploads_dir, 6) . "/" . $sayi . $name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$sayi$name");

            $update = $db->prepare("UPDATE portfolyo SET 
              portfolyo_photourl=:logo
              WHERE portfolyo_id={$_POST['portfolyo_id']}");
            $status = $update->execute(array(

                'logo' => $refimg

            ));

        }

        if ($status)
        {

            $imagedelete = $_POST['eski_yol'];
            unlink("../../$imagedelete");

            header("Location:../production/portfolyo.php?updateimg=ok");

        }
        else
        {
            header("Location:../production/portfolyo.php?updatetext=ok");

        }

    }
}

if (isset($_POST['portfolyoadd']))
{

    $uploads_dir = '../../img';
    @$tmp_name = $_FILES['portfolyo_photourl']["tmp_name"];
    @$name = seo($_FILES['portfolyo_photourl']["name"]);

    if (!empty($tmp_name))
    {

        $sayi = rand(20000, 32000);
        echo $refimg = substr($uploads_dir, 6) . "/" . $sayi . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayi$name");

        $update = $db->prepare("INSERT INTO portfolyo SET 
            portfolyo_photourl=:logo,
            portfolyo_ad=:portfolyo_ad");
        $status = $update->execute(array(

            'logo' => $refimg,
            'portfolyo_ad' => $_POST['portfolyo_ad']

        ));

    }

    if ($status)
    {
        header("Location:../production/portfolyo.php?add=ok");
    }
    else
    {
        header("Location:../production/portfolyo.php?add=no");

    }

}
if (!empty($_GET['portfolyodelete']))
{

    if ($_GET['portfolyodelete'] == "ok")
    {
        $delete = $db->prepare("DELETE from portfolyo where portfolyo_id=:id");
        $kontrol = $delete->execute(array(

            'id' => $_GET['portfolyo_id']

        ));

        if ($kontrol)
        {
            header("Location:../production/portfolyo.php?delete=ok");
        }
        else
        {
            header("Location:../production/portfolyo.php?delete=no");

        }
    }
}

if (!empty($_GET['iletisim_delete']))
{

    if ($_GET['iletisim_delete'] == "ok")
    {
        $delete = $db->prepare("DELETE from iletisim where iletisim_id=:id");
        $kontrol = $delete->execute(array(

            'id' => $_GET['iletisim_id']

        ));

        if ($kontrol)
        {
            header("Location:../production/contact.php?delete=ok");
        }
        else
        {
            header("Location:../production/contact.php?delete=no");

        }
    }
}


if (isset($_POST['contactadd']))
{

        $iletisim_ad=htmlspecialchars($_POST['iletisim_ad']);
        $iletisim_konu=htmlspecialchars($_POST['iletisim_konu']);
        $iletisim_mail=htmlspecialchars($_POST['iletisim_mail']);
        $iletisim_mesaj=htmlspecialchars($_POST['iletisim_mesaj']);

        $add = $db->prepare("INSERT INTO iletisim SET 
            iletisim_ad=:iletisim_ad,
            iletisim_konu=:iletisim_konu,
            iletisim_mail=:iletisim_mail,
            iletisim_mesaj=:iletisim_mesaj
            ");
        $status = $add->execute(array(

            'iletisim_ad' => $iletisim_ad,
            'iletisim_konu' => $iletisim_konu,
            'iletisim_mail' => $iletisim_mail,
            'iletisim_mesaj' => $iletisim_mesaj

        ));


    if ($status)
    {
        header("Location:../../index.php?send=ok");

    }
    else
    {
        header("Location:../../index.php?error");

    }

}
    /*if (isset($_POST['sliderimgupdate']))
    {
    
    $uploads_dir = '../../img';
    @$tmp_name = $_FILES['settings_logo']["tmp_name"];
    @$name = seo($_FILES['settings_logo']["name"]);
    
    if (!empty($tmp_name))
    {
    
        $sayi = rand(20000, 32000);
        echo $refimg = substr($uploads_dir, 6) . "/" . $sayi . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayi$name");
    
        $update = $db->prepare("UPDATE slider SET 
          slider_img=:logo
          WHERE settings_id=1");
        $status = $update->execute(array(
    
            'logo' => $refimg
    
        ));
    
    }
    
    if ($update)
    {
    
        $imagedelete = $_POST['eski_yol'];
        unlink("../../$imagedelete");
        header("Location:../production/slider.php?statu=ok");
    
    }
    else
    {
    
        header("Location:../production/slider.php?statu=no");
    }
    }
    
    */
    /*
    
    if (!empty($_GET['productdelete']))
    {
    
    if ($_GET['productdelete'] == "ok")
    {
        $delete = $db->prepare("DELETE from products where product_id=:id");
        $kontrol = $delete->execute(array(
    
            'id' => $_GET['product_id']
    
        ));
    
        if ($kontrol)
        {
            header("Location:../production/products.php?delete=ok");
        }
        else
        {
            header("Location:../production/products.php?delete=no");
    
        }
    }
    }
    if (isset($_POST['categoryadd']))
    {
    $category_seourl = seo($_POST['category_name']);
    
    $categoryadd = $db->prepare("INSERT INTO category SET 
    
        category_name=:category_name,
        category_ust=:category_ust,
        category_seourl=:category_seourl,
        category_order=:category_order,
        category_statu=:category_statu
    
    
        ");
    $statu = $categoryadd->execute(array(
    
        'category_name' => $_POST['category_name'],
        'category_ust' => $_POST['category_ust'],
        'category_order' => $_POST['category_order'],
        'category_seourl' => $category_seourl,
        'category_statu' => $_POST['category_statu']
    
    ));
    if ($statu)
    {
        header("Location:../production/category.php?add=ok");
    }
    else
    {
        header("Location:../production/category.php?add=no");
    
    }
    
    }
    
    
    if (!empty($_GET['categorydelete']))
    {
    
    if ($_GET['categorydelete'] == "ok")
    {
        $delete = $db->prepare("DELETE from category where category_id=:id");
        $kontrol = $delete->execute(array(
    
            'id' => $_GET['category_id']
    
        ));
    
        if ($kontrol)
        {
            header("Location:../production/category.php?delete=ok");
        }
        else
        {
            header("Location:../production/category.php?delete=no");
    
        }
    }
    }
    if (isset($_POST['slideradd']))
    {
    
    $upload_dir = '../../img/slider';
    @$tmp_name = $_FILES['slider_imgurl']['tmp_name'];
    @$name = seo($_FILES['slider_imgurl']['name']);
    
    $number1 = rand(2000, 32000);
    $number2 = rand(2000, 32000);
    $number3 = rand(2000, 32000);
    $number4 = rand(2000, 32000);
    $numbername = $number1 . $number2 . $number3 . $number4;
    $refimgurl = substr($upload_dir, 6) . "/" . $numbername . $name;
    @move_uploaded_file($tmp_name, "$upload_dir/$numbername$name");
    
    $save = $db->prepare("INSERT INTO slider SET 
    
      slider_name=:slider_name,
      slider_imgurl=:slider_imgurl,
      slider_order=:slider_order,
      slider_url=:slider_url,
      slider_statu=:slider_statu
    
    
      ");
    
    $statu = $save->execute(array(
    
        'slider_name' => $_POST['slider_name'],
        'slider_order' => $_POST['slider_order'],
        'slider_url' => $_POST['slider_url'],
        'slider_statu' => $_POST['slider_statu'],
        'slider_imgurl' => $refimgurl
    ));
    
    if ($statu)
    {
    
        header("Location:../production/slider.php?add=ok");
    
    }
    else
    {
    
        header("Location:../production/slider.php?add=no");
    }
    
    }
    
    if (!empty($_GET['sliderdelete']))
    {
    if ($_GET['sliderdelete'] == "ok")
    {
        $delete = $db->prepare("DELETE from slider where slider_id=:id");
        $kontrol = $delete->execute(array(
    
            'id' => $_GET['slider_id']
    
        ));
    
        if ($kontrol)
        {
            $imagedelete = $_GET['slider_imgold'];
            unlink("../../$imagedelete");
    
            header("Location:../production/slider.php?delete=ok");
        }
        else
        {
            header("Location:../production/slider.php?delete=no");
    
        }
    }
    }
    
    if (isset($_POST['sliderupdate']))
    {
    
    $slider_id = $_POST['slider_id'];
    
    $upload_dir = '../../img/slider';
    @$tmp_name = $_FILES['slider_imgurl']['tmp_name'];
    @$name = seo($_FILES['slider_imgurl']['name']);
    
    $number1 = rand(2000, 32000);
    $number2 = rand(2000, 32000);
    $number3 = rand(2000, 32000);
    $number4 = rand(2000, 32000);
    $numbername = $number1 . $number2 . $number3 . $number4;
    
    if (!empty($tmp_name))
    {
    
        $refimgurl = substr($upload_dir, 6) . "/" . $numbername . $name;
        @move_uploaded_file($tmp_name, "$upload_dir/$numbername$name");
    
        $save = $db->prepare("UPDATE slider SET 
    
           slider_name=:slider_name,
           slider_imgurl=:slider_imgurl,
           slider_order=:slider_order,
           slider_url=:slider_url,
           slider_statu=:slider_statu
           WHERE slider_id={$_POST['slider_id']}");
    
        $statu = $save->execute(array(
    
            'slider_name' => $_POST['slider_name'],
            'slider_order' => $_POST['slider_order'],
            'slider_url' => $_POST['slider_url'],
            'slider_statu' => $_POST['slider_statu'],
            'slider_imgurl' => $refimgurl
        ));
    }
    else
    {
    
        $save = $db->prepare("UPDATE slider SET 
    
           slider_name=:slider_name,
           slider_order=:slider_order,
           slider_url=:slider_url,
           slider_statu=:slider_statu
           WHERE slider_id={$_POST['slider_id']}");
    
        $statu2 = $save->execute(array(
    
            'slider_name' => $_POST['slider_name'],
            'slider_order' => $_POST['slider_order'],
            'slider_url' => $_POST['slider_url'],
            'slider_statu' => $_POST['slider_statu']
        ));
    }
    
    if ($statu)
    {
    
        $imagedelete = $_POST['slider_imgurlold'];
        unlink("../../$imagedelete");
    
        header("Location:../production/slider.php?update=ok");
    
    }
    if ($statu2)
    {
        header("Location:../production/slider.php?update=ok");
    
    }
    
    else
    {
    
        header("Location:../production/slider.php?update=no");
    }
    
    }
    
    
    
    */

?>
