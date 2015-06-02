<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['skrsub'])){
	$jim=$_SESSION['iaakenn'];
$tskr=$_POST['tskr'];
$tskr1=$_POST['tskr1'];
$tskr2=$_POST['tskr2'];
$sidy=$_POST['sidy'];
$medt=$_POST['medt'];
	$query="UPDATE trade SET
fname='$tskr',
sdm='$sidy',
mtv='$medt',
amt='$tskr2'
WHERE id='$jim'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	header("Location:tskrill2.php");
	exit;
}
else{
	header("Location:tskrill2.php");
	exit;
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
<p>Skrill Payment Method (Forex Signal)</p>
 </div>
  <div id="jigi2">
<form action="" method="post" name="skrill" id="skrillt">
<p><br />Full Name:<br />
<input type="text" name="tskr" id="tskr" placeholder="&nbsp;&nbsp;Full Name" value="<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['fname'];	
}
?>"/></p>
<p>
<br />
Broker:<br />
<input type="text" name="tskr1" id="tskr" placeholder="&nbsp;&nbsp;Amount to Invest" value="Forex" readonly="readonly"/></p>
<p><br />
<?php   
$hey=$_SESSION['iaakenn'];
$queryq="SELECT * FROM trade WHERE id='$hey'";
$req=mysql_query($queryq,$connection);
if(mysql_num_rows($req)==1){
	$resq=mysql_fetch_array($req);
	$din=$resq['pem'];
	if($din=='0'){?>
Subscription:<br /><select id="tskr" name="tskr2">

<option value="50">$50</option>
<option value="90">$90</option>
<option value="130">$130</option>

</select>
<?php  }else{?>

Subscription:<br /><select id="tskr" name="tskr2">

<option value="100">$100</option>
<option value="180">$180</option>
<option value="240">$240</option>

</select>
<?php  }}?>
</p>
<p><br />Signal Delivery Method:<br />
<input type="radio" name="sidy" id="sidy" value="WhatsApp"
<?php
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
$ch=$resset['sdm'];
if($ch=="WhatsApp"){
echo" checked";	
}
}

?>/>WhatsApp&nbsp;&nbsp;<input type="radio" name="sidy" id="sidy" value="Facebook" <?php
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
$ch=$resset['sdm'];
if($ch=="Facebook"){
echo" checked";	
}
}

?>/>Facebook&nbsp;&nbsp;<input type="radio" name="sidy" id="sidy" value="Twitter" <?php
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
$ch=$resset['sdm'];
if($ch=="Twitter"){
echo" checked";	
}
}

?>/>Skype&nbsp;&nbsp;<input type="radio" name="sidy" id="sidy" value="Sms" <?php
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
$ch=$resset['sdm'];
if($ch=="Sms"){
echo" checked";	
}
}

?>/>Sms&nbsp;&nbsp;<input type="radio" name="sidy" id="sidy" value="Yahoo Messenger" <?php
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
$ch=$resset['sdm'];
if($ch=="Yahoo Messenger"){
echo" checked";	
}
}

?>/>Yahoo Messenger</p>
<p><br /><input type="text" name="medt" id="tskr" placeholder="&nbsp;&nbsp;Signal Delivery Details" value="<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['mtv'];	
}
?>"/></p>
<br />

<p><input type="submit" name="skrsub" id="skrsub"  value="Enter"/></p>
</form>
 </div>
 
 
 </div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>