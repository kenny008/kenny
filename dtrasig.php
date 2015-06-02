<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>

<?php
if(isset($_POST['buyb'])){
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
else if(isset($_POST['sellb'])){
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
if(isset($_POST['stopb'])){
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




<?php
if(isset($_POST['buy'])){
$pinp=$_POST['pinp'];
$enp=$_POST['enp'];
$sl=$_POST['sl'];
$tp=$_POST['tp'];
$sdkm=$_POST['sd'];
$edakm=$_POST['eda'];
$di="BUY";
$bs=0;
$query="INSERT INTO currency(pair,ep,sl,tp,di,bs,tim,eda) VALUES('{$pinp}','{$enp}','{$sl}','{$tp}','{$di}','{$bs}','{$sdkm}','{$edakm}')";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
$mess="Live Signal Successfully Bought";	
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
$tp=$_POST['tp'];
$sdkm=$_POST['sd'];
$edakm=$_POST['eda'];
$di="SELL";
$bs=1;
$query="INSERT INTO currency(pair,ep,sl,tp,di,bs,tim,eda) VALUES('{$pinp}','{$enp}','{$sl}','{$tp}','{$di}','{$bs}','{$sdkm}','{$edakm}')";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
$mess="Live Signal Successfully Sold";	
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
$query="SELECT * FROM currency where id='$mart'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$resl=mysql_fetch_array($result);
	$mt=$resl['pair'];
	$rpinp=$resl['ep'];
	$renp=$resl['sl'];
	$rsl=$resl['tp'];
	$sdkm=$resl['tim'];
$edakm=$resl['eda'];
$di=$resl['di'];
	$kam="0";
	$ji=$resl['id'];
	
$queryi="INSERT INTO etrade(pair,ep,sl,tp,bs,kam,tim,eda) VALUES('{$mt}','{$rpinp}','{$renp}','{$rsl}','{$di}','{$kam}','{$sdkm}','{$edakm}')";
$rei=mysql_query($queryi,$connection);
if(mysql_affected_rows()==1){
$queryd="DELETE FROM currency WHERE id='$mart'";
$resultd=mysql_query($queryd,$connection);
if(mysql_affected_rows()==1){
	$mess=$mt." Live Trade Converted to Expired ";
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
$mess="error selecting";
$mess.=mysql_error();	
}
}
?>
<?php
if(isset($_POST['start'])){
		$pinp=$_POST['pinp'];
$enp=$_POST['enp'];
$sl=$_POST['sl'];
$query="SELECT * FROM currency where pair='$pinp'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$resl=mysql_fetch_array($result);
	$mt=$resl['pair'];
	$rpinp=$resl['ep'];
	$renp=$resl['sl'];
	$rsl=$resl['tp'];
	$rbs=$resl['bs'];
	$kan="SL Tip";
	
$queryi="INSERT INTO etrade(pair,ep,sl,tp,bs,status) VALUES('{$mt}','{$rpinp}','{$renp}','{$rsl}','{$rbs}','{$kan}')";
$rei=mysql_query($queryi,$connection);
if(mysql_affected_rows()==1){
$queryd="DELETE FROM currency WHERE pair='$pinp'";
$resultd=mysql_query($queryd,$connection);
if(mysql_affected_rows()==1){
	$mess=$pinp." Live Trade Converted to Expired ";
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
$mess="error selecting";
$mess.=mysql_error();	
}
}
?>

<?php require_once("includes/dheadau.php");?>
 <style type="text/css">
 #head22a{
background:#313131; 
 }
 </style>
 <script type="text/javascript">
$(document).ready(function(){
	 $("#hmm2").click(function(){
		$("#kel").hide();
		$("#headh11").hide();
			$("#kelman").show();
			$("#headh11man").show();
	
		
		
		
		
	
		
				   
			
		 
		 
	$("#hmm2").css("background","#fff");
	$("#hmm1").css("background","#e9ecf3");
	});
	});
</script>
<script type="text/javascript">
$(document).ready(function(){
	 $("#hmm1").click(function(){
		 $("#kel").show();
		 $("#headh11").show();
		 	$("#kelman").hide();
			$("#headh11man").hide();
	
		
		 
	
				
		  
		 
	$("#hmm1").css("background","#fff");
	$("#hmm2").css("background","#e9ecf3");
	});
	});
</script>
<div id="headh">
<div id="hmm">
<div id="hmm1">
<p align="center">Trade Signal</p>
</div>
<div id="hmm2">
<p>Binary Signal</p>
</div>
</div>
<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<div id="kel">
<form action="" method="post" name="kelfr" id="kelfr">
<p><input type="text" name="pinp" id="enp"  placeholder="&nbsp;&nbsp;Pair"/>&nbsp;&nbsp;&nbsp;<input type="text" name="sd" id="sl" placeholder="&nbsp;&nbsp;Y-m-d" value="<?php   echo $me=date('Y-m-d');?>"/>&nbsp;&nbsp;&nbsp;<input type="text" name="eda" id="sl" placeholder="&nbsp;&nbsp;Y-m-d" /></p>
<p><input type="text" name="enp" id="enp"  placeholder="&nbsp;&nbsp;Entry Point"/>&nbsp;&nbsp;&nbsp;<input type="text" name="sl" id="sl"  placeholder="&nbsp;&nbsp;SL"/>&nbsp;&nbsp;&nbsp;<input type="text" name="tp" id="tp" placeholder="&nbsp;&nbsp;TP"/></p>
<p><input type="submit"  value="BUY" name="buy" id="buy" />&nbsp;&nbsp;&nbsp;<input type="submit" value="SELL" name="sell" id="sell" /></p>
</form>
</div>
<div id="kelman">
<form action="" method="post" name="kelfr" id="kelfr">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pinp" id="enp"  placeholder="&nbsp;&nbsp;Pair"/>&nbsp;<input type="text" name="sd" id="enp" placeholder="&nbsp;&nbsp; Start Date" value="<?php   echo $me=date('Y-m-d');?>"/></p>
<p><input type="text" name="enp" id="enp"  placeholder="&nbsp;&nbsp;Start Time"/><input type="text" name="eda" id="enp" placeholder="&nbsp;&nbsp; End Date" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sl" id="sl"  placeholder="&nbsp;&nbsp;End Time"/></p>
<p><input type="submit"  value="BUY" name="buyb" id="buy" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="SELL" name="sellb" id="sell" /></p>
</form>
</div>
<div id="headh11">
<div id="headh2">
<p>Live Trade Signal</p>
</div>
<div id="tzb">
<p>&nbsp;Pair&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Direction&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entry&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Date&nbsp;&nbsp;&nbsp;&nbsp;Buying/Selling</p>
<table id="par2" name="par2">
<?php 
$query="SELECT * FROM currency";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td align=\"center\">{$result_set['pair']}</td><td width=\"78px\" align=\"center\">{$result_set['di']}</td><td align=\"center\">{$result_set['ep']}</td><td align=\"center\">{$result_set['sl']}</td><td align=\"center\">{$result_set['tp']}</td>";
echo"<td align=\"center\">&nbsp;&nbsp;&nbsp;{$result_set['tim']}</td>";
echo"<td align=\"center\">&nbsp;&nbsp;&nbsp;{$result_set['eda']}</td>";
echo"<td align=\"center\">";

if($result_set['bs']==0){
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"images/arrow_up.png\" width=\"15\" height=\"15\" />";
	
}
else if($result_set['bs']==1){
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"images/Stock Index Down.png\" width=\"15\" height=\"15\" />";
}
echo"</td> <td align=\"center\"><form action=\"dtrasig.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"STOP\" name=\"stop\" id=\"buy\" /></form></td>";

echo"</tr>";
}

?>


</table>
</div>
</div>



<div id="headh11man">
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
echo"<td align=\"center\"><form action=\"dtrasig.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"STOP\" name=\"stopb\" id=\"buy\" /></form></td>";
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