<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['sba'])){
$tam=$_POST['tam'];
$to="support@meggaprofits.com,love4nation2013@gmail.com";
	$subject="Meggaprofits VIP Package";
	$header="FROM: VIP Package\n";
	$message="VIP PACKAGE"."\n"."\n";
	$message.="The VIP package of Meggaprofits have being subscribed by the following email address"."\n"."\n";
	$message.="EMAIL: ". $tam."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		echo '<script type="text/javascript">
        window.alert("Thanks you for subscribing to our VIP package, you will be contacted shortly")
        </script>';
	}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MeggaProfits- The Leading Fund Management and Forex Signal Company</title>
<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/mega.css"/>
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/mega2.css"/>
<?php require_once("includes/head.php");?>
<?php require_once("includes/hbody.php");?>
<?php require_once("includes/footer.php");?>