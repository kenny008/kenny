<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php
if(isset($_POST['dnasubw'])){
$now=date('Y-m-d');
$dnamy=$_POST['dnamy'];
$pinp=$_POST['pinp'];
$querysl="SELECT * FROM trade WHERE email='$pinp'";
$resultsl=mysql_query($querysl,$connection);
if(mysql_num_rows($resultsl)==1){
	$resultsetsl=mysql_fetch_array($resultsl);
	$buky=$resultsetsl['pem'];
	if($buky=='1'){
$query="UPDATE trade SET
bsta='$now',
bsub='$dnamy'
WHERE email='$pinp'";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
$mess="Binary Signal Successfully Activated";	
}
else{
$mess="error updating";
$mess.=mysql_error();	
}
	}
	else{
		
		$query="UPDATE trade SET
bsta='$now',
pem='1',
bsub='$dnamy'
WHERE email='$pinp'";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
$mess="Binary Signal Successfully Activated";	
}
else{
$mess="error updating";
$mess.=mysql_error();	
}
		
		
	}
}
}

?>



<?php
if(isset($_POST['dnasub'])){
$now=date('Y-m-d');
$dnamy=$_POST['dnamy'];
$pinp=$_POST['pinp'];
$querysl="SELECT * FROM trade WHERE email='$pinp'";
$resultsl=mysql_query($querysl,$connection);
if(mysql_num_rows($resultsl)==1){
	$resultsetsl=mysql_fetch_array($resultsl);
	$buky=$resultsetsl['pem'];
	if($buky=='1'){
$query="UPDATE trade SET
fsta='$now',
fsub='$dnamy'
WHERE email='$pinp'";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
$mess="Trade Signal Successfully Activated";	
}
else{
$mess="error updating";
$mess.=mysql_error();	
}
	}
	else{
		
		$query="UPDATE trade SET
fsta='$now',
pem='1',
fsub='$dnamy'
WHERE email='$pinp'";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
$mess="Trade Signal Successfully Activated";	
}
else{
$mess="error updating";
$mess.=mysql_error();	
}
		
		
	}
}
else{
$mess="error selecting";
$mess.=mysql_error();		
}
}

?>
<?php require_once("includes/dhead.php");?>
<style type="text/css">
 #head22e{
background:#313131; 
 }
 </style>
 <script type="text/javascript">
$(document).ready(function(){
	 $("#hmm2").click(function(){
		$("#will").hide();
		$("#willy").show();
		
		
		
		
		
		
	
		
				   
			
		 
		 
	$("#hmm2").css("background","#fff");
	$("#hmm1").css("background","#e9ecf3");
	});
	});
</script>
<script type="text/javascript">
$(document).ready(function(){
	 $("#hmm1").click(function(){
			$("#will").show();
			$("#willy").hide();
		
		 
	
		
		 
	
				
		  
		 
	$("#hmm1").css("background","#fff");
	$("#hmm2").css("background","#e9ecf3");
	});
	});
</script>
<div id="headh">
 <div id="hmm">
<div id="hmm1">
<p align="center">Trade Subscription</p>
</div>
<div id="hmm2">
<p>Binary Subscription</p>
</div>
</div>
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
<p><select id="dpinp" name="pinp">
<?php
$query="SELECT * from trade";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<option value=\"{$result_set['email']}\">";	
echo"{$result_set['email']}";
echo"</option>";
	
}

?>
</select></p>
<p><input type="date" name="dnamy" id="dnamy" /></p>
<p><input type="submit" name="dnasub" id="dnasub" value="Activate Now"/></p>
</form>

<form action="" method="post" id="willy" name="willy">
<p><select id="dpinp" name="pinp">
<?php
$query="SELECT * from trade";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<option value=\"{$result_set['email']}\">";	
echo"{$result_set['email']}";
echo"</option>";
	
}

?>
</select></p>
<p><input type="date" name="dnamy" id="dnamy" /></p>
<p><input type="submit" name="dnasubw" id="dnasub" value="Activate Now"/></p>
</form>
</div>

</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>