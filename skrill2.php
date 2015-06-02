<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['skrsub'])){
	$jim=$_SESSION['iaakenn'];
$tskr=$_POST['tskr'];
$tskr1=$_POST['tskr1'];
$tskr2=$_POST['tskr2'];
	$query="UPDATE trade SET
fname='$tskr',
amv='$tskr1',
brk='$tskr2'
WHERE id='$jim'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	header("Location:skrill2.php");
	exit;
}
else{
$mess="Profile Already Updated";	
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
 
 <form action="https://www.moneybookers.com/app/payment.pl" method="post" id="prince" name="prince" target="_blank">
 <p><font color="#ca2722" size="+1"><b>SKRILL PAYMENT DETAILS</b></font></p>
 <p>Full Name: <?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['fname'];	
}
?></p>
<p>Broker: <?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['brk'];	
}
?></p>
<p>Investment Amount: <?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo "$".$resset['amv'];	
}
?></p>
<p><input type="hidden" name="pay_to_email" value="meggaprofits@gmail.com"></p>
<p><input type="hidden" name="status_url" value="meggaprofits@gmail.com"></p>
<p><input type="hidden" name="language" value="EN"></p>
<p><input type="hidden" name="amount" value="<?php   echo"{$resset['amv']}"?>"></p>
<p><input type="hidden" name="currency" value="USD"></p>
<p><input type="hidden" name="detail1_description" value="INVESTMENT PAYMENT (<?php  echo"{$resset['brk']}" ?>)"></p>
<p><input type="hidden" name="detail1_text" value="INVESTMENT PAYMENT (<?php  echo"{$resset['brk']}" ?>)"></p>
<p><input type="hidden" name="confirmation_note" value="Meggaprofits"></p>
 <p><input type="submit" name="kalid" id="kalid" value="Pay With Skrill"/>&nbsp;&nbsp;&nbsp;&nbsp;<a href="skrill.php">Edit Details</a></p>
 </form>
 
 </div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>
