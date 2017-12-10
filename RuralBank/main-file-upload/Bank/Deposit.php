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
        <form action="Deposit.php">
          Enter Amount You Want To Deposit:  <input class="form-control" type="text" name="text1" value="" />
         	 <br><input  class="btn btn-primary" type="submit" value="Sumbit" name="dps" /><br>
          	<input  class="btn btn-primary" type="button" value="Back To Home Page" name="home"ONCLICK="window.location.href='home.php' ""/>
        	<input type="BUTTON"  class="btn btn-primary" value="WithDraw" name="wd">
            <input type="button"   class="btn btn-primary" value="Log-Out" name="home"ONCLICK="window.location.href='index.php' ""/>
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
        echo "Your Current Balance:" ,$_SESSION['x'];
            
            



     if(isset($_GET['dps']))
        {
            $depositamt=($_SESSION['x']+$_GET['text1']);
            $dnamt = $_GET['text1'];
            $_SESSION['user'];

            //$realDepositamt=mysql_query("UPDATE user
//SET amt='$depositamt'
//WHERE id='$id'");


           
                  
                    
                    $depo = 'deposit';
                    mysql_query("INSERT INTO `totaltra`(`id`, `tratype`, `amt`) VALUES ('$id','$depo','$dnamt')");
                   // echo '<br>Your Intition balance:' . $i;
                    echo '<br> Now Your Real Balance is :', '<b>', $depositamt, '</b>';

                    mysql_query("UPDATE user SET curr_ballence='$depositamt' WHERE id='$id'");


                    //$_SESSION['user']= $withdraamt;
                    $_SESSION['x']=$depositamt;
               




            
            
           
         }




       
        ?>
    </body>
    </html>