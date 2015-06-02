<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php
if(isset($_POST['same'])){
$same1=$_POST['same1'];
header("Location:subms.php?all=$same1");
exit;	
}
?>
<?php
if(isset($_POST['samee'])){
$same1=$_POST['same1'];
header("Location:submss.php?all=$same1");
exit;	
}
?>
<?php require_once("includes/dhead.php");?>
 <style type="text/css">
 #head22q{
background:#313131; 
 }
 </style>
  <script type="text/javascript">
$(document).ready(function(){
	 $("#hmm2").click(function(){
		$("#wen2").show();
		$("#santlo").show();
		$("#wen").hide();
		$("#sant").hide();
		
				   
			
		 
		 
	$("#hmm2").css("background","#fff");
	$("#hmm1").css("background","#e9ecf3");
	});
	});
</script>
<script type="text/javascript">
$(document).ready(function(){
	 $("#hmm1").click(function(){
		 $("#wen2").hide();
		 $("#santlo").hide();
		 $("#wen").show();
		$("#sant").show();
		 
	
				
		  
		 
	$("#hmm1").css("background","#fff");
	$("#hmm2").css("background","#e9ecf3");
	});
	});
</script>
<div id="headh">
<div id="hmm">
<div id="hmm1">
<p align="center">Forex Subscribed Members</p>
</div>
<div id="hmm2">
<p>Binary Subscribed Members</p>
</div>
</div>
<div id="sant">
<p><font size="+2" color="#ca2722">Forex Subscribed Members</font></p>
<form action="" method="post" id="same2" name="same2">
<input type="text" name="same1" id="same1" placeholder="&nbsp;&nbsp;Email or Full Name" required/>&nbsp;&nbsp;<input type="submit" name="same" id="same" value="Search"/>
</form>
<table width="700px" id="wen" name="wen">
<tr bgcolor="#ca2722"><td align="center"><font color="#fff">Full Name</font></td><td align="center"><font color="#fff">Activation Date</font></td><td align="center"><font color="#fff">Expired Date</font></td><td align="center"><font color="#fff">Signal Delivery</font></td><td align="center"><font color="#fff">Signal Delivery Method</font></td></tr>
<?php
$dater=date('Y-m-d');
$now=time();
$query="SELECT * FROM trade";
$result=mysql_query($query,$connection);
while($resset=mysql_fetch_array($result)){
$fsu=$resset['fsub'];
$your_date=strtotime($fsu);
$datediff=$your_date-$now;
$ken=floor($datediff/(60*60*24));
if($ken<0){
	
}
else{
	echo"<tr>";
echo"<td align=\"center\">{$resset['fname']}</td>";
echo"<td align=\"center\">{$resset['fsta']}</td>";
echo"<td align=\"center\">{$resset['fsub']}</td>";
echo"<td align=\"center\">{$resset['sdm']}</td>";
echo"<td align=\"center\">{$resset['mtv']}</td>";
echo"</tr>";
}
}

?>
</table>
</div>


<div id="santlo">
<p><font size="+2" color="#ca2722">Binary Subscribed Members</font></p>
<form action="" method="post" id="same2" name="same2">
<input type="text" name="same1" id="same1" placeholder="&nbsp;&nbsp;Email or Full Name" required/>&nbsp;&nbsp;<input type="submit" name="samee" id="same" value="Search"/>
</form>
<table width="700px" id="wen2" name="wen2">
<tr bgcolor="#ca2722"><td align="center"><font color="#fff">Full Name</font></td><td align="center"><font color="#fff">Activation Date</font></td><td align="center"><font color="#fff">Expired Date</font></td><td align="center"><font color="#fff">Signal Delivery</font></td><td align="center"><font color="#fff">Signal Delivery Method</font></td></tr>
<?php
$dater=date('Y-m-d');
$now=time();
$query="SELECT * FROM trade";
$result=mysql_query($query,$connection);
while($resset=mysql_fetch_array($result)){
$fsu=$resset['bsub'];
$your_date=strtotime($fsu);
$datediff=$your_date-$now;
$ken=floor($datediff/(60*60*24));
if($ken<0){
	
}
else{
	echo"<tr>";
echo"<td align=\"center\">{$resset['fname']}</td>";
echo"<td align=\"center\">{$resset['fsta']}</td>";
echo"<td align=\"center\">{$resset['fsub']}</td>";
echo"<td align=\"center\">{$resset['sdm']}</td>";
echo"<td align=\"center\">{$resset['mtv']}</td>";
echo"</tr>";
}
}

?>
</table>
</div>

</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>