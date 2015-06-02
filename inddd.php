<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['rw'])){
	$hey=$_SESSION['iaakenn'];
$ram=$_POST['ram'];
$ram1=$_POST['ram1'];
$ram2=$_POST['ram2'];
$ramm=$_POST['ramm'];
$ac="Investment";
$capt='withdraw';
	$query="INSERT INTO withd(fname,email,phone,mesg,cat,ac) VALUES('{$ram}','{$ram1}','{$ram2}','{$ramm}','{$capt}','{$ac}')";
	$res=mysql_query($query,$connection);
	if(mysql_affected_rows()==1){
			$to="love4nation2013@gmail.com,support@meggaprofits.com";
	$subject="Meggaprofits Investment Withdraw Request";
	$header="FROM: MEGGAPROFITS INVESTMENT WITHDRAW REQUEST\n";
	$message="MEGGAPROFITS INVESTMENT WITHDRAW REQUEST"."\n"."\n";
	$message.="FULL NAME: ".$ram."\n"."\n";
	$message.="EMAIL ADDRESS: ".$ram1."\n"."\n";
	$message.="PHONE NUMBER: ".$ram2."\n"."\n";
	$message.="MESSAGE: ".$ramm."\n"."\n";
	$message.="CATEGORY: ".$capt."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$mess="Your request is being processed and we will get back to you as soon as possible";
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
<?php con_login();?>
<?php require_once("includes/cheader2.php");?>
  <style type="text/css">
 #head22a{
	background:#313131;
	 
 }
 </style>
 <div id="jigi">
 
 <div id="rqw">
  <?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
 <div id="mumu">

<div id="rqw">
<form action="" method="post" id="rwal" name="rwal">
<p><font color="#ca2722" face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+1"><b>Withdraw Now</b></font></p>
<p><i>Please fill out the form below for request and we'll try get back to you as soon as possible.</i></p>
<p><input type="text" name="ram" id="ram" placeholder="&nbsp;&nbsp;Full Name" value="<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['fname'];	
}
?>"/></p>
<p><input type="text" name="ram1" id="ram" placeholder="&nbsp;&nbsp;Email" value="<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['email'];	
}
?>"/></p>
<p><input type="text" name="ram2" id="ram" placeholder="&nbsp;&nbsp;Phone" value="<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['phone'];	
}
?>"/></p>
<p><textarea cols="25" rows="07" id="ramm" name="ramm" placeholder=" Type Your Message Here"></textarea></p>
<p><input type="submit" name="rw" id="rw2" value="Withdraw"/></p>
</form>
</div>
</div>
</div>
 </div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>