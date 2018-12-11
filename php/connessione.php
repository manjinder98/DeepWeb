<?php
$user="2379818_sito";
$pass="***********";
$host="fdb17.runhosting.com";
$db="2379818_sito";  //cambiare nome database 
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){
	echo "connessione non riuscita";
	die;
}
else{
	echo "";
}
?>
