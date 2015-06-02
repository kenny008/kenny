<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php
if(isset($_POST['same'])){
$same1=$_POST['same1'];
header("Location:adminpages.php?all=$same1");
exit;	
}
?>
<?php require("includes/dhead.php");?>
 <style type="text/css">
 #head22q{
background:#313131; 
 }
 </style>
 <script type="text/javascript">
$(document).ready(function(){
	 $("#hmm2").click(function(){
		 $("#sant11").show();
			$("#wen2").show();	
		$("#sant1").hide();	
		$("#wen").hide();	
		$("#same222").show();
		$("#same2").hide();	
		$("#santq2").show();
		$("#sant2").hide();	
		$("#sant2b").hide();
		$("#sant2bi").show();		   
			
		 
		 
	$("#hmm2").css("background","#fff");
	$("#hmm1").css("background","#e9ecf3");
	});
	});
</script>
<script type="text/javascript">
$(document).ready(function(){
	 $("#hmm1").click(function(){
		 $("#sant11").hide();
		 $("#sant1").show();
		 $("#wen2").hide();
		 $("#wen").show();
		$("#same2").show();
		$("#same222").hide();
		$("#sant2").show();
		$("#santq2").hide();
		$("#sant2bi").hide();
		$("#sant2b").show();
				
		  
		 
	$("#hmm1").css("background","#fff");
	$("#hmm2").css("background","#e9ecf3");
	});
	});
</script>
<div id="headh">

<div id="sant">
<div id="hmm">
<div id="hmm1">
<p align="center">Trade Signals</p>
</div>
<div id="hmm2">
<p>Account Management Signal</p>
</div>
</div>
<div id="sant1">
<p align="center"><b>Registered Member</b><br /> <?php 
$me=NULL;   
$query="SELECT * FROM trade WHERE conf='2' AND asignal='$me'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)>=1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
echo"( ". $num." )";	
}
?></p>
</div>
<div id="sant11">
<p align="center"><b>Registered Member</b><br /> <?php 
$me=NULL;     
$query="SELECT * FROM trade WHERE conf='2' AND fsignal='$me'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)>=1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
echo"( ". $num." )";	
}
?></p>
</div>
<div id="sant2">
<p><b><a href="subm.php">Subscribed Members</a></b></p>
</div>
<div id="santq2">
<p><b><a href="amem.php">Activated Members</a></b></p>
</div>
<div id="sant2b">
<p><b><a href="stki.php">Statistics</a></b></p>
</div>
<div id="sant2bi">
<p><b><a href="alaba.php">Statistics</a></b></p>
</div>
<div id="sant2b">
<p align="center"><b><a href="ski2.php">Withdraws<br /> <?php    
$query="SELECT * FROM withd WHERE pen='Pending' AND cat='withdraw'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)>=1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
echo"( ". $num." )";	
}
else{
echo "( 0 )";	
}
?></a></b></p>
</div>
<div id="sant2b">
<p align="center"><b><a href="ski22.php">Complaints<br /> <?php    
$query="SELECT * FROM withd WHERE pen='Pending' AND cat='complaints'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)>=1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
echo"( ". $num." )";	
}
else{
echo "( 0 )";	
}
?></a></b></p>
</div>
<div id="sant2b">
<p align="center"><b><a href="us.php">Contact Us<br /> <?php    
$query="SELECT * FROM cont";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)>=1){
	$num=mysql_num_rows($result);
$resset=mysql_fetch_array($result);
echo"( ". $num." )";	
}
else{
echo "( 0 )";	
}
?></a></b></p>
</div>

<form action="" method="post" id="same2" name="same2">
<input type="text" name="same1" id="same1" placeholder="&nbsp;&nbsp;Email or Full Name" required/>&nbsp;&nbsp;<input type="submit" name="same" id="same" value="Search"/>
</form>
<form action="" method="post" id="same222" name="same222">
<input type="text" name="same1" id="same1" placeholder="&nbsp;&nbsp;Email or Full Name" required/>&nbsp;&nbsp;<input type="submit" name="same" id="same" value="Search"/>
</form>
<table width="700px" id="wen" name="wen">
<tr bgcolor="#ca2722"><td align="center"><font color="#fff">Full Name</font></td><td align="center"><font color="#fff">Email</font></td><td align="center"><font color="#fff">Phone</font></td><td align="center"><font color="#fff">Signal Delivery</font></td></tr>
<?php 
$me=NULL; 
$query="SELECT * FROM trade WHERE conf='2' AND asignal='$me'";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td align=\"center\"><a href=\"ddashtest.php?las={$result_set['id']}\">{$result_set['fname']}</a></td>";
echo"<td align=\"center\">{$result_set['email']}</td>";
echo"<td align=\"center\">{$result_set['phone']}</td>";
echo"<td align=\"center\">{$result_set['sdm']}</td>";
echo"</tr>";
}

?>
</table>
<table width="700px" id="wen2" name="wen2">
<tr bgcolor="#ca2722"><td align="center"><font color="#fff">Full Name</font></td><td align="center"><font color="#fff">Email</font></td><td align="center"><font color="#fff">Phone</font></td><td align="center"><font color="#fff">Signal Delivery</font></td></tr>
<?php 
$me=NULL; 
$query="SELECT * FROM trade WHERE conf='2' AND fsignal='$me'";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td align=\"center\"><a href=\"ddashtest2.php?las={$result_set['id']}\">{$result_set['fname']}</a></td>";
echo"<td align=\"center\">{$result_set['email']}</td>";
echo"<td align=\"center\">{$result_set['phone']}</td>";
echo"<td align=\"center\">{$result_set['sdm']}</td>";
echo"</tr>";
}

?>
</table>
</div>

</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>