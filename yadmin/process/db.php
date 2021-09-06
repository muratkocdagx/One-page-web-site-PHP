<?php 

try{

$db= new PDO("mysql:host=localhost;dbname=yarchist_personal2;charset=utf8",'yarchist_murat','mGACV6vW^%U=');
/*echo "Veritabanı başarılı.";*/

}
catch(PDOExpception $e){

	echo $e->getMessage();

}




 ?>