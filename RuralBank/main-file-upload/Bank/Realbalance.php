<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <style>  body {
                background-color: #eb2123;
            }
            u
            {
                color: purple;
            }
            h2 {

                text-align: center;
            } </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <form action="Realbalance.php">

            <table border="2" align="center">
       
        		<tr style="background-color: pink" align="center">
	            	<th>
	            	Transection Details
	            	</th>
        		</tr>
        	</table>
        <table border="2" align="center">
		        <tr>
		            <td>
		           Enter Amount You Want To : 
		        </td>
        
		        <td>
		        	<input type="text" name="text1" value="" />
		        </td><br></tr>
        <table border="2" align="center">
            <tr>
		        <td> <INPUT Type="submit" VALUE="Deposit" name="ds"> 
			   <input type="submit" value="WithDraw" name="wd">
			   <input type="button" value="Back" name="home"ONCLICK="window.location.href='home.php' ""/>
			   
			   <input type="button" value="Log-Out" name="home"ONCLICK="window.location.href='index.php' ""/></td>
			 </tr>
        </table>

        </form>
        <?php
        session_start();

        mysql_connect("localhost", "root", "");
        mysql_select_db("bank");
        $uname =$_SESSION['login'];
        $id = $_SESSION['user1'];
        

        echo '<br>';

        echo '<br>Your Initial balance is=', $_SESSION['user'];
        echo '<br>hello - ',$uname;
        echo '<br>';
        echo "Your Current Balance:" ,$_SESSION['z'];



        $_SESSION['intamt'] = $_SESSION['user'];


        
            
            if (isset($_GET['wd']))
                {

                $withdraamt = ($_SESSION['z'] - $_GET['text1']);
                $enamt = $_GET['text1'];
                $_SESSION['user'];
                if ($withdraamt >= 0) 
                    {
                    
                    $d = 'withdraw';
                    mysql_query("INSERT INTO `totaltra`(`id`, `tratype`, `amt`) VALUES ('$id','$d','$enamt')");
                   // echo '<br>Your Intition balance:' . $i;
                    echo '<br> Now Your Real Balance is :', '<b>', $withdraamt, '</b>';

                    mysql_query("UPDATE user SET curr_ballence='$withdraamt' WHERE id='$id'");


                    //$_SESSION['user']= $withdraamt;
                    $_SESSION['z']=$withdraamt;
                } else 
                    {
                
                    echo '<br>Not have Amount Balance';

                    echo '<br>Please Enter ';
                }
            
        		}


// put your code 

        	

            ?>
    </body>
</html>
