<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php
if(isset($_POST['syf2'])){
	$dd=date('Y-m-d');
	$str=$_POST['str'];
	$str2=$_POST['str2'];
	$str3=$_POST['str3'];
	$str4=$_POST['str4'];
	$heya=$_GET['c'];
	$query="UPDATE trade SET
	up='$str',
	ac='$str2',
	td='$str3',
	tw='$str4'
	WHERE id='$heya'";
	$res=mysql_query($query,$connection);
	if(mysql_affected_rows()==1){
		$mess="Trade signals statistics updated Successfully";
	}
	else{
	$mess="error updating information";
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

<div id="sant">
<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<form action="" method="post" name="ebi" id="ebi">
<p><font size="+2" color="#ca2722">Trade Signals Statistics</font></p>
<p><?php   $hey=$_GET['c'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['fname']."'s"." Statistics Details";	
}?></p>
<p><input type="text" name="str" id="met" placeholder="&nbsp;&nbsp;Percentage" value="<?php   $hey=$_GET['c'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['up'];	
}?>"/></p>
<p><input type="text" name="str2" id="met" placeholder="&nbsp;&nbsp;Active Investment" value="<?php   $hey=$_GET['c'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['ac'];	
}?>"/></p>
<p><input type="text" name="str3" id="met" placeholder="&nbsp;&nbsp;Total Deposited" value="<?php   $hey=$_GET['c'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['td'];	
}?>"/></p>
<p><input type="text" name="str4" id="met" placeholder="&nbsp;&nbsp;Total Withdraw" value="<?php   $hey=$_GET['c'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['tw'];	
}?>"/></p>
<p><input type="submit" name="syf2" id="byfi"  value="Update"/></p>
</form>

</div>
<a href="#" title="kdkd">
</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>