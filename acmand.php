<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
$jim=$_SESSION['iaakenn'];
$querys="SELECT * FROM trade WHERE id='$jim'";
$results=mysql_query($querys,$connection);
if(mysql_num_rows($results)==1){
$rsl=mysql_fetch_array($results);
$brk=$rsl['brk'];
$trlog=$rsl['trlog'];
$trpass=$rsl['trpass'];
$amv=$rsl['amv'];
if($brk AND $trlog AND $trpass AND $amv !=NULL){
header("Location:acmandda.php");
exit;	
}
}
?>
<?php
if(isset($_POST['myasub'])){
	$myt=$_POST['myt'];
	$myt1=$_POST['myt1'];
	$myt2=$_POST['myt2'];
	$myt3=$_POST['myt3'];
	$jim=$_SESSION['iaakenn'];
	$query="UPDATE trade SET
	brk='$myt',
	trlog='$myt1',
	trpass='$myt2',
	amv='$myt3'
	WHERE id='$jim'";
	$result=mysql_query($query,$connection);
	if(mysql_affected_rows()==1){
		header("Location:acmandda.php");
		exit;
	}
	else
	{
	$mess="error updating";
	$mess.=mysql_error();	
	}
}
?>
<?php con_login();?>
<?php require_once("includes/cheader2.php");?>
  <style type="text/css">
 #head22c{
	background:#313131;
	 
 }
 </style>
 <div id="jigi">
 <div id="heart">
  <?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<form action="" method="post" name="myafa" id="myafa">
<p>Account Management</p>
<p><input type="text" name="myt" id="myt" placeholder="&nbsp;&nbsp;BROKER NAME" required/></p>
<p><input type="text" name="myt1" id="myt" placeholder="&nbsp;&nbsp;TRADER ACCOUNT NUMBER" required/></p>
<p><input type="password" name="myt2" id="myt" placeholder="&nbsp;&nbsp;TRADER PASSWORD" required/></p>
<p><input type="text" name="myt3" id="myt" placeholder="&nbsp;&nbsp;MINIMUM INVESTMENT" required/></p>
<p><input type="submit" name="myasub" id="myasub" value="Start Now"/></p>
</form>
 </div>
 
 </div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>