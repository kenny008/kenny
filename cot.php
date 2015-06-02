<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['nail'])){
$rob=$_POST['rob'];
$rob1=$_POST['rob1'];
$rob2=$_POST['rob2'];
$rob3=$_POST['rob3'];
$robb=$_POST['robb'];
	$query="INSERT INTO cont(fname,address,email,phone,mesn) VALUES('{$rob}','{$rob1}','{$rob2}','{$rob3}','{$robb}')";
	$res=mysql_query($query,$connection);
	if(mysql_affected_rows()==1){
		$to="love4nation2013@gmail.com,support@meggaprofits.com";
	$subject="Meggaprofits Contact Us";
	$header="FROM: CONTACT US\n";
	$message="CONTACT US"."\n"."\n";
	$message.="FULL NAME: ".$rob."\n"."\n";
	$message.="ADDRESS: ".$rob1."\n"."\n";
	$message.="EMAIL ADDRESS: ".$rob2."\n"."\n";
	$message.="PHONE NUMBER: ".$rob3."\n"."\n";
	$message.="MESSAGE: ".$robb."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$mess="Thank you ".$rob.","." we will get back to you as soon as possible";
	}
	else{
	$mess="mail not sent";
	$mess.=mysql_error();	
	}
	}
	else{
	$mess="error inserting into withdraw table";
	$mess.=mysql_error();	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Meggaprofits- Contact us</title>
<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/mega.css"/>
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/mega2.css"/>

<?php require_once("includes/head2.php");?>
<?php require_once("includes/hcot.php");?>
<?php require_once("includes/footer.php");?>