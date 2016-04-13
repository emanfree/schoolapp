 <a href="index.php">INDEX </a>&nbsp;


<?php
$HostName="localhost";
$db_name="schooldb";
$LoginName="root";
$LoginPassword="";   
?>
<?php

	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	
	$st_id= $_post['s_id'] ;
	if ( isset($_post['s_id'])) {
	$sql = "DELETE FROM student WHERE st_id ='$st_id'" ;}
	
	mysql_query($sql,$con) ;
	
  mysql_close($con);
  
?>

