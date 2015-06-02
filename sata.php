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
	$subject="Meggaprofits Account Management Account Activation";
	$header="FROM: ACCOUNT MANAGEMENT ACCOUNT ACTIVATION\n";
	$message="ACCOUNT MANAGEMENT ACCOUNT ACTIVATION"."\n"."\n";
	$message.="The Account of the following details have being activated"."\n"."\n";
	$message.="FULL NAME: ". $result_set['fname']."\n"."\n";
	$message.="EMAIL ADDRESS: ".$result_set['email']."\n"."\n";
	$message.="HTT Forex Trader Password: ".$result_set['password']."\n"."\n";
	$message.="MOBILE NUMBER: ".$result_set['phone']."\n"."\n";
	$message.="TRADE SIGNAL: ".$result_set['signal']."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$to= $result_set['email'];
	$subject="HTT Forex Capital";
	$header="FROM:Meggaprofits Account Management Login Details\n";
	$message="Dear ".$result_set['fname']."\n"."\n";
	$message.="You are now registered to Meggaprofits Account Management Account, your personal area on our"."\n";
	$message.="website where you can: "."\n"."\n";
	$message.="Log into your client area using your login Email and password: "."\n"."\n";
		$message.="Meggaprofits Account Management Login: ".$result_set['email']."\n";
		$message.="Meggaprofits Account Management Password: ".$result_set['ppword']."\n"."\n";
		$message.="Your Meggaprofits Account Management Login details will also give you free access"."\n";
		$message.="to expired forex trade signals in our client area"."\n"."\n";
		$message.="Please don't hesitate to contact us if you have any questions about Meggaprofits or"."\n";
		$message.="any of our services."."\n"."\n";
		$message.="Good luck trading!"."\n"."\n";
		$message.="Best Regards,"."\n";
		$message.="Meggaprofits Team"."\n"."\n";
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/mega.css"/>
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/mega2.css"/>
<script type="text/javascript">
 window.setTimeout(function(){
        window.location.href = "http://localhost/mega/amans.php";
    }, 5000);
	</script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.easing.js"></script>
 <script type="text/javascript">
 	var fadeDuration=1000;
	var slideDuration=6000;
	var currentIndex=1;
	var nextIndex=1;
	$(document).ready(function()
	{
		
		$('ul.slideshow li').css({opacity: 0.0});
		$("'ul.slideshow li:nth-child("+nextIndex+")'").addClass('show').animate({opacity: 1.0}, fadeDuration);
		var timer = setInterval('nextSlide()',slideDuration);
	})
	function nextSlide(){
			nextIndex =currentIndex+1;
			if(nextIndex > $('ul.slideshow li').length)
			{
				nextIndex =1;
			}
			$("'ul.slideshow li:nth-child("+nextIndex+")'").addClass('show').animate({opacity: 1.0}, fadeDuration);
			$("'ul.slideshow li:nth-child("+currentIndex+")'").animate({opacity: 0.0}, fadeDuration).removeClass('show');
			currentIndex = nextIndex;
	}
 </script>
 <style type="text/css">
	
	#cont4{
		float:left;
		margin:0px 0px 0px 0px;
width:1000px;	
		
	}
	.slideshow{
		width:1000px;
		list-style: none;
		position:relative;
		top:0px;
	}
 	ul.slideshow li {
		position:absolute;
		left:0px;
		top:0px;
		display:inline;
		
	}
	ul.slideshow li.show {
		y-index:500;	
	}
	#cont4 ul{
	margin:0px 0px 0px 0px;

	}

 </style>




</head>

<body>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="containerr">
<div id="ssstat">
<div id="stat1">
<div id="stat1a">
<p>Meggaprofits<br /><font color="#FF0000" size="-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Forex Backup</font></p>
</div>
<div id="stat1b">
<div id="stat1c">
<p><a href="log.php">Login</a>&nbsp;&nbsp;&nbsp;</p><img src="images/fb.png" width="25" height="25" /><img src="images/gp.png" width="25" height="25" /><img src="images/tw.png" width="25" height="25" /><img src="images/in.png" width="25" height="25" /><img src="images/pinit.png" width="25" height="25" /><img src="images/youtube.png" width="25" height="25" />
</div>
<div id="stat1d">
<a href="index.php"><div id="min">
<p align="center"><a href="index.php">Home</a></p>
</div></a>
<a href="abt.php"><div id="min2">
<p align="center"><a href="abt.php">About Us</a></p>
</div>
</a>
<a href="ts.php">
<div id="min4">
<p align="center"><a href="ts.php">Trade Signals</a></p>
</div>
</a>
<a href="aman.php">
<div id="min3">
<p align="center"><a href="aman.php">Account Management</a></p>
</div>
</a>

<a href="cot.php">
<div id="min6">
<p align="center"><a href="cot.php">Contact</a></p>
</div>
</a>
</div>
</div>
</div>
<?php require_once("includes/hsata.php");?>
<?php require_once("includes/footer.php");?>