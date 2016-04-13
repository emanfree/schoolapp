
 <a href="index.php">INDEX </a>&nbsp;

<?php
$HostName="localhost";
$db_name="schooldb";
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

  <form name="myform" method="post" action="updatestudent.php">
  <input type="hidden" name="s_id" value="<?php echo "$row[st_id]"?>"/>



 <input type="text" name="s_name" value="<?php echo "$row[st_name]"?>"/>
  <input type="text" name="s_age" value="<?php echo "$row[st_age]"?>"/>
 <input type="text" name="s_class" value="<?php echo "$row[st_class]"?>"/>
</form>
  <?php
	;}
	 mysql_close($con);
	?>
	
    <a href="index.php">INDEX </a>&nbsp;
     
