<?php  
	
	 $host="us-cdbr-iron-east-02.cleardb.net";
	$user="bc6adcaf2484c9";
	$password="8385b790";
	$database="heroku_e423aff750f5064";
	
	 $conexion=new mysqli($host,$user,$password,$database); 
	

     if ($conexion->connect_errno) 
     {
 	    die("fallo de la conexion");
 	 }





?>