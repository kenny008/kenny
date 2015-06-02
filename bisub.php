<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['dnasub'])){
$now=date('Y-m-d');
$dnamy=$_POST['dnamy'];
$pinp=$_POST['pinp'];
$querysl="SELECT * FROM trade WHERE email='$pinp'";
$resultsl=mysql_query($querysl,$connection);
if(mysql_num_rows($resultsl)==1){
	$resultsetsl=mysql_fetch_array($resultsl);
	$buky=$resultsetsl['pem'];
	if($buky=='1'){
$query="UPDATE trade SET
bsta='$now',
bsub='$dnamy'
WHERE email='$pinp'";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
$mess="Binary Signal Successfully Activated";	
}
else{
$mess="error updating";
$mess.=mysql_error();	
}
	}
	else{
		
		$query="UPDATE trade SET
bsta='$now',
pem='1',
bsub='$dnamy'
WHERE email='$pinp'";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
$mess="Binary Signal Successfully Activated";	
}
else{
$mess="error updating";
$mess.=mysql_error();	
}
		
		
	}
}
}

?>
<?php require_once("includes/dhead.php");?>
<div id="headh">
 <style type="text/css">
 #head22f{
background:#313131; 
 }
 </style>
<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>

<div id="trsubq">
<?php 
if(!empty($messa)){
echo"<div id=\"mis\">$messa</div>";	
}
?>
<form action="" method="post" id="will" name="will">
<p><select id="dpinp" name="pinp">
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
<p><input type="date" name="dnamy" id="dnamy" /></p>
<p><input type="submit" name="dnasub" id="dnasub" value="Activate Now"/></p>
</form>
</div>

</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>