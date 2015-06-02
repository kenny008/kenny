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
<?php require_once("includes/dhead.php");?>
 <style type="text/css">
 #head22q{
background:#313131; 
 }
 </style>
<div id="headh">

<div id="sant">
<p><font size="+2" color="#ca2722">Forex Subscribed Members</font></p>
<form action="" method="post" id="same2" name="same2">
<input type="text" name="same1" id="same1" placeholder="&nbsp;&nbsp;Email or Full Name" required/>&nbsp;&nbsp;<input type="submit" name="same" id="same" value="Search"/>
</form>
<table width="700px" id="wen" name="wen">
<tr bgcolor="#ca2722"><td align="center"><font color="#fff">Full Name</font></td><td align="center"><font color="#fff">Activation Date</font></td><td align="center"><font color="#fff">Expired Date</font></td><td align="center"><font color="#fff">Signal Delivery</font></td><td align="center"><font color="#fff">Signal Delivery Method</font></td></tr>
<?php
$al=$_GET['all'];
$dater=date('Y-m-d');
$now=time();
$query="SELECT * FROM trade WHERE email='$al' or fname LIKE '%".$al."%'";
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




</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>