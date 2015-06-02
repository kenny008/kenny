<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_login();?>
<?php require_once("includes/cheader.php");?>
<script type="text/javascript">
$(document).ready(function(){
	 $("#hmm2").click(function(){
		 $("#headh11").hide();
		 $("#sli").show();
		 $("#headh1a").show();
		 $("#headh1").hide();
		 $("#headh11a").show();
		  $("#ovh1").hide();
		  $("#ovh2").show();
		  $("#ovh3").hide();
		    $("#ovh4").show();
			   $("#headh1g").hide();
			    $("#headh1am").show();
				 $("#ovh5").hide();
				  $("#ovh6").show();
				  $("#ntsub").hide();
				   $("#ntsub2").show();
				   
			
		 
		 
	$("#hmm2").css("background","#fff");
	$("#hmm1").css("background","#e9ecf3");
	});
	});
</script>
<script type="text/javascript">
$(document).ready(function(){
	 $("#hmm1").click(function(){
		 $("#headh11").show();
		 $("#sli").show();
		  $("#headh11a").hide();
		  $("#headh1a").hide();
		  $("#headh1").show();
		  $("#ovh1").show();
		  $("#ovh2").hide();
		  $("#ovh3").show();
		    $("#ovh4").hide();
			  $("#headh1g").show();
			   $("#headh1am").hide();
			   $("#ovh5").show();
			   $("#ovh6").hide();
			   $("#ntsub").show();
			    $("#ntsub2").hide();
				
		  
		 
	$("#hmm1").css("background","#fff");
	$("#hmm2").css("background","#e9ecf3");
	});
	});
</script>
  <style type="text/css">
 #head22b{
	background:#313131;
	 
 }
 </style>
<div id="headh">
<div id="hmm">
<div id="hmm1">
<p align="center">Forex Signals</p>
</div>
<div id="hmm2">
<p>Binary Signals</p>
</div>
</div>
<div id="headh1a">
<div id="headh2">
<p>Expired Binary Signal</p>
</div>
<p>&nbsp;&nbsp;&nbsp;Asset&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Call/Put&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stop Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Result&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Date</p>
<table id="par2" name="par2">
<?php 
$query="SELECT * FROM ebinary WHERE kam=1 ORDER BY id DESC LIMIT 8";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td align=\"center\">{$result_set['pair']}</td><td align=\"center\">{$result_set['met']}</td><td align=\"center\">{$result_set['str']}</td><td align=\"center\">{$result_set['str']}</td><td align=\"center\">{$result_set['tresult']}</td>";
echo"<td align=\"center\">{$result_set['tim']}</td>";
echo"<td align=\"center\">{$result_set['eda']}</td>";
echo"</tr>";
}

?>
</table>

</div>

<?php
$hey=$_SESSION['iaakenn'];
$now=time();

$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
$fsu=$resset['bsub'];
$your_date=strtotime($fsu);
$datediff=$your_date-$now;
$ken=floor($datediff/(60*60*24));
if($ken<0){
?>

<div id="headh1am">
<div id="headh2">
<p>Live Binary Signal</p>
</div>
<p>&nbsp;&nbsp;&nbsp;Asset&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Call/Put&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stop Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Date</p>
<table id="par2" name="par2">
<?php 
$query="SELECT * FROM bcurrency LIMIT 3";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td align=\"center\">{$result_set['pair']}</td><td align=\"center\"><font color=\"#666\" size=\"-2\">NOT ACTIVE</font></td><td align=\"center\"><font color=\"#666\" size=\"-2\">NOT ACTIVE</font></td><td align=\"center\"><font color=\"#666\" size=\"-2\">NOT ACTIVE</font></td>";
echo"<td align=\"center\"><font color=\"#666\" size=\"-2\">NOT ACTIVE</font></td>";
echo"<td align=\"center\"><font color=\"#666\" size=\"-2\">NOT ACTIVE</font></td>";
echo"</tr>";
}

?>
</table>

</div>

<?php
}
}
?>
<div id="headh1">
<div id="headh2">
<p>Expired Forex Signal</p>
</div>
<p>&nbsp;&nbsp;&nbsp;Pair&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Directiion&nbsp;&nbsp;&nbsp;&nbsp;Entry Point&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Date</p>
<table id="par2" name="par2">

