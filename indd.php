<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_GET['pay'])){
if($_GET['pay']=="wu"){
	$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$resset=mysql_fetch_array($result);
	$name=$resset['fname'];
	$ema=$resset['email'];
	$pho=$resset['phone'];
	$to="love4nation2013@gmail.com,support@meggaprofits.com";
	$subject="Western Union Online Payment";
	$header="FROM: Investment Payment";
	$message="Western Union Online Payment"."\n"."\n";
	$message.="Full NAME: ".$name."\n"."\n";
	$message.="EMAIL: ".$ema."\n"."\n";
	$message.="EMAIL ADDRESS: ".$yrn2."\n"."\n";
	$message.="PHONE NUMBER: ".$pho."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$mess="You will be contacted as soon as possible on how to use our Western Union Online Payment";
	}
	else{
	$mess="error sending mail";	
	$mess.=mysql_error();
	}
}
}
else if($_GET['pay']=="pz"){
	
	$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$resset=mysql_fetch_array($result);
	$name=$resset['fname'];
	$ema=$resset['email'];
	$pho=$resset['phone'];
	$to="love4nation2013@gmail.com,support@meggaprofits.com";
	$subject="Payza Online Payment";
	$header="FROM: Investment Payment";
	$message="Payza Online Payment"."\n"."\n";
	$message.="Full NAME: ".$name."\n"."\n";
	$message.="EMAIL: ".$ema."\n"."\n";
	$message.="EMAIL ADDRESS: ".$yrn2."\n"."\n";
	$message.="PHONE NUMBER: ".$pho."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$mess="You will be contacted as soon as possible on how to use our Payza Online Payment";
	}
	else{
	$mess="error sending mail";	
	$mess.=mysql_error();
	}
}
}

else if($_GET['pay']=="wm"){
	
	$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$resset=mysql_fetch_array($result);
	$name=$resset['fname'];
	$ema=$resset['email'];
	$pho=$resset['phone'];
	$to="love4nation2013@gmail.com,support@meggaprofits.com";
	$subject="Web Money Online Payment";
	$header="FROM: Investment Payment";
	$message="Web Money Online Payment"."\n"."\n";
	$message.="Full NAME: ".$name."\n"."\n";
	$message.="EMAIL: ".$ema."\n"."\n";
	$message.="EMAIL ADDRESS: ".$yrn2."\n"."\n";
	$message.="PHONE NUMBER: ".$pho."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$mess="You will be contacted as soon as possible on how to use our Web Money Online Payment";
	}
	else{
	$mess="error sending mail";	
	$mess.=mysql_error();
	}
}
}

else if($_GET['pay']=="pm"){
	
	$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$resset=mysql_fetch_array($result);
	$name=$resset['fname'];
	$ema=$resset['email'];
	$pho=$resset['phone'];
	$to="love4nation2013@gmail.com,support@meggaprofits.com";
	$subject="Perfect Money Online Payment";
	$header="FROM: Investment Payment";
	$message="Perfect Money Online Payment"."\n"."\n";
	$message.="Full NAME: ".$name."\n"."\n";
	$message.="EMAIL: ".$ema."\n"."\n";
	$message.="EMAIL ADDRESS: ".$yrn2."\n"."\n";
	$message.="PHONE NUMBER: ".$pho."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$mess="You will be contacted as soon as possible on how to use our Perfect Money Online Payment";
	}
	else{
	$mess="error sending mail";	
	$mess.=mysql_error();
	}
}
}



}
?>
<?php con_login();?>
<?php require_once("includes/cheader2.php");?>
  <style type="text/css">
 #head22a{
	background:#313131;
	 
 }
 </style>
 <div id="jigi">
  <?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
 <div id="jigi1">
<p>Payment Method</p>
 </div>
  <div id="jigi2">
<p>You can fund your investment account via any of the methods below. The minimum investment is 100USD/Pounds.We accept Payza, Skrill, PerfectMoney, Webmoney and Neteller. Deposited funds reflects on clients investment account almost immediately.</p>
 </div>
 <div id="jigi3">
 <p>Method&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Currency&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Min-Max Deposit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Time</p>
 </div>
 <div id="jigi4">
 <p>Bank Wire/Money Transfer</p>
 </div>
 <div id="jigi5">
 <a href="skrill.php"><img src="images/skrill.png" width="58" height="66" /></a><p>GBP, USD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100-4,999&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Time: 1 hour.</p><br />

  <a href="indd.php?pay=wu"> <img src="images/Western-Union-icon.png" width="58" height="66" /></a><p>GBP, USD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100-4,999&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Time: 1 hour.</p>
  <br />

   <a href="indd.php?pay=pz"><img src="images/Payza.png" width="58" height="46" /></a><p>GBP, USD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100-4,999&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Time: 1 hour.</p>
  <br />
  <br />
   <a href="indd.php?pay=wm"><img src="images/WebMoney.png" width="58" height="46" /></a><p>GBP, USD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100-4,999&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Time: 1 hour.</p>
  <br />
  <br />
   <a href="indd.php?pay=pm"><img src="images/pm2.jpg" width="58" height="46" /></a><p>GBP, USD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100-4,999&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Time: 1 hour.</p>
 </div>
 
 </div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>