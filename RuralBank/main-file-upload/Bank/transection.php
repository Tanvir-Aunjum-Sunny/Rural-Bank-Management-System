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
        <form action="transection.php">
            <table border="2" align="center" class="panel panel-default">
       
        <tr style="background-color:" align="center" class="panel-heading">
            <th class="panel-title">
            Transection Details
            </th>
        </tr>
        </table>
        <table border="2" align="center">
        <tr>
            <td class="panel-body">
           Enter Amount You Want To : 
        </td>
        
        <td class="panel-body">
        <input type="text" class="form-control" name="text1" value="" />
          </td><br></tr>
        <table border="2" align="center">
            <tr>
        <td class="panel-body"> <INPUT class="btn btn-primary" Type="submit" VALUE="Deposit" name="ds"> 
   <input class="btn btn-primary" type="submit" value="WithDraw" name="wd">
   <input class="btn btn-primary" type="button" value="Back" name="home"ONCLICK="window.location.href='home.php' ""/>
   
   <input type="button" value="Log-Out" class="btn btn-primary" name="home"ONCLICK="window.location.href='index.php' ""/></td>
   </tr>
        </table>
        </form>
        <?php
        
        session_start();
       $i=$_SESSION['intamt'];
       //echo $i;
        mysql_connect("localhost","root","");
            mysql_select_db("bank");
            $id=$_SESSION['user1'];
        $_SESSION['user']=mysql_query("SELECT ((((SELECT intbalans FROM user WHERE id ='$id') + 
(SELECT COALESCE(SUM(amt),0) FROM  `totaltra` WHERE tratype =  'deposit' AND id ='$id') - 
(SELECT COALESCE( SUM( amt ),0) FROM  `totaltra` WHERE tratype =  'withdraw' AND id ='$id' ))+(SELECT COALESCE(SUM(amt),0)ttransfer FROM  `transfer` 
WHERE 
Toid ='$id'))-(SELECT COALESCE(SUM(amt),0)ttransfer FROM  `transfer` 
WHERE 
Fromid ='$id')) AS tbalance");
        $row = mysql_fetch_array($_SESSION['user']);
      $tbalance=$row["tbalance"]; 
		$_SESSION['user']=$tbalance;
                echo '<table border="2" align="center">';
 echo "<td>Your Last balance is=".$tbalance;
 // echo '<br>Initial Balance'.$_SESSION['intamt'];
                        
 //Echo 'Your Balance :',$_SESSION['user'];
              //echo '<br>',$_SESSION['user1'];
            //$user=$_SESSION['login'];
            //$pass=$_SESSION['login1'];
         
           
            if(isset($_GET['ds']))
        {
            $depositamt=($_SESSION['user']+$_GET['text1']);
            //$realDepositamt=mysql_query("UPDATE user
//SET amt='$depositamt'
//WHERE id='$id'");
            
            //$_SESSION['user']=$depositamt;
            $enamt=$_GET['text1'];
            
            $d='deposit';
            mysql_query("INSERT INTO `totaltra`(`id`, `tratype`, `amt`) VALUES ('$id','$d','$enamt')");
            //$intbl=  mysql_query("SELECT intbalans FROM `user` WHERE username='$user' and password='$pass'");
           // echo $intbl;
            echo '<br>Your Initial balance:'.$i;
            echo '<br>Now Your Real Balance is:','<b>',$depositamt,'</b>';
            
            }
            if(isset($_GET['wd']))
        {
                 
            $withdraamt=($_SESSION['user']-$_GET['text1']);
            $enamt=$_GET['text1'];
            $_SESSION['user'];
            if($tbalance>=0)
            {
                 //$realwithdraamt=mysql_query("UPDATE user
//SET amt='$withdraamt'
//WHERE username='$user' and password='$pass';");
           $d='withdraw';
            mysql_query("INSERT INTO `totaltra`(`id`, `tratype`, `amt`) VALUES ('$id','$d','$enamt')");
            echo '<br>Your Intition balance:'.$i;
            echo '<br> Now Your Real Balance is :','<b>',$withdraamt,'</b>';
          //$_SESSION['user']= $withdraamt;
            }
            else
            {
                echo '<br>Not have Amount Balance';
                
                echo '<br>Please Enter ';
            }
            
            }
        
        // put your code here
        ?>
    </body>
</html>
