<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    </head>
    <body>
		<form action="index.php">
			<table border="2" align="center" class="panel panel-default">
		<tbody>

			<tr style="background-color:" align="center" class="panel-heading">
				<th class="panel-title">
				Registation Details
				</th>
			</tr>
			<table border="2" align="center">
				<tr style="background-color:">
			<td class="panel-body">
				Username:
			</td>
			<td>
				<input class="form-control" type="text" name="uname" value="" /><br>
			</td>
			</tr>
			<tr style="background-color:">
			<td class="panel-body"> 
				Password:
			</td>
			<td>
				<input class="form-control" type="password" name="psw" value="" /><br>
			</td>
			</tr>
			<tr style="background-color:">
				<td class="panel-body">
					Amount:
				</td>
				<td>
					<input class="form-control" type="text" name="amt" value="" /><br>
				</td>
			</tr>
			<td class="panel-body"> 
				<input class="btn btn-primary" type="submit" value="Acc Open" name="act" />
			</td>
			<td class="panel-body">
				<input class="btn btn-primary" type="button" value="Login" name="login" ONCLICK="window.location.href='login.php'"/>
			</td> 
		</tbody>
		</form>
        <?php
        if(isset($_GET['act']))
        {
                  mysql_connect("localhost","root","");
        mysql_select_db("bank");
        if(isset($_GET['act']))
        {
                $Name=$_GET['uname'];
		$Password=$_GET['psw'];
                $Amt=$_GET['amt'];
	 mysql_query("INSERT INTO `user`(`username`, `password`,intbalans) VALUES('$Name','$Password','$Amt')");
         header("location:Login.php");
         
        }
        }
        // put your code here
        ?>
		
		<script src="../js/bootstrap.min.js"></script>
    </body>
</html>
