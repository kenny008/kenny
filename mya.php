<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_login();?>
<?php
if(isset($_POST['myasub'])){
$jim=$_SESSION['iaakenn'];
$myt=$_POST['myt'];
$myt1=$_POST['myt1'];
$myt2=$_POST['myt2'];
$myt3=$_POST['myt3'];
$go=true;
$query1="SELECT email FROM trade WHERE id!='$jim'";
	$user_set=mysql_query($query1,$connection);
	while($usern=mysql_fetch_array($user_set)){
	if($usern['email']==$myt1)
	{
		$mess="email already exists";
		$go=false;
		
	}
	
	}
	if($go!=false){
if($myt3==NULL){
$query="UPDATE trade SET
fname='$myt',
email='$myt1',
phone='$myt2'
WHERE id='$jim'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Profile Updated Successfully";
}
else{
$mess="Profile Already Updated";	
}
}
else{
	$query="UPDATE trade SET
fname='$myt',
email='$myt1',
phone='$myt2',
password='$myt3'
WHERE id='$jim'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Profile Updated Successfully";
}
else{
$mess="Profile Already Updated";	
}

}
	}
}
?>
<?php require_once("includes/cheader2.php");?>
  <style type="text/css">
 #head22f{
	background:#313131;
	 
 }
 </style>
 <div id="jigi">
 <?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<form action="" method="post" name="myaf" id="myaf">
<p>Edit Profile</p>
<p><input type="text" name="myt" id="myt" placeholder="&nbsp;&nbsp;Edit Your Full Name" value="<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['fname'];	
}
?>"/></p>
<p><input type="text" name="myt1" id="myt" placeholder="&nbsp;&nbsp;Edit Your Email" value="<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['email'];	
}
?>"/></p>
<p><input type="text" name="myt2" id="myt" placeholder="&nbsp;&nbsp;Edit Your Phone Number" value="<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['phone'];	
}
?>"/></p>
<p><input type="password" name="myt3" id="myt" placeholder="&nbsp;&nbsp;Edit Your Password"/></p>
<p><input type="submit" name="myasub" id="myasub" value="Edit Now"/></p>
</form>

 </div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>