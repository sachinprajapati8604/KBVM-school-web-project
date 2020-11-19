<?php
$servername="sql206.epizy.com";
$username="epiz_24258648";
$password="xILizG5WZF";
$dbname="epiz_24258648_kbvm";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn) 
{
//	echo "Connection done";
}
else
{
	//echo "Connection failed";  
	//or use to see error funtion of php
	
	die ("Connection failed beacuase ".mysqli_connect_error() );
	
	
}

?>