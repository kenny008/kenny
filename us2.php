<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php
if(isset($_POST['jemsub'])){
$kan=$_GET['lam'];
$query="UPDATE withd SET
pen='Approved' WHERE id='$kan'";
$re=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
$mess="Withdraw Approved Successfully";	
}
else{
$mess="error updating";
$mess.=mysql_error();	
	
}
}
?>
<?php
if(isset($_POST['jemsub2'])){
$kan=$_GET['lam'];
$query="DELETE FROM cont WHERE id='$kan'";
$rl=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	header("Location:adminpage.php");
	exit;
}
else{
$mess="error deleting from withdraw";
$mess.=mysql_error();	
}
}
?>
<?php require("includes/dhead.php");?>
 <style type="text/css">
 #head22q{
background:#313131; 
 }
 </style>
<div id="headh">

<div id="sant">
 <?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<p><font color="#ca2722" size="+2">Contact Us</font></p>
<p><b>Full Name</b>: <?php 
   $wor=$_GET['lam'];
$query="SELECT * FROM cont WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$me=$resset['fname'];
echo  $me;	
}
?><br /><br /><b>Email</b>: <?php 
   $wor=$_GET['lam'];
$query="SELECT * FROM cont WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$me=$resset['email'];
echo  $me;	
}
?><br /><br />
<b>Phone</b>: <?php 
   $wor=$_GET['lam'];
$query="SELECT * FROM cont WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$me=$resset['phone'];
echo  $me;	
}
?><br /><br />
<b>Address</b>: <?php 
   $wor=$_GET['lam'];
$query="SELECT * FROM cont WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$me=$resset['address'];
echo  $me;	
}
?><br /><br />
<b>Message</b>: <?php 
   $wor=$_GET['lam'];
$query="SELECT * FROM cont WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$me=$resset['mesn'];
echo  $me;	
}
?><br /><br />
<form action="" method="post" name="jemil" id="jemil">



<p><input type="submit" name="jemsub2" id="jemsub" value="Delete"/></p>
</form>
</p>
</div>

</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>