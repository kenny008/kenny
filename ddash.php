<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php require_once("includes/dhead.php");?>
<div id="headh">
 <style type="text/css">
 #head22q{
background:#313131; 
 }
 </style>
<div id="sant">
<p><b>Full Name</b>: <?php 
   $wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$me=$resset['fname'];
echo  $me;	
}
?><br /><br /><b>Email</b>: <?php 
   $wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$me=$resset['email'];
echo  $me;	
}
?><br /><br />
<b>Phone</b>: <?php 
   $wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$me=$resset['phone'];
echo  $me;	
}
?><br /><br />
<?php     
$wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$mea=$resset['fsignal'];
if($mea!=NULL){?>
<b>Trade Signal</b>: <?php 
  
echo  $mea;	
?><br /><br />
<?php   }}?>
<?php     
$wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$meas=$resset['asignal'];
if($meas!=NULL){?>
<b>Account Management Signal</b>: <?php 
  
echo  $meas;	
?><br /><br />
<?php   }}?>

<?php     
$wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$brk=$resset['brk'];
if($brk!=NULL){?>
<b>Broker</b>: <?php 
  
echo  $brk;	
?><br /><br />
<?php   }}?>

<?php     
$wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$trlog=$resset['trlog'];
if($trlog!=NULL){?>
<b>Trade Login</b>: <?php 
  
echo  $trlog;	
?><br /><br />
<?php   }}?>

<?php     
$wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$sdm=$resset['sdm'];
if($sdm!=NULL){?>
<b>Signal Delivery</b>: <?php 
  
echo  $sdm;	
?><br /><br />
<?php   }}?>

<?php     
$wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$mtv=$resset['mtv'];
if($mtv!=NULL){?>
<b>Signal Delivery Method</b>: <?php 
  
echo  $mtv;	
?><br /><br />
<?php   }}?>
</p>
</div>

</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>