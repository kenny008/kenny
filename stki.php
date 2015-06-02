<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php
if(isset($_POST['syf2'])){
	$dd=date('Y-m-d');
	$dll=$_POST['dll'];

	$query="SELECT * FROM trade
	WHERE email='$dll'";
	$res=mysql_query($query,$connection);
	if(mysql_num_rows($res)==1){
		$st=mysql_fetch_array($res);
		$wum=$st['id'];
		header("Location:stkij.php?c={$wum}");
		exit;
	}
	else{
	$mess="error selecting information";
	$mess.=mysql_error();	
	}
}
?>
<?php require_once("includes/dhead.php");?>
<div id="headh">
 <style type="text/css">
 #head22q{
background:#313131; 
 }
 </style>
<div id="sant">
<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<form action="" method="post" name="ebi" id="ebi">
<p><font size="+2" color="#ca2722">Trade Signals Statistics</font></p>
<p><select id="met" name="dll">
<?php
$me=NULL;
$query="SELECT * from trade WHERE asignal='$me'";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<option value=\"{$result_set['email']}\">";	
echo"{$result_set['email']}";
echo"</option>";
	
}

?>
</select></p>
<p><input type="submit" name="syf2" id="byfi"  value="Select"/></p>
</form>

</div>
<a href="#" title="kdkd">
</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>