<?php 
$query="SELECT * FROM etrade WHERE kam='1' ORDER BY id DESC LIMIT 8";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td align=\"center\">{$result_set['pair']}</td><td align=\"center\">{$result_set['bs']}</td><td align=\"center\" width=\"70px\">{$result_set['ep']}</td><td align=\"center\" width=\"70px\">{$result_set['sl']}</td><td align=\"center\" width=\"80px\">{$result_set['tp']}</td><td align=\"center\">";

echo"{$result_set['status']}";
echo"</td>";
echo"<td align=\"center\">{$result_set['tim']}</td>";
echo"<td align=\"center\">{$result_set['eda']}</td>";
echo"</tr>";
}

?>
</table>

</div>
<?php
$hey=$_SESSION['iaakenn'];
$now=time();

$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
$fsu=$resset['fsub'];
$your_date=strtotime($fsu);
$datediff=$your_date-$now;
$ken=floor($datediff/(60*60*24));
if($ken<0){
?>
<div id="headh1g">
<div id="headh2">
<p>Live Forex Signal</p>
</div>
<p>Pair&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Directiion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entry Point&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buying/Selling&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Date</p>
<table id="par2" name="par2">

<?php 
$query="SELECT * FROM currency LIMIT 3";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td align=\"center\">{$result_set['pair']}</td><td align=\"center\"><font color=\"#666\" size=\"-2\">NOT ACTIVE</font></td><td align=\"center\"><font color=\"#666\" size=\"-2\">NOT ACTIVE</font></td><td align=\"center\"><font color=\"#666\" size=\"-2\">NOT ACTIVE</font></td><td align=\"center\"><font color=\"#666\" size=\"-2\">NOT ACTIVE</font></td><td align=\"center\">";

echo"<font color=\"#666\" size=\"-2\">NOT ACTIVE</font>";
echo"</td>";
echo"<td align=\"center\"><font color=\"#666\" size=\"-2\">NOT ACTIVE</font></td>";
echo"<td align=\"center\"><font color=\"#666\" size=\"-2\">NOT ACTIVE</font></td>";
echo"</tr>";
}

?>
</table>

</div>

<?php
}
}
?>
<?php
$hey=$_SESSION['iaakenn'];
$now=time();

$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
$fsu=$resset['fsub'];
$your_date=strtotime($fsu);
$datediff=$your_date-$now;
$ken=floor($datediff/(60*60*24));
if($ken>=0){
?>
<div id="headh11">

<div id="headh2">
<p>Live Forex Signal</p>
</div>
<div id="tzb">
<p>&nbsp;&nbsp;&nbsp;Pair&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Directiion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entry Point&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buying/Selling&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Date</p>

<table id="par2" name="par2">

<?php 
$query="SELECT * FROM currency";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td align=\"center\">{$result_set['pair']}</td><td align=\"center\">{$result_set['di']}</td><td align=\"center\" width=\"70px\">{$result_set['ep']}</td><td align=\"center\" width=\"70px\">{$result_set['sl']}</td><td align=\"center\" width=\"70px\">{$result_set['tp']}</td><td align=\"center\" width=\"70px\">";

if($result_set['bs']==0){
echo"<img src=\"images/arrow_up.png\" width=\"15\" height=\"15\" />";
	
}
else if($result_set['bs']==1){
echo"<img src=\"images/Stock Index Down.png\" width=\"15\" height=\"15\" />";
}
echo"</td>";
echo"<td align=\"center\">{$result_set['tim']}</td>";
echo"<td align=\"center\">{$result_set['eda']}</td>";
echo"</tr>";
}

?>

</table>
</div>
</div>

<?php
}
}
?>
<?php
$hey=$_SESSION['iaakenn'];
$now=time();

$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
$fsu=$resset['bsub'];
$your_date=strtotime($fsu);
$datediff=$your_date-$now;
$ken=floor($datediff/(60*60*24));
if($ken>=0){
?>

<div id="headh11a">

<div id="headh2">
<p>Live Binary Signal</p>
</div>
<div id="tzb">
<p>&nbsp;&nbsp;&nbsp;Asset&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Call/Put&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stop Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Date</p>

<table id="par2" name="par2">

<?php 
$query="SELECT * FROM bcurrency";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td align=\"center\">{$result_set['pair']}</td><td align=\"center\">{$result_set['met']}</td><td align=\"center\">{$result_set['str']}</td><td align=\"center\">{$result_set['stp']}</td>";
echo"<td align=\"center\">{$result_set['tim']}</td>";
echo"<td align=\"center\">{$result_set['eda']}</td>";
echo"</tr>";
}

?>

</table>
</div>
</div>

<?php
}
}
?>
<div id="sli">
</div>
</div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>