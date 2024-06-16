<?php
$con=mysql_connect("localhost","root","");

if(!$con)
{
	echo"Database not connected";
	
}
$con_string= mysql_select_db("ecourse_db", $con);

?>