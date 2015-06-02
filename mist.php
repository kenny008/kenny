<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['woju'])){
	$woju1=$_POST['woju1'];
$query="INSERT INTO fire(love) VALUES('{$woju1}')";
$rim=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
echo"successful";	
}
else{
echo mysql_error();	
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<p><textarea cols="115" rows="30" name="woju1" id="woju" wrap="physical"></textarea></p>
<p><input type="submit" name="woju" id="woju" /></p>
</form>
</body>
</html>
