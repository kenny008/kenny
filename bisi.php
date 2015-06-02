<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['buy'])){
$pinp=$_POST['pinp'];
$enp=$_POST['enp'];
$sl=$_POST['sl'];
$sdkm=$_POST['sd'];
$edakm=$_POST['eda'];
$di="CALL(BUY)";
$query="INSERT INTO bcurrency(pair,str,stp,met,tim,eda) VALUES('{$pinp}','{$enp}','{$sl}','{$di}','{$sdkm}','{$edakm}')";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
$mess="Binary Signal Successfully Bought";	
}
else{
	$mess="error updating";
	$mess.=mysql_error();
}
}
else if(isset($_POST['sell'])){
$pinp=$_POST['pinp'];
$enp=$_POST['enp'];
$sl=$_POST['sl'];
$sdkm=$_POST['sd'];
$edakm=$_POST['eda'];
$di="PUT(SELL)";
$query="INSERT INTO bcurrency(pair,str,stp,met,tim,eda) VALUES('{$pinp}','{$enp}','{$sl}','{$di}','{$sdkm}','{$edakm}')";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
$mess="Binary Signal Successfully Sold";	
}
else{
	$mess="error updating";
	$mess.=mysql_error();
}
}

?>
<?php
if(isset($_POST['stop'])){
$mart=$_GET['hi'];
$query="SELECT * FROM bcurrency where id='$mart'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$resl=mysql_fetch_array($result);
	$mt=$resl['met'];
	$rpinp=$resl['pair'];
	$renp=$resl['str'];
	$rsl=$resl['stp'];
	$sdkm=$resl['tim'];
$edakm=$resl['eda'];
$kam="0";
$queryi="INSERT INTO ebinary(met,pair,str,stp,kam,tim,eda) VALUES('{$mt}','{$rpinp}','{$renp}','{$rsl}','{$kam}','{$sdkm}','{$edakm}')";
$rei=mysql_query($queryi,$connection);
	
	if(mysql_affected_rows()==1){
$queryd="DELETE FROM bcurrency WHERE id='$mart'";
$resultd=mysql_query($queryd,$connection);
if(mysql_affected_rows()==1){
	$mess=$rpinp." Binary Trade Converted to Expired ";
}
else{
$mess="Error Removing user";
$mess.=mysql_error();	
}
}
else{
$mess="error inserting";
$mess.=mysql_error();	
}
}
else{
$mess="Error Selecting";
$mess.=mysql_error();	
}
}

?>
<?php require_once("includes/dheadau.php");?>
<div id="headh">
 <style type="text/css">
 #head22b{
background:#313131; 
 }
 </style>
<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<div id="kel">
<form action="" method="post" name="kelfr" id="kelfr">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pinp" id="enp"  placeholder="&nbsp;&nbsp;Pair"/>&nbsp;<input type="text" name="sd" id="enp" placeholder="&nbsp;&nbsp; Start Date" value="<?php   echo $me=date('Y-m-d');?>"/></p>
<p><input type="text" name="enp" id="enp"  placeholder="&nbsp;&nbsp;Start Time"/><input type="text" name="eda" id="enp" placeholder="&nbsp;&nbsp; End Date" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sl" id="sl"  placeholder="&nbsp;&nbsp;End Time"/></p>
<p><input type="submit"  value="BUY" name="buy" id="buy" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="SELL" name="sell" id="sell" /></p>
</form>
</div>
<div id="headh11">
<div id="headh2">
<p>Live Binary Signal</p>
</div>
<div id="tzb">
<p>&nbsp;Asset&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Call/Put&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Time&nbsp;&nbsp;End Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Date</p>
<table id="par2" name="par2">
<?php 
$query="SELECT * FROM bcurrency";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td align=\"center\">{$result_set['pair']}</td><td align=\"center\">{$result_set['met']}</td><td align=\"center\">{$result_set['str']}</td><td align=\"center\">{$result_set['stp']}</td>";
echo"<td align=\"center\">&nbsp;&nbsp;&nbsp;{$result_set['tim']}</td>";
echo"<td align=\"center\">&nbsp;&nbsp;&nbsp;{$result_set['eda']}</td>";
echo"<td align=\"center\"><form action=\"bisi.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"STOP\" name=\"stop\" id=\"buy\" /></form></td>";
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