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
if(isset($_POST['biag'])){
header("Location:acmand.php");
exit;	
}
?>
<?php con_login();?>
<?php require_once("includes/headacm.php");?>
  <style type="text/css">
 #head22c{
	background:#313131;
	 
 }
 </style>
 <div id="jigi">
 <div id="heartt">
 <p align="center"><b>Meggaprofits Account Management Terms and Conditions</b><br /><br /><font size="-1"><b>Please read this Terms and Condition carefully to understand the potential benefits and risks associated with investing with us.</b></font></p>
 <br />
 <div id="agree">
<textarea cols="115" rows="30" name="woju1" id="woju" disabled="disabled"><?php    
$query="SELECT * FROM fire";
$rt=mysql_query($query,$connection);
if(mysql_num_rows($rt)>=1){
	$rt2=mysql_fetch_array($rt);
	$me=$rt2['love'];
	echo $me;
}

?></textarea>
</div>
<form action="" method="post" name="fiag" id="fiag">
<p><input type="checkbox" name="iag" id="iag" required/>&nbsp;I AGREE</p>
<p align="center"><input type="submit" name="biag" id="biag" value="Continue"/></p>
</form>
 </div>
 
 </div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>