 <?php

try{
	$db = new PDO("mysql:host=localhost;dbname=port",'root','sapa2020');
	// echo "Connected Successfully";

}catch(PDOExcpetion $e){
	echo $e->getMessage();
}


// $host = "localhost";
// $databse="port";
// $user = "root";
// $password="sapa2020";

// $connect = mysql_connect($host,$user,$password);
// $connect_databse = mysql_select_db($databse,$connect);



 ?>