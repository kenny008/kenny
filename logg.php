<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_login2();?>
<?php
if(isset($_POST['megsub'])){
$tmail=$_POST['tmail'];
$passma=$_POST['passma'];
$query="SELECT * FROM trade WHERE email='$tmail' AND password='$passma' AND conf='2'";	
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
$mess="Incorrect Email and Password";	
}
}
?>
<?php
if(isset($_POST['megsubd'])){
$tmail=$_POST['tmail'];
$query="SELECT * FROM trade WHERE email='$tmail'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$res=mysql_fetch_array($result);
	$fsig=$res['fsignal'];
	$asig=$res['asignal'];
	$id=$res['id'];
	if($fsig!=NULL){
		$ken=$fsig.$id;
	$query2="UPDATE trade SET 
	password='$ken' WHERE email='$tmail'";	
	$re2=mysql_query($query2,$connection);
	if(mysql_affected_rows()==1){
		$to=$tmail;
	$subject="Meggaprofits Retrieve Password";
	$header="FROM: RETRIEVE PASSWORD\n";
	$message="Your Meggaprofits login details are:"."\n"."\n";
	$message.="EMAIL ADDRESS: ".$tmail."\n"."\n";
	$message.="PASSWORD: ".$ken."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$mess="Your Password have being sent to ".$tmail;
	}
	else{
	$mess="mail not sent";
	$mess.=mysql_error();	
	}
	}
	else{
		$to=$tmail;
	$subject="Meggaprofits Retrieve Password";
	$header="FROM: RETRIEVE PASSWORD\n";
	$message="Your Meggaprofits login details are:"."\n"."\n";
	$message.="EMAIL ADDRESS: ".$tmail."\n"."\n";
	$message.="PASSWORD: ".$ken."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$mess="Your Password have being sent to ".$tmail;
	}
	else{
	$mess="mail not sent";
	$mess.=mysql_error();	
	}
	}
	}
	else{
	$ken=$asig.$id;
	$query2="UPDATE trade SET 
	password='$ken' WHERE email='$tmail'";	
	$re2=mysql_query($query2,$connection);	
	if(mysql_affected_rows()==1){
	$to=$tmail;
	$subject="Meggaprofits Retrieve Password";
	$header="FROM: RETRIEVE PASSWORD\n";
	$message="RETRIEVE PASSWORD"."\n"."\n";
	$message.="EMAIL ADDRESS: ".$$tmail."\n"."\n";
	$message.="PASSWORD: ".$ken."\n"."\n";
	if(mail($to,$subject,$header,$message)){
				$to=$tmail;
	$subject="Meggaprofits Retrieve Password";
	$header="FROM: RETRIEVE PASSWORD\n";
	$message="RETRIEVE PASSWORD"."\n"."\n";
	$message.="EMAIL ADDRESS: ".$$tmail."\n"."\n";
	$message.="PASSWORD: ".$ken."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$mess="Your Password have being sent to ".$tmail;
	}
	else{
	$mess="mail not sent";
	$mess.=mysql_error();	
	}
	}
	else{
	$mess="mail not sent";
	$mess.=mysql_error();	
	}
	}
	else{
$mess="Your Password have being sent to ".$tmail;
	}
	}
}
else{
$mess="The Email Address is not Registered in our Database";	
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

<?php require_once("includes/head3.php");?>
<script type="text/javascript">
$(document).ready(function(){
	 $("#fpa").click(function(){
		 $("#megad").show();
		 $("#mega").hide();

	});
		});
</script>
<?php require_once("includes/hlogg.php");?>
<?php require_once("includes/footer.php");?>