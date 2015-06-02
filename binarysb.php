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
	$header="FROM: Binary Signal Payment";
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
	$header="FROM: Binary Signal Payment";
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
	$header="FROM: Binary Signal Payment";
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
	$header="FROM: Binary Signal Payment";
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
 #head22b{
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
<p>You can subscribe for your Binary option signal service via any of the methods below.
</p>
 </div>
 <div id="jigi3">
  <p>Method&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Currency&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price Range&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Time</p>
 </div>
 <div id="jigi4">
 <p>Bank Wire/Money Transfer</p>
 </div>
 <div id="jigi5d">
 <a href="bskrill.php"><img src="images/skrill.png" width="58" height="66" /></a><p>GBP, USD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php   $hey=$_SESSION['iaakenn'];
$queryq="SELECT * FROM trade WHERE id='$hey'";
$req=mysql_query($queryq,$connection);
if(mysql_num_rows($req)==1){
	$resq=mysql_fetch_array($req);
	$din=$resq['pem'];
	if($din=='0'){?>$50/1 month, $90/2 months, $190/3 months.<?php  }else{?>
    
    $100/1 month, $180/2 months, $240/3 months.
    <?php  }}?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Time: 1 hour.</p><br />
 <a href="binarysb.php?pay=wu"> <img src="images/Western-Union-icon.png" width="58" height="66" /></a><p>GBP, USD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php   $hey=$_SESSION['iaakenn'];
$queryq="SELECT * FROM trade WHERE id='$hey'";
$req=mysql_query($queryq,$connection);
if(mysql_num_rows($req)==1){
	$resq=mysql_fetch_array($req);
	$din=$resq['pem'];
	if($din=='0'){?>$50/1 month, $90/2 months, $190/3 months.<?php  }else{?>
    
    $100/1 month, $180/2 months, $240/3 months.
    <?php  }}?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Time: 1 hour.</p><br />
  <br />
 
  <a href="binarysb.php?pay=pz"><img src="images/Payza.png" width="58" height="46" /></a><p>GBP, USD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php   $hey=$_SESSION['iaakenn'];
$queryq="SELECT * FROM trade WHERE id='$hey'";
$req=mysql_query($queryq,$connection);
if(mysql_num_rows($req)==1){
	$resq=mysql_fetch_array($req);
	$din=$resq['pem'];
	if($din=='0'){?>$50/1 month, $90/2 months, $190/3 months.<?php  }else{?>
    
    $100/1 month, $180/2 months, $240/3 months.
    <?php  }}?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Time: 1 hour.</p><br />
  <br />
  <br />
  <a href="binarysb.php?pay=wm"><img src="images/WebMoney.png" width="58" height="46" /></a><p>GBP, USD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php   $hey=$_SESSION['iaakenn'];
$queryq="SELECT * FROM trade WHERE id='$hey'";
$req=mysql_query($queryq,$connection);
if(mysql_num_rows($req)==1){
	$resq=mysql_fetch_array($req);
	$din=$resq['pem'];
	if($din=='0'){?>$50/1 month, $90/2 months, $190/3 months.<?php  }else{?>
    
    $100/1 month, $180/2 months, $240/3 months.
    <?php  }}?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Time: 1 hour.</p><br />
  <br />
  <br />
  <a href="binarysb.php?pay=pm"><img src="images/pm2.jpg" width="58" height="46" /></a><p>GBP, USD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php   $hey=$_SESSION['iaakenn'];
$queryq="SELECT * FROM trade WHERE id='$hey'";
$req=mysql_query($queryq,$connection);
if(mysql_num_rows($req)==1){
	$resq=mysql_fetch_array($req);
	$din=$resq['pem'];
	if($din=='0'){?>$50/1 month, $90/2 months, $190/3 months.<?php  }else{?>
    
    $100/1 month, $180/2 months, $240/3 months.
    <?php  }}?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Time: 1 hour.</p><br />
 </div>
 
 </div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>