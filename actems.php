<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php
if(isset($_POST['syfi'])){
$dll=$_POST['dll'];
$query="UPDATE trade SET 
insta='ACTIVE'
WHERE email='$dll'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Investement activated";
}
else{
$mess="user already activated";	
}
}

?>
<?php
if(isset($_POST['syfi2'])){
$dll=$_POST['dll'];
$query="UPDATE trade SET 
insta='NON ACTIVE'
WHERE email='$dll'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Investement deactivated";
}
else{
$mess="error inserting";
$mess.=mysql_error();	
}
}

?>
<?php
if(isset($_POST['syfi22'])){
$dll=$_POST['dll'];
$query="UPDATE trade SET 
status='ACTIVE'
WHERE email='$dll'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Account Management activated";
}
else{
$mess="user already activated";	
}
}

?>
<?php
if(isset($_POST['syfi222'])){
$dll=$_POST['dll'];
$query="UPDATE trade SET 
status='NON ACTIVE'
WHERE email='$dll'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Account Management deactivated";
}
else{
$mess="error inserting";
$mess.=mysql_error();	
}
}

?>
<?php
if(isset($_POST['same'])){
$same1=$_POST['same1'];
header("Location:actems.php?all=$same1");
exit;	
}
?>
<?php require_once("includes/dhead.php");?>
 <style type="text/css">
 #head22{
background:#313131; 
 }
 </style>
<div id="headh">

<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>

<form action="" method="post" name="ebi" id="ebi">
<p>Investment Activation</p>
<p><select id="met" name="dll">
<?php
$query="SELECT * from trade";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<option value=\"{$result_set['email']}\">";	
echo"{$result_set['email']}";
echo"</option>";
	
}

?>
</select></p>
<p><input type="submit" name="syfi" id="byfi"  value="Activate"/>&nbsp;&nbsp;<input type="submit" name="syfi2" id="byfi2"  value="Deactivate"/></p>
</form>
<form action="" method="post" id="same2" name="same2">
<input type="text" name="same1" id="same1" placeholder="&nbsp;&nbsp;Email or Full Name" required/>&nbsp;&nbsp;<input type="submit" name="same" id="same" value="Search"/>
</form>
<table width="750px" id="wend" name="wend">
<tr bgcolor="#ca2722"><td align="center"><font color="#fff">Full Name</font></td><td align="center"><font color="#fff">Email</font></td><td align="center"><font color="#fff">Phone</font></td><td align="center"><font color="#fff">Account Activated</font></td></tr>
<?php 
$al=$_GET['all'];
$query="SELECT * FROM trade WHERE conf='2' AND email='$al' or fname LIKE '%".$al."%' AND insta='ACTIVE'";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td align=\"center\">{$result_set['fname']}</td>";
echo"<td align=\"center\">{$result_set['email']}</td>";
echo"<td align=\"center\">{$result_set['phone']}</td>";
echo"<td align=\"center\">{$result_set['insta']}</td>";
echo"</tr>";
}

?>
</table>





</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>