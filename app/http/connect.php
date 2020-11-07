 <?php

try{
	$db = new PDO("mysql:host=localhost;dbname=port",'root','sapa2020');
	echo "Connected Successfully";

}catch(PDOExcpetion $e){
	echo $e->getMessage();
}


 ?>