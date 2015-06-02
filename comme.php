<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php
if(isset($_POST['syfi'])){
$str=$_POST['str'];
$stp=$_POST['stp'];
$query="INSERT INTO comment(comm,fname) VALUES('{$stp}','{$str}')";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Comment Inserted Successfully";
}
else{
$mess="error inserting";
$mess.=mysql_error();	
}
}

?>
<?php
if(isset($_POST['syf2'])){
$dll=$_POST['dll'];
$query="DELETE FROM comment WHERE id='$dll'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Comment Removed Successfully";
}
else{
$mess="error deleting";
$mess.=mysql_error();	
}
	
}

?>
<?php require_once("includes/dhead.php");?>
<div id="headh">
 <style type="text/css">
 #head22n{
background:#313131; 
 }
 </style>
<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>

<form action="" method="post" name="ebi" id="ebi">
<p>Comment</p>
<p><input type="text" name="str" id="met" placeholder="&nbsp;&nbsp;FullName"/></p>
<p><textarea cols="45" rows="10" name="stp" id="mets" plceholder="&nbsp;&nbsp;Enter your"></textarea></p>
<p><input type="submit" name="syfi" id="byfi"  value="Enter"/></p>
</form>

<form action="" method="post" name="ebi" id="ebi">
<p>&nbsp;&nbsp;</p>
<p><select id="met" name="dll">
<?php
$query="SELECT * from comment";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<option value=\"{$result_set['id']}\">";	
echo"{$result_set['fname']}";
echo"</option>";
	
}

?>
</select></p>
<p><input type="submit" name="syf2" id="byfi"  value="Delete"/></p>
</form>



</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>