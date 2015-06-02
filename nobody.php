<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php
if(isset($_POST['dnasub'])){
$dnamy=$_POST['dnamy'];
$dnamy2=$_POST['dnamy2'];
$_SESSION['dq']=$dnamy;
$_SESSION['dq2']=$dnamy2;
header("Location:nobody2.php");
exit;

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
<p><font size="+2" color="#ca2722">Perfomance Update</font></p>
<p><input type="text" name="dnamy" id="under" placeholder="&nbsp;&nbsp;Month"/>&nbsp;&nbsp;<input type="text" name="dnamy2" id="under2" placeholder="&nbsp;&nbsp;Year"/></p>
<p><input type="submit" name="dnasub" id="judg" value="SELECT"/></p>
</form>
</div>

</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>