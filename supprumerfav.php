<?php 

include_once '../../config.php';
include_once '../../controller/favorieC.php';


$hotelc=new favorieC();

$prod=$hotelc->supprimerformations($_POST['id_favorie']);

header('location:http://localhost/may/view/back/table-favorie.php');

?>


