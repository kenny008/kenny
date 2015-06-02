<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['lost'])){
	$him=$_GET['hi'];
	$query="UPDATE ebinary SET 
	tresult='LOST'
	WHERE id='$him'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Binary Successfully Lost";
}
}

?>
<?php
if(isset($_POST['won'])){
	$him=$_GET['hi'];
	$query="UPDATE ebinary SET 
	tresult='WON'
	WHERE id='$him'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Binary Successfully Won";
}
}

?>
<?php
if(isset($_POST['del'])){
	$him=$_GET['hi'];
	$query="DELETE FROM ebinary
	WHERE id='$him'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Binary Successfully Removed";
}
}

?>
<?php
if(isset($_POST['go'])){
	$him=$_GET['hi'];
	$query="UPDATE ebinary SET 
	kam='1'
	WHERE id='$him'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Binary Successfully Published";
}
}

?>
<?php require_once("includes/dheadau.php");?>
<div id="headh">
 <style type="text/css">
 #head22c{
background:#313131; 
 }
 </style>
<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<div id="headh11au">
<div id="headh2au">
<p>Expired Binary Signal</p>
</div>
<div id="tzbau">
<p>&nbsp;Asset&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Call/Put&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Result&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lost&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Won&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go</p>

<table id="par2au" name="par2">
<?php 
$query="SELECT * FROM ebinary";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td width=\"61px\" align=\"center\">{$result_set['pair']}</td><td width=\"61px\" align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$result_set['met']}</td><td width=\"61px\" align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$result_set['str']}</td><td width=\"61px\" align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$result_set['stp']}</td><td width=\"61px\" align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$result_set['tresult']}</td>";

echo"<td width=\"61px\" align=\"center\">";
if($result_set['tresult']==NULL){
echo"<form action=\"ebinary.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Lost\" name=\"lost\" id=\"buyy2\" /></form>";
}
else if($result_set['tresult']!=NULL){
echo"<form action=\"ebinary.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Exp\" name=\"stop\" id=\"buyy2\" disabled=\"disabled\"/></form>";
}

echo"</td>";

echo"<td width=\"61px\" align=\"center\">";
if($result_set['tresult']==NULL){
echo"<form action=\"ebinary.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Won\" name=\"won\" id=\"buyy2\" /></form>";
}
else if($result_set['tresult']!=NULL){
echo"<form action=\"ebinary.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Exp\" name=\"stop\" id=\"buyy2\" disabled=\"disabled\"/></form>";
}

echo"</td>";

echo" <td width=\"61px\" align=\"center\">";
if($result_set['tresult']==NULL){
echo"<form action=\"ebinary.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Del\" name=\"del\" id=\"buyy2\" /></form>";
}
else if($result_set['tresult']!=NULL){
echo"<form action=\"ebinary.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Del\" name=\"del\" id=\"buyy2\" /></form>";
}

echo"</td>";

echo" <td width=\"61px\" align=\"center\">";
if($result_set['kam']==0){
echo"<form action=\"ebinary.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Go\" name=\"go\" id=\"buyy2\" /></form>";
}
else if($result_set['kam']==1){
echo"<form action=\"ebinary.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Exp\" name=\"stop\" id=\"buyy2\" disabled=\"disabled\"/></form>";
}

echo"</td>";
echo"</tr>";
}

?>

</table>
</div>
</div>

</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>