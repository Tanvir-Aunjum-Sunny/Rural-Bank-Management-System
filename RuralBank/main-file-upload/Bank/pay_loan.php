<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style>
.tt{
	width:600px;
	margin:auto;
	padding:0px;
	background-color:#632D8D;
	height:450px;
	border:5px teal solid;
	box-shadow:5px 5px 5px 5px black;
}
.first{
	width:100%;
	height:100px;
	margin:0px;
	padding:0px;
	float:left;
}
.first1{
	width:100%;
	height:60px;
	margin:0px;
	padding:0px;
	float:left;
	margin-top:32px;
	
}

.result{
	width:800px;
	height:400px;
	background-color:#FAFAFA;
	margin:auto;
	margin-top:20px;
	box-shadow:3px 3px 3px 3px #ededed;
	border:8px green solid;

}
</style>
</head>

<body>
<marquee behavior="alternate"><marquee width="300px"><h2 style="margin:auto;text-align:center; line-height:40px; padding:20px;"> <span style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:red;text-transform:uppercase">SOMOBAY SOMITI</span></h2></marquee></marquee>
<?php 
	session_start();
	include("db.php");
	$uname =$_SESSION['login'];
    $id = $_SESSION['user1'];
    $rintlmnt = $_SESSION['rem_instlmnt'];
    $ploan = $_POST['loan_paymnt'];
	
		if (isset( $_POST['submit'])){
		


		

		


		


		$after_ploan = ($_SESSION['z'] - $ploan);
		$rintlmnt=$rintlmnt-1;



		mysql_query("UPDATE user SET curr_ballence='$after_ploan' WHERE id='$id'");
		mysql_query("UPDATE loan SET Installment='$rintlmnt' WHERE id='$id'");
                   
             

        

		}
?>
<input type="button" value="Home" onclick="window.location.href='home.php'" />

<div class="tt">
<h1 style="color:white;text-align:center">Loan Calculater.</h1>
	<form action=" <?php echo $_SERVER['PHP_SELF'];?>" method="post">
		


		<div class="first">
		<p style="float:left; width:250px; color:white; margin:0px; padding:0px; padding-left:30px; padding-top:8px">Total Amount of Loan:</p>
		<input style="float:left; height:30px;border-radius:12px; -moz-border-radius:12px;-webkit-border-radius:12px;border:1px black solid; text-indent:8px;" type="text" name="loan_paymnt" value="<?php echo $ploan; ?>"  required/>
		<br/>
		</div>
		

		

		
		
		

		
		
		

		

		<div class="first">
			<input style="float:left; height:30px;border-radius:12px; -moz-border-radius:12px;-webkit-border-radius:12px; margin-left:280px;border:1px black solid; text-indent:8px;" type="submit" name="submit" value="PAY"/>
		</div>
	</form>
</div>




<div class="result">
		<div class="first">
		<h1 style="text-align:center">Result of Loan calculation :</h1>
		
		

		</div>
		
		


	<p style="float:left;margin:0px;padding:0px; margin-top:12px; font-size:18px; font-style:italic; padding-left:12px"> Remaining Installment = <?php echo $rintlmnt;?></p>

	<p style="float:left;margin:0px;padding:0px; margin-top:12px; font-size:18px; font-style:italic; padding-left:12px"> Remaining Loan = <?php echo $after_ploan;?></p>

</div>


</body>

</html>
