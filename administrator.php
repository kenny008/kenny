<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_login2a();?>
<?php
if(isset($_POST['crick'])){
$sufix=$_POST['sufix'];
$sufix2=$_POST['sufix2'];
$query="SELECT * FROM admin WHERE email='$sufix' AND password='$sufix2'";	
$re=mysql_query($query,$connection);
if(mysql_num_rows($re)==1){
	$user=mysql_fetch_array($re);
		$_SESSION['adid']=$user['id'];
		$_SESSION['adem']=$user['email'];
		$_SESSION['adfname']=$user['fname'];
		
header("Location:adminpage.php");
exit;	
}
else{
$mess="Incorrect Email and Password";	
}
}
?>
<?php require("includes/adhead.php");?>

<div id="headh">
<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<div id="kilode">
<form action="" method="post" name="sport" id="sport">
<p><input type="email" name="sufix" id="sufix"  placeholder="&nbsp;&nbsp;Email Address" required/></p>
<p><input type="password" name="sufix2" id="sufix"  placeholder="&nbsp;&nbsp;Password" required/></p>
<p><input type="submit" name="crick" id="crick" value="Login"/></p>
</form>
</div>

</div>
</div>
</div>
<?php require_once("includes/dfooter.php");?>