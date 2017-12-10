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
    <body><form action="totaltra.php">
            <table border="2" align="auto" class="panel panel-default">
                
           <tr class="panel-heading"><td class="panel-body"> 
                   <input class="btn btn-primary" type="button" value="Back" name="home"ONCLICK="window.location.href='home.php' ""/>
   <input type="button" class="btn btn-primary" value="Log-Out" name="home"ONCLICK="window.location.href='index.php' ""/>
   </table>
        </form>
        <?php
         session_start();
        
      
        
	       $id=$_SESSION['user1']; 
            mysql_connect("localhost","root","");
            mysql_select_db("bank");
            $total=  mysql_query("SELECT `tratype`, `amt`, `id` FROM `totaltra` WHERE id='$id'");

          
echo '</br>';
        echo '<table border="2" align="center" class="panel panel-default">';
       
        echo '<tr style="background-color:" class="panel-heading">';
        echo '<td class="panel-body">Your Total Transection: <br></td>';
        echo '<tr style="background-color:" class="panel-heading"><td class="panel-body">';
        echo 'Deposit/Withdraw';
        echo '</td>';

        echo '<td class="panel-body">';
        echo 'Amount';
        echo '</td>';


        echo '</tr>';           
while($row=  mysql_fetch_array($total))
           {
                echo '<tr class="panel-heading">';
           

            echo '<td class="panel-body">';
            echo $row['tratype'];
            echo '</td>';

            echo '<td class="panel-body">';
            echo $row['amt'];
            echo '</td>';


            echo '</tr>';
                
                
                
              
           }
// put your code here
        ?>
    </body>
</html>
