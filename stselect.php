
<?php
$HostName="localhost";
$db_name="itidb";
$LoginName="root";
$LoginPassword="";

   
?>
 <?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf8';");
	$sql = "SELECT * FROM student" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>


   <?php echo "$row[st_name]"."   "?>



  <?php echo "$row[st_age]"."<hr>"?>
  <?php echo "$row[st_class]"."<hr>"?>
<a href="stdelete.php?st_id=<?php print $row["st_id"]?>"><input type="submit" value="delete " /></a><hr />

  <?php
	;}
	 mysql_close($con);
	?>
	