<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php
if(isset($_POST['dnasub'])){
	$dnamy1=$_POST['dnamy1'];
	$dnamy2=$_POST['dnamy2'];
	$dia=$_POST['dia'];
	$way=$_SESSION['dq'];
$way2=$_SESSION['dq2'];
$dater=$way2.'-'.$way.'-1';
if($dia=='f'){
$query="INSERT INTO perf(docl,phit,psl,bf) VALUES('{$dater}','{$dnamy1}','{$dnamy2}','{$dia}')";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$messa="Data Inserted Successfully";
}
else{
$messa="error inserting data";
$messa.=mysql_error();	
	
}

}

else if($dia=='b'){
	$query="INSERT INTO perf(docl,phit,psl,bf) VALUES('{$dater}','{$dnamy1}','{$dnamy2}','{$dia}')";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$messa="Data Inserted Successfully";
}
else{
$messa="error inserting data";
$messa.=mysql_error();	
	
}

}
}

?>
<?php require_once("includes/dhead.php");?>
<div id="headh">
 <style type="text/css">
 #head22yu{
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
<p><font size="+2" color="#ca2722"><?php   
$dear=$_SESSION['dq'];
$dear2=$_SESSION['dq2'];
$d=$dear.'/1'.'/'.$dear2;
$re=date ('F Y', strtotime($d));
echo $re;
?>&nbsp;Perfomance Update</font></p>
<p><input type="text" name="dnamy1" id="dnamy" placeholder="&nbsp;&nbsp;Hit Tp Pips" required/></p>
<p><input type="text" name="dnamy2" id="dnamy" placeholder="&nbsp;&nbsp;Hit Sl Pips" required/></p>
<p><input type="radio" id="dia" name="dia" value="f" checked="checked"/>Forex Signal&nbsp;&nbsp;<input type="radio" id="dia" name="dia" value="b"/>Binary Signal</p>
<p><input type="submit" name="dnasub" id="dnasub" value="Update Now"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="nobody.php">Back</a></p>
</form>
</div>

</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>