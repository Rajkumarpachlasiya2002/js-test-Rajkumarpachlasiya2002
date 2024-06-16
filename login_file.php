<?php
include("config.php");

$user_id=$_POST["a"];
$password=$_POST["b"];

$sql="select * from tbl_admin  
where `username`='".$user_id."' and `password`='".$password."'";

$result=mysql_query($sql,$con);

		if(mysql_num_rows($result)>0)
	{
		while($row=mysql_fetch_array($result))
			
	{
		session_start();
		$session_id=session_id();
	$SESSION[$id]=session_id;
	$_SESSION['id']=$row['id'];	
	
	
	header ("location:add_cat.php?id=".$row['id']."");
	}
	}	
	
else
    {
		echo"
		<script language ='Javascript'>
		alert('invalid username and password...');
		
		</script>
		
		<meta http-equiv='REFRESH' content='0;url=login.html'>";
	}
	
	
mysql_close($con);
     
	?>
		
		
		
		
		
		
		