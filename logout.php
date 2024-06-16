<?php
session_start();
 unset($_SESSION['id']);
 session_destroy();
 echo "<script language='javascript'>
{
  alert(' You have been logged out successfully...');	
   
}
</script>
<meta http-equiv='REFRESH' content='0;url=../index.php'></HEAD>
 
'";
  
?>
