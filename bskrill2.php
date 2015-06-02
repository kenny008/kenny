<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>

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
 
 <form action="https://www.moneybookers.com/app/payment.pl" method="post" id="prince" name="prince" target="_blank">
 <p><font color="#ca2722" size="+1"><b>SKRILL PAYMENT DETAILS (Binary Signal)</b></font></p>
 <p>Full Name: <?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['fname'];	
}
?></p>
<p>Broker: Binary</p>
<p>Subscription Amount: <?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo "$".$resset['amt'];	
}
?></p>
<p>Signal Deliver Method: <?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['sdm'];	
}
?></p>
<p>Deliver Description: <?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['mtv'];	
}
?></p>
<p><input type="hidden" name="pay_to_email" value="meggaprofits@gmail.com"></p>
<p><input type="hidden" name="status_url" value="meggaprofits@gmail.com"></p>
<p><input type="hidden" name="language" value="EN"></p>
<p><input type="hidden" name="amount" value="<?php   echo"{$resset['amt']}"?>"></p>
<p><input type="hidden" name="currency" value="USD"></p>
<p><input type="hidden" name="detail1_description" value="BINARY SIGNAL PAYMENT"></p>
<p><input type="hidden" name="detail1_text" value="BINARY SIGNAL PAYMENT"></p>
<p><input type="hidden" name="confirmation_note" value="Meggaprofits"></p>
 <p><input type="submit" name="kalid" id="kalid" value="Pay With Skrill"/>&nbsp;&nbsp;&nbsp;&nbsp;<a href="bskrill.php">Edit Details</a></p>
 </form>
 
 </div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>
