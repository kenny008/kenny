<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php
if(isset($_POST['lostb'])){
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
if(isset($_POST['wonb'])){
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
if(isset($_POST['delb'])){
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
if(isset($_POST['gob'])){
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







<?php
if(isset($_POST['lost'])){
	$him=$_GET['hi'];
	$query="UPDATE etrade SET 
	status='SL Hit'
	WHERE id='$him'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Trade Successfully Lost";
}
}

?>
<?php
if(isset($_POST['won'])){
	$him=$_GET['hi'];
	$query="UPDATE etrade SET 
	status='TP Hit'
	WHERE id='$him'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Trade Successfully Won";
}
}

?>
<?php
if(isset($_POST['del'])){
	$him=$_GET['hi'];
	$query="DELETE FROM etrade
	WHERE id='$him'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Trade Successfully Removed";
}
}

?>
<?php
if(isset($_POST['go'])){
	$him=$_GET['hi'];
	$query="UPDATE etrade SET 
	kam='1'
	WHERE id='$him'";
$res=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	$mess="Trade Successfully Published";
}
}

?>
<?php require_once("includes/dheadau.php");?>
 <style type="text/css">
 #head22d{
background:#313131; 
 }
 </style>
 <script type="text/javascript">
$(document).ready(function(){
	 $("#hmm2").click(function(){
		$("#headh11au").hide();
		$("#headh11auto").show();
	
		
		
		
		
		
		
	
		
				   
			
		 
		 
	$("#hmm2").css("background","#fff");
	$("#hmm1").css("background","#e9ecf3");
	});
	});
</script>
<script type="text/javascript">
$(document).ready(function(){
	 $("#hmm1").click(function(){
			$("#headh11au").show();
			$("#headh11auto").hide();
		
		
		 
	
		
		 
	
				
		  
		 
	$("#hmm1").css("background","#fff");
	$("#hmm2").css("background","#e9ecf3");
	});
	});
</script>
<div id="headh">
<div id="hmm">
<div id="hmm1">
<p align="center">Expired Trade Signal</p>
</div>
<div id="hmm2">
<p>Expired Binary Signal</p>
</div>
</div>
<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>

<div id="headh11au">
<div id="headh2au">
<p>Expired Trade Signal</p>
</div>
<div id="tzbau">
<p>Pair&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Direction&nbsp;&nbsp;Entry Point&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sl&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TP&nbsp;&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lost&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Won&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go</p>

<table id="par2au" name="par2">

<?php 
$query="SELECT * FROM etrade ORDER BY id DESC";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td width=\"55px\" align=\"center\">{$result_set['pair']}</td><td width=\"55px\" align=\"center\">{$result_set['bs']}</td><td width=\"55px\" align=\"center\">{$result_set['ep']}</td><td width=\"55px\" align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$result_set['sl']}</td><td width=\"55px\" align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$result_set['tp']}</td></td> <td width=\"55px\" align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;{$result_set['status']}</td><td width=\"55px\" align=\"center\">";

if($result_set['status']==NULL){
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Lost\" name=\"lost\" id=\"buyy\" /></form>";
	
}
else if($result_set['status']!=NULL){
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Exp\" name=\"stop\" id=\"buyy\" disabled=\"disabled\"/></form>";
}
echo"</td> <td width=\"55px\" align=\"center\">";
if($result_set['status']==NULL){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Won\" name=\"won\" id=\"buyy2\" /></form>";
}
else if($result_set['status']!=NULL){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Exp\" name=\"stop\" id=\"buyy2\" disabled=\"disabled\"/></form>";
}

echo"</td>";
echo"</td> <td width=\"55px\" align=\"center\">";
if($result_set['kam']==0){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Del\" name=\"del\" id=\"buyy2\" /></form>";
}
else if($result_set['kam']==1){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Del\" name=\"del\" id=\"buyy2\"/></form>";
}

echo"</td>";
echo"</td> <td width=\"55px\" align=\"center\">";
if($result_set['kam']==0){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Go\" name=\"go\" id=\"buyy2\" /></form>";
}
else if($result_set['kam']==1){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Exp\" name=\"stop\" id=\"buyy2\" disabled=\"disabled\"/></form>";
}

echo"</td>";

echo"</tr>";
}

?>


</table>
</div>
</div>



<div id="headh11auto">
<div id="headh2au">
<p>Expired Binary Signal</p>
</div>
<div id="tzbau">
<p>&nbsp;Asset&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Call/Put&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Result&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lost&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Won&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go</p>

<table id="par2au" name="par2">
<?php 
$query="SELECT * FROM ebinary ORDER BY id DESC";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td width=\"61px\" align=\"center\">{$result_set['pair']}</td><td width=\"61px\" align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$result_set['met']}</td><td width=\"61px\" align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$result_set['str']}</td><td width=\"61px\" align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$result_set['stp']}</td><td width=\"61px\" align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$result_set['tresult']}</td>";

echo"<td width=\"61px\" align=\"center\">";
if($result_set['tresult']==NULL){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Lost\" name=\"lostb\" id=\"buyy2\" /></form>";
}
else if($result_set['tresult']!=NULL){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Exp\" name=\"stopb\" id=\"buyy2\" disabled=\"disabled\"/></form>";
}

echo"</td>";

echo"<td width=\"61px\" align=\"center\">";
if($result_set['tresult']==NULL){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Won\" name=\"wonb\" id=\"buyy2\" /></form>";
}
else if($result_set['tresult']!=NULL){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Exp\" name=\"stopb\" id=\"buyy2\" disabled=\"disabled\"/></form>";
}

echo"</td>";

echo" <td width=\"61px\" align=\"center\">";
if($result_set['tresult']==NULL){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Del\" name=\"delb\" id=\"buyy2\" /></form>";
}
else if($result_set['tresult']!=NULL){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Del\" name=\"delb\" id=\"buyy2\" /></form>";
}

echo"</td>";

echo" <td width=\"61px\" align=\"center\">";
if($result_set['kam']==0){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Go\" name=\"gob\" id=\"buyy2\" /></form>";
}
else if($result_set['kam']==1){
echo"<form action=\"etrade.php?hi={$result_set['id']}\" method=\"post\"><input type=\"submit\"  value=\"Exp\" name=\"stopb\" id=\"buyy2\" disabled=\"disabled\"/></form>";
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