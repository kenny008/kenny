<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php
if(isset($_POST['gege'])){
	$worry=$_GET['las'];
$fool=$_POST['fool'];
$fool1=$_POST['fool1'];
$fool2=$_POST['fool2'];	
$fool3=$_POST['fool3'];
$fool4=$_POST['fool4'];
$fool5=$_POST['fool5'];
$fool6=$_POST['fool6'];
$fool7=$_POST['fool7'];
$query="UPDATE trade SET
fname='$fool',
email='$fool1',
phone='$fool2',
asignal='$fool3',
brk='$fool4',
trlog='$fool5',
amv='$fool6',
trpass='$fool7'
WHERE id='$worry'";
$rex=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
$mess="User Information Updated Successfully";	
}
else{
$mess="error updating user info ";
$mess.=mysql_error();	
}


}
?>
<?php
if(isset($_POST['gege2'])){
$worry=$_GET['las'];
$query="DELETE FROM trade WHERE id='{$worry}'";
$rem=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="User Removed Successfully";
	header("Location:adminpage.php");
	exit;
}
else{
$mess="error removing user";
$mess.=mysql_error();	
}
}

?>
<?php require_once("includes/dhead.php");?>
 <style type="text/css">
 #head22q{
background:#313131; 
 }
 </style>
<div id="headh">
  <?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<div id="sant">
<form action="" method="post">
<p><b>Full Name</b>:<input type="text" name="fool" id="met" value="<?php 
   $wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$me=$resset['fname'];
echo  $me;	
}
?>" /><br /><br /><b>Email</b>: <input type="text" name="fool1" id="met" value="<?php 
   $wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$me=$resset['email'];
echo  $me;	
}
?>" /><br /><br />
<b>Phone</b>: <input type="text" name="fool2" id="met" value="<?php 
   $wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$me=$resset['phone'];
echo  $me;	
}
?>" /><br /><br />
<?php     
$wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$meas=$resset['asignal'];
?>
<b>Account Management Signal</b>: <input type="text" name="fool3" id="met" value="<?php 
  
echo  $meas;	
?>" /><br /><br />
<?php   }?>

<?php     
$wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$brk=$resset['brk'];
?>
<b>Broker</b>: <input type="text" name="fool4" id="met" value="<?php 
  
echo  $brk;	
?>" /><br /><br />
<?php   }?>

<?php     
$wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$trlog=$resset['trlog'];
?>
<b>Trader Login</b>: <input type="text" name="fool5" id="met" value="<?php 
  
echo  $trlog;	
?>" /><br /><br />
<?php   }?>

<?php     
$wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$amv=$resset['amv'];
?>
<b>Minimum Investment</b>: <input type="text" name="fool6" id="met" value="<?php 
  
echo  $amv;	
?>" /><br /><br />
<?php   }?>
<?php     
$wor=$_GET['las'];
$query="SELECT * FROM trade WHERE id='$wor'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
$trpass=$resset['trpass'];
?>
<b>Trader Password</b>: <input type="text" name="fool7" id="met" value="<?php 
  
echo  $trpass;	
?>" /><br /><br />
<?php   }?>

</p>
<p><input type="submit" name="gege" id="gege" value="Update"/>&nbsp;&nbsp;&nbsp;<input type="submit" name="gege2" id="gege"  value="Delete"/></p>
</form>
</div>

</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>