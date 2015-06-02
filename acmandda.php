<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['rw'])){
	$hey=$_SESSION['iaakenn'];
$ram=$_POST['ram'];
$ram1=$_POST['ram1'];
$selcat=$_POST['selcat'];
$ram2=$_POST['ram2'];
$ramm=$_POST['ramm'];
$ac="Account Management";
	$query="INSERT INTO withd(fname,email,phone,mesg,cat,ac) VALUES('{$ram}','{$ram1}','{$ram2}','{$ramm}','{$selcat}','{$ac}')";
	$res=mysql_query($query,$connection);
	if(mysql_affected_rows()==1){
		$to="love4nation2013@gmail.com,support@meggaprofits.com";
	$subject="Meggaprofits Account Management Query";
	$header="FROM: MEGGAPROFITS ACCOUNT MANAGEMENT QUERY\n";
	$message="MEGGAPROFITS ACCOUNT MANAGEMENT QUERY"."\n"."\n";
	$message.="FULL NAME: ".$ram."\n"."\n";
	$message.="EMAIL ADDRESS: ".$ram1."\n"."\n";
	$message.="PHONE NUMBER: ".$ram2."\n"."\n";
	$message.="MESSAGE: ".$ramm."\n"."\n";
	$message.="CATEGORY: ".$selcat."\n"."\n";
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
<?php

?>
<?php con_login();?>
<?php require_once("includes/cheader2.php");?>
  <style type="text/css">
 #head22c{
	background:#313131;
	 
 }
 </style>
 <div id="jigi">
  <?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
 <div id="heart">
 <p><font color="#ca2722"><b>ACCOUNT MANAGEMENT DETAILS</b></font><br /><br /></p>
<p>BROKER: <?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['brk'];	
}
?></p>
<p><br />TRADER LOGIN: <?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['trlog'];	
}
?></p>
<p><br />MINIMUM INVESTMENT: <?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo"$ ". $resset['amv'];	
}
?></p>
<p><br />STATUS: <?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['status'];	
}
?></p>
<p><br /><a href="ind.php"><input type="button" name="cher" id="cher" value="Click here if your Acct mgt minimum investment is not up to the required amount" /></a> </p>
<div id="rqw">
<div id="rqw">

<form action="" method="post" id="rwal" name="rwal">
<p><font color="#ca2722" face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+1"><b>Submit Your Query</b></font></p>
<p><i>Please fill out the form below for complaints or request and we'll try get back to you as soon as possible.</i></p>
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
<p><select id="ram" name="selcat">
<option value="complaints">Complaints</option>
<option value="withdraw">Withdraw</option>

</select></p>
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
<p><input type="submit" name="rw" id="rw2" value="Submit"/></p>
</form>
</div>
</div>
 </div>
 
 
 </div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>