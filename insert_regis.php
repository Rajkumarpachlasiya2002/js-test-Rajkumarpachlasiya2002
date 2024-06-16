<?php
							 
							if(isset($_POST['submit'])) 
$a=$_POST["a"];
$b=$_POST["b"];

include("config.php");

$insert="insert into tbl_registeration(`id`,`name`,`enrollment_no`)
values('null','".$a."','".$b."')";
if(!mysql_query($insert,$con))
	
{
	echo"Data not inserted";
	
}
else
{
	echo"Thanks your registeration Successfully";
	
}



