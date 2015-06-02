<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['same'])){
$same1=$_POST['same1'];
header("Location:adminpages.php?all=$same1");
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
<div id="sant1">
<p align="center"><b>Registered Member</b><br /> <?php    
$query="SELECT * FROM trade WHERE conf='2'";
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
<div id="sant2b">
<p><b><a href="stki.php">Statistics</a></b></p>
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
<form action="" method="post" id="same2" name="same2">
<input type="text" name="same1" id="same1" placeholder="&nbsp;&nbsp;Email or Full Name" required/>&nbsp;&nbsp;<input type="submit" name="same" id="same" value="Search"/>
</form>
<table width="700px" id="wen" name="wen">
<tr bgcolor="#ca2722"><td align="center"><font color="#fff">Full Name</font></td><td align="center"><font color="#fff">Email</font></td><td align="center"><font color="#fff">Phone</font></td><td align="center"><font color="#fff">Signal Delivery</font></td></tr>
<?php 
$al=$_GET['all'];
if($al!=NULL){
$query="SELECT * FROM trade WHERE conf='2' AND email='$al' or fname LIKE '%".$al."%'";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<tr>";
echo"<td align=\"center\"><a href=\"ddash.php?las={$result_set['id']}\">{$result_set['fname']}</a></td>";
echo"<td align=\"center\">{$result_set['email']}</td>";
echo"<td align=\"center\">{$result_set['phone']}</td>";
echo"<td align=\"center\">{$result_set['sdm']}</td>";
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