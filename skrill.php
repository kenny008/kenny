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
header("Location:skrill2.php");
	exit;
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
<p>Skrill Payment Method</p>
 </div>
  <div id="jigi2">
<form action="" method="post" name="skrill" id="skrill">
<p><input type="text" name="tskr" id="tskr" placeholder="&nbsp;&nbsp;Full Name" value="<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['fname'];	
}
?>"/></p>
<p><input type="text" name="tskr1" id="tskr" placeholder="&nbsp;&nbsp;Amount to Invest" value="<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['amv'];	
}
?>"/></p>
<p><input type="text" name="tskr2" id="tskr" placeholder="&nbsp;&nbsp;Broker" value="<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['brk'];	
}
?>"/></p>

<p><input type="submit" name="skrsub" id="skrsub"  value="Enter"/></p>
</form>
 </div>
 
 
 </div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>