


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
	$sql = "SELECT * FROM player" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>


  الاسم <?php echo "$row[pla_name]"."   "?>



 النوع <?php echo "$row[pla_gender]"."<hr>"?>
 المدينة <?php echo "$row[pla_city]"."<hr>"?>


  <?php
	;}
	 mysql_close($con);
	?>
	
    <a href="index.php">index </a>&nbsp;
  <a href="userregister.php">userregiste </a>&nbsp;
  <a href="players.php"> playeres</a>&nbsp;
 <a href="playregister.php">playregister</a>