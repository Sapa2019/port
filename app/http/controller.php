<?php
ob_start();
session_start();
include 'connect.php';


//Menu Add
if(isset($_POST['menu_add'])){

	$menu = $db->prepare("INSERT INTO menu (menu_name,menu_link) VALUES (:name,:link)");
	$menu->bindParam(':name', $_POST['menu_name'],PDO::PARAM_STR);
	$menu->bindParam(':link', $_POST['menu_link'],PDO::PARAM_STR);
	$menu_save = $menu->execute();


	if($menu_save){
		header("Location:../admin/menu_add.php?status=ok");
	}else{
		header("Location:../admin/menu_add.php?status=no");
	}


}



	
?>