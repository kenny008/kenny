<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['trsub2'])){
$yrn2=$_POST['yrn2'];
$yrn3=$_POST['yrn3'];
$query="SELECT * FROM trade WHERE email='$yrn2' AND password='$yrn3' AND conf='2'";	
$re=mysql_query($query,$connection);
if(mysql_num_rows($re)==1){
	$user=mysql_fetch_array($re);
		$_SESSION['iaakenn']=$user['id'];
		$_SESSION['eaakenn']=$user['email'];
		$_SESSION['haha']=$user['fname'];
		$_SESSION['hahas']=$user['phone'];
header("Location:client.php");
exit;	
}
else{
$messa="Incorrect Email and Password";	
}
}
?>
<?php
if(isset($_POST['syrsu'])){
	$syre=$_POST['syre'];
		$_SESSION['am']=$syre;
	header("Location:perf3.php");
	exit;
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Meggaprofits- Performance Detailed Forex and Binary option statement</title>
<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/mega.css"/>
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/mega2.css"/>

<?php require_once("includes/head.php");?>
<?php require_once("includes/hperf3.php");?>
<?php require_once("includes/footer.php");?>
<script type="text/javascript">
$(document).ready(function(){
	 $("#fsigd").click(function(){
		$("#syear2").hide();
		  $("#syear").show();
		 $("#fta").show();
		 $("#perfid").show();
		 $("#mm1").css("color","#ca2722");
		  $("#mm").css("color","#000");
		  $("#perfid2").hide();
		  $("#fta2").hide();
	});
	});
</script>
<script type="text/javascript">
$(document).ready(function(){
	 $("#fsigd2").click(function(){
		   $("#syear").hide();
		 $("#fta").hide();
		 $("#perfid").hide();
		 $("#syear2").show();
		  $("#mm").css("color","#ca2722");
		   $("#mm1").css("color","#000");
		   $("#perfid2").show();
		   $("#fta2").show();
		
		
		
	});
	});
</script>