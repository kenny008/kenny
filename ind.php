<?php require_once("includes/session.php");?>
<?php require_once("inc/connection.php");?>
<?php con_login();?>
<?php require_once("includes/cheadergr.php");?>
  <style type="text/css">
 #head22a{
	background:#313131;
	 
 }
 </style>
 <div id="jigi">
 <div id="hellf">
 <p><b>FAQ</b><br /><br /><b>Why did the investment program start?</b><br />The investment program was initiated because it was discovered that majority of the clients that are introduced to the account management section of our website are not satisfied with the disclosure requirement which are the minimum investment, monthly management fee, 50% performance fee, trading risk and other factors that does not guarantee the safety and profit of the business. Clients can still benefit from our vast knowledge.<br /><br /><b>How does Meggaprofits investment program guarantees safety?</b><br />Meggaprofits investment program guarantees safety so much that clients invested fund is 100% assured to be withdrawn against all odds. All deposited funds are at our own risk and not at client's risk.<br /><br /><b>What is the difference between Account Management and Investment?</b><br />The difference is that in account management clients opens an account with any regulated Forex or Binary options broker and funds are deposited also by themselves. What we do at Meggaprofits is to trade and manage the account with the provided trader login and password. Payments are made to us through management and performance fee. But in the investment program, clients register on our website and fund their account on our website. All the risk involved is our responsibility while we manage the funds on diversified portfolios.<br /><br /><b>How can someone invest with Meggaprofits ?</b><br />You have to become a registered member before you can start an investment program with us. You have to make your initial deposit after you signed up.<br /><br /><b>What is minimum investment?</b><br />The minimum investment is $100.<br /><br /><b>What is maximum investment?</b><br />The maximum investment for those that cannot meet up with the account management minimum deposit is $4,900. You can invest more if you are satisfied with other factors that guarantee the safety and profitability of your funds.<br /><br /><b>Which payment method do you accept?</b><br />We accept Payza, Skrill, PerfectMoney, Webmoney and Neteller. Deposited funds are effected immediately.<br /><br /><b>Are my funds withdrawable?</b><br />Yes they are. Login to your account using your username and password and check the Withdraw section of the investment area.<br /><br /><b>How soon can i withdraw my earnings?</b><br />The deposited fund and earnings can be withdrawn soon after the investment date expires. Due to our up to date management plan and diversified portfolio scheme, it takes 90 days to be able to guarantee success on every invested fund.. <br /><br /><b>How much do I make in 90 days?</b><br />We have only one investment plan at Meggaprofits. Every deposit turns to 200% in 90 days. We have devised a means that calculates in percent for 90 days. This method is visible on client's member area.<br /><br /><b>What are the risks involved?</b><br />There are no risks involved for our clients. Every risk is managed by us. For of this reason, we have employed a network of professionals with a wide practical experience in the investment and trading industry. Our experience is sufficient as investment manager.<br /><br /><b>How does Meggaprofits make money from the investment program?</b><br />We depend solely on the trading volume commission on one of the diversified portfolio. Our focus is to trade 50,000 or more lots at 1.1 ($11) pips per lot in trading volume every month. The accuracy of this target in percent guarantees the profit for us.<br /><br /><b>What is the aim of Meggaprofits?</b><br />Our aim is to expand our client's purse and also to create more job opportunities for citizens of the world through our one of a kind program. We realized that the more the expansion of our investment program, the better it becomes for all and sundry.</p>
 </div>
 <div id="hellf3">
 <div id="hellf4">
 <p align="center">Statistics</p>
 </div>
 <div id="hellf5">

 <p><b>Status</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['insta'];	
}
?></p>
 <p><b>Started</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey' AND insta='ACTIVE'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['aldat'];	
}
?></p>
<p><b>Running Days</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey' AND insta='ACTIVE'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo"90 Days";
}  ?></p>
  <p><b>Days Remaining:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
$hey=$_SESSION['iaakenn'];
$now=time();
$query="SELECT * FROM trade WHERE id='$hey' AND insta='ACTIVE'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
$fsu=$resset['aldat'];
$your_date=strtotime($fsu);
$datediff=$now-$your_date;
$ken=floor($datediff/(60*60*24));

$kenn=$ken+1;
$hi=90-$kenn;
if($hi>=0){
echo $hi." Days";
}
else{
echo"expired";	
}
}

?></p>
  <p><b>Active Investment:</b>&nbsp;&nbsp;&nbsp;<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey' AND insta='ACTIVE'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo "$".$resset['ac'];	
}
?></p>
 <p><b>Percentage:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey' AND insta='ACTIVE'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo $resset['up']."%";	
}
?></p>
  <p><b>Total Deposited:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey' AND insta='ACTIVE'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo"$".$resset['td'];	
}
?></p>
  <p><b>Total Withdraw:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php    
$hey=$_SESSION['iaakenn'];
$query="SELECT * FROM trade WHERE id='$hey' AND insta='ACTIVE'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$resset=mysql_fetch_array($result);
echo "$".$resset['tw'];	
}
?></p>
 
 </div>
 </div>
 <div id="hellf2">
 <a href="indd.php">
<div id="jigg">
<P align="center">DEPOSIT<br />NOW</P>
</div>
</a>
<a href="inddd.php">
<div id="jigg2">
<P align="center">WITHDRAW<br />NOW</P>
</div>
</a>
</div>
 </div>
</div>
</div>
<?php require_once("includes/cfooter.php");?>