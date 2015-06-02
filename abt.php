<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['trsub2'])){
$yrn2=$_POST['yrn2'];
$yrn3=$_POST['yrn3'];
$query="SELECT * FROM trade WHERE email='$yrn2' AND password='$yrn3' AND conf='2'";	
$re=mysql_query($query,$connection);
if(mysql_num_rows($re)==1){
	$user=mysql_fetch_array($re);
		$_SESSION['iaakenn']=$user['id'];
		$_SESSION['eaakenn']=$user['email'];
		$_SESSION['haha']=$user['fname'];
		$_SESSION['hahas']=$user['phone'];
header("Location:client.php");
exit;	
}
else{
$messa="Incorrect Email and Password";	
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Meggaprofits- About us</title>
<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/mega.css"/>
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/mega2.css"/>
<?php require_once("includes/headsj.php");?>
<?php require_once("includes/habt.php");?>
<?php require_once("includes/footer.php");?>