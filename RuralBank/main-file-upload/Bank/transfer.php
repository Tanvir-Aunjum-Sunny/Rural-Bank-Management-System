<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    </head>
    <body>
        <form action="transfer.php">
            <table border="2" align="center" class="panel panel-default">
       
        <tr style="background-color:" align="center" class="panel-heading">
            <th class="panel-title">
            Transfer Details
            </th>
        </tr>
            </table>
        <table border="2" align="center" class="panel panel-default">
            <tr class="panel-heading" style="background-color:" align="center">
			<td class="panel-body">
            Enter Your Patner Id:<input class="form-control" type="text" name="text1" value="" /></tr>
           <tr class="panel-heading" style="background-color:" align="center">
            <td class="panel-body">Enter Your Amount : <input class="form-control" type="text" name="text2" value="" /><br>
           </td> </tr>
        <tr style="background-color:" align="center"><td>
            <input class="btn btn-primary" type="submit" value="Transfer" name="tnf" />
            <input class="btn btn-primary" type="button" value="Back" name="home"ONCLICK="window.location.href='home.php' ""/>
   
            <input type="button" class="btn btn-primary" value="Log-Out" name="home"ONCLICK="window.location.href='index.php' ""/>
   </td></tr>
            
        </form>
        <?php
        session_start();
          $id=$_SESSION['user1'];
        if(isset($_GET['tnf']))
        {
            $aid=$_GET['text1'];
        $aamt=$_GET['text2'];
     mysql_connect("localhost","root","");
            mysql_select_db("bank");
            //$x=mysql_query("SELECT ((SELECT intbalans FROM user WHERE id ='$id') + (SELECT COALESCE(SUM(amt),0) FROM  `totaltra` WHERE tratype =  'deposit' AND id ='$id') - ( SELECT COALESCE( SUM( amt ),0) FROM  `totaltra` WHERE tratype =  'withdraw' AND id ='$id' )) AS tbalance");
           $result = mysql_query("SELECT `id` FROM `user` WHERE id='$aid'");
if(mysql_num_rows($result) == 0) {
     echo '<td>Account No Not Valid';
} else 
    {
   mysql_query("INSERT INTO `transfer`(`Toid`, `Fromid`, `amt`) VALUES ('$aid','$id','$aamt')");
            echo '<td>Success Fully Transfer';
            echo $aamt;
    // do other stuff...
}
            }
        // put your code here
        ?>
    </body>
</html>
