<?php require_once("inc/connection.php");?>
<?php    
$ken=$_GET['con'];
$ken2=NULL;
$query="SELECT * FROM trade WHERE email='$ken'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$querya="UPDATE trade SET 
	conf='2'
	WHERE email='$ken' ";
	$resulta=mysql_query($querya,$connection);
	if(mysql_affected_rows()==1){
	$result_set=mysql_fetch_array($result);
	$to="support@meggaprofits.com,love4nation2013@gmail.com";
	$subject="Meggaprofits Account Management Activation";
	$header="FROM: ACCOUNT MANAGEMENT ACTIVATION\n";
	$message="ACCOUNT MANAGEMENT ACTIVATION"."\n"."\n";
	$message.="The Account of the following details have being activated"."\n"."\n";
	$message.="FULL NAME: ". $result_set['fname']."\n"."\n";
	$message.="EMAIL ADDRESS: ".$result_set['email']."\n"."\n";
	$message.="Meggaprofits Trader Password: ".$result_set['password']."\n"."\n";
	$message.="MOBILE NUMBER: ".$result_set['phone']."\n"."\n";
	$message.="ACCOUNT SIGNAL: ".$result_set['asignal']."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$to= $result_set['email'];
	$subject="Meggaprofits";
	$header="FROM:Meggaprofits Account Signal Login Details\n";
	$message="Dear ".$result_set['fname']."\n"."\n";
	$message.="You now have access to our member area. Enjoy all the benefit that we have to offer you from meggaprofits "."\n";
	$message.="Here's how to get started. Log into the member area of our website using your login email and password:"."\n"."\n";
		$message.="Email: ".$result_set['email']."\n";
		$message.="Password: ".$result_set['password']."\n"."\n";
		$message.="Select your desired program from the list of our services and start your way to financial independence."."\n"."\n";
		$message.="Please don't hesitate to contact us if you have any questions about Meggaprofits or"."\n";
		$message.="any of our services."."\n"."\n";
		$message.="It pays to trade with us!"."\n"."\n";
		$message.="Thanks you."."\n";
		$message.="Meggaprofits"."\n"."\n";
		$message.="Feel free to connect with us at:"."\n";
	$message.="Facebook: http://on.fb.me/1pUBMYm."."\n";
	$message.="Twitter: http://bit.ly/1EybH2q. "."\n";
	$message.="Linkedin: http://linkd.in/14hlxdV. "."\n";
	$message.="Googleplus: http://bit.ly/1GS4ez9."."\n";
	$message.="Instagram: http://bit.ly/14hlNtm. "."\n";
	$message.="Skype: Megga profits. "."\n";
	$message.="Pinterest: http://goo.gl/h6BwjY"."\n";
	$message.="PureChat: http://goo.gl/wQ04do. "."\n";
	$message.="Phone: +44(115)888-0848. "."\n";
	$message.="Email: support@meggaprofits.com."."\n";
	$message.="Website: www.meggaprofits.com. "."\n";
		if(mail($to,$subject,$header,$message)){
		
}
	else{
	$mess="Message not sent";
	$mess.=mysql_error();	
	}
	}
	else
	{
	$mess="error sending message";
	$mess.=mysql_error();	
	}
	}
	else{
	$mess="User already activated";
	$mess.=mysql_error();	
	}
}
else{
header("Location:index.php");
exit;	
	
}


?>
<?php
if(isset($_POST['alc'])){
	
	$selger=$_POST['selger'];
	$mtv=$_POST['mtv'];
	$mtv2=$_POST['mtv2'];
	$mum=$_GET['con'];
$querye="UPDATE trade SET
amt='$selger',
sdm='$mtv',
mtv='$mtv2'
WHERE email='$mum'";
$resulte=mysql_query($querye,$connection);
if(mysql_affected_rows()==1){
header("Location:log.php?val=1");	
exit;
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MeggaProfits</title>
<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/mega.css"/>
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/mega2.css"/>
<?php require_once("includes/head2.php");?>
<?php require_once("includes/shts2.php");?>
<?php require_once("includes/footer.php");?>