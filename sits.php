<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_login2();?>
<?php
if(isset($_POST['trsub'])){
	$ram=$_POST['ram'];
	$yrn=$_POST['yrn'];
	$yrn2=$_POST['yrn2'];
	$yrn3=$_POST['yrn3'];
	$yrn4=$_POST['yrn4'];
	$dater=date('Y-m-d');
	$go=true;
$query1="SELECT email FROM trade";
	$user_set=mysql_query($query1,$connection);
	while($usern=mysql_fetch_array($user_set)){
	if($usern['email']==$yrn2)
	{
		$mess="email already exists";
		$go=false;
		
	}
	
	}
	if($go!=false){
		if($ram=="Forex"){
	$query="INSERT INTO trade(fsignal,fname,email,phone,password,dreg) VALUES('{$ram}','{$yrn}','{$yrn2}','{$yrn3}','{$yrn4}','{$dater}')";
	$result=mysql_query($query,$connection);
	if(mysql_affected_rows()==1){
	$to="love4nation2013@gmail.com";
	$subject="Meggaprofits Trade Signals";
	$header="FROM: REGISTERATION(NOT ACTIVATED)\n";
	$message="REGISTRATION DETAILS(NOT ACTIVATED)"."\n"."\n";
	$message.="TRADE SIGNAL: ".$ram."\n"."\n";
	$message.="FULL NAME: ".$yrn."\n"."\n";
	$message.="EMAIL ADDRESS: ".$yrn2."\n"."\n";
	$message.="PHONE NUMBER: ".$yrn3."\n"."\n";
	$message.="PASSWORD: ".$yrn4."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		
		$to= $yrn2;
	$subject="Meggaprofits";
	$header="FROM:Trade Signal Account Confirmation\n";
$message="Dear ".$yrn."\n"."\n";
	$message.="Thank you for registering on our website."."\n"."\n";
	$message.="In order to activate your membership on our website and also to receive notifications about our services, you need to confirm your email."."\n"."\n";
	$message.="Please confirm your Meggaprofits account by following this link:"."\n";
	$message.="http://meggaprofits.com/sts.php?con=".urlencode($yrn2)."\n"."\n";
	$message.="Once your email is confirmed, you will have full access to all the features in our member area and subsequent notifications will be sent to this email address."."\n"."\n";
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
header("Location:adib.php?em=$yrn2");
}
	else{
	$mess="Message not sent";
	$mess.=mysql_error();	
	}
		
		
		
	}
	else{
	$mess="Message not sent";
	$mess.=mysql_error();	
	}
	
	
	
	}
	else{
	$mess="error inserting details";
	$mess.=mysql_error();		
	}
	}
	else{
	
	
	
		$query="INSERT INTO trade(fsignal,fname,email,phone,password,dreg) VALUES('{$ram}','{$yrn}','{$yrn2}','{$yrn3}','{$yrn4}','{$dater}')";
	$result=mysql_query($query,$connection);
	if(mysql_affected_rows()==1){
	$to="love4nation2013@gmail.com";
	$subject="Meggaprofits Trade Signals";
	$header="FROM: REGISTERATION(NOT ACTIVATED)\n";
	$message="REGISTRATION DETAILS(NOT ACTIVATED)"."\n"."\n";
	$message.="TRADE SIGNAL: ".$ram."\n"."\n";
	$message.="FULL NAME: ".$yrn."\n"."\n";
	$message.="EMAIL ADDRESS: ".$yrn2."\n"."\n";
	$message.="PHONE NUMBER: ".$yrn3."\n"."\n";
	$message.="PASSWORD: ".$yrn4."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		
		$to= $yrn2;
	$subject="Meggaprofits";
	$header="FROM:Trade Signal Account Confirmation\n";
$message="Dear ".$yrn."\n"."\n";
	$message.="Thank you for registering on our website."."\n"."\n";
	$message.="In order to activate your membership on our website and also to receive notifications about our services, you need to confirm your email."."\n"."\n";
	$message.="Please confirm your Meggaprofits account by following this link:"."\n";
	$message.="http://meggaprofits.com/sts.php?con=".urlencode($yrn2)."\n"."\n";
	$message.="Once your email is confirmed, you will have full access to all the features in our member area and subsequent notifications will be sent to this email address."."\n"."\n";
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
header("Location:adib.php");
}
	else{
	$mess="Message not sent";
	$mess.=mysql_error();	
	}
		
		
		
	}
	else{
	$mess="Message not sent";
	$mess.=mysql_error();	
	}
	
	
	
	}
	else{
	$mess="error inserting details";
	$mess.=mysql_error();		
	}
	
	
	
		
	}
	}
	else{
		//button not clicked
		
	}
}
?>
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
<title>MeggaProfits</title>
<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/mega.css"/>
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/mega2.css"/>
<?php require_once("includes/head2.php");?>
<?php require_once("includes/hsits.php");?>
<?php require_once("includes/footer.php");?>