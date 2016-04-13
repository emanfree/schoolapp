 <a href="index.php">INDEX </a>&nbsp;


<?php
$HostName="localhost";
$db_name="schooldb";
$LoginName="root";
$LoginPassword="";




	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	
	$sql = "UPDATE student SET  st_name= '$_post[s_name]',st_age='$_post[s_age]',st_class='$_post[s_class]' WHERE  st_id= '$_post[s_id]'" ;
	
	$result = mysql_query($sql,$con) ;
	
  mysql_close($con);
  


?>
 