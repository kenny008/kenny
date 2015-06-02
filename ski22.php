<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_logina();?>
<?php require_once("includes/dhead.php");?>
<style type="text/css">
 #head22q{
background:#313131; 
 }
 </style>
<div id="headh">
 
<div id="sant">
<p><font size="+2" color="#ca2722">Complaints</font></p>
<table width="700px" id="wen" name="wen">
<tr bgcolor="#ca2722"><td align="center"><font color="#fff">Full Name</font></td><td align="center"><font color="#fff">Phone</font></td><td align="center"><font color="#fff">Email</font></td><td align="center"><font color="#fff">Account</font></td></tr>
<?php
$queryc="SELECT * FROM withd WHERE pen='Pending' AND cat='complaints'";
$resultc=mysql_query($queryc,$connection);
	while($resset=mysql_fetch_array($resultc)){
	echo"<tr>";
echo"<td align=\"center\"><a href=\"ddashmm.php?lam={$resset['id']}\" title=\"{$resset['email']}\">{$resset['fname']}</a></td>";
echo"<td align=\"center\">{$resset['phone']}</td>";
echo"<td align=\"center\">{$resset['email']}</td>";
echo"<td align=\"center\">{$resset['ac']}</td>";
echo"</tr>";

}
?>
</table>
</div>

</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>