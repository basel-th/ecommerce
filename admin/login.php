<?php

// CONNTECT WITH DB BY BASEL AHMED

$con= mysqli_connect('localhost','root','','ecomm');

// POST VULES  BY BASEL AHMED 

$a_name = @$_POST['a_name'];
$a_pass = @$_POST['a_pass'];

        if(isset($_POST['login'])){
             if(empty($a_name) OR empty($a_pass)){
                    echo'<script>alert("Plause Enter All Data  ")</script>';
            }

        else{

// GET ADMIN NAME & PASSWORD BY BASEL AHMED         

            $get_admin="select * from admin where a_name ='$a_name' AND a_pass='$a_pass'";
            $run_admin= mysqli_query($con,$get_admin);

// ADMIN ISSET BY BASEL AHMED            

        if(mysqli_num_rows($run_admin)==1 ){

            $row_admin= mysqli_fetch_array($run_admin);

// ADMIN VALUES ISEST BY BASEL AHMED       

            $aname=$row_admin['a_name'];

// COOKIES HERE BY BASEL AHMED      

            setcookie("aname", $aname,time()+60*60*24) ;
            setcookie("adminlogin",1,time()+60*60*24)  ;
            echo ' <script> alert("wlecome agine mr.manager") </script>';
            header("Location:ok.php");
            }

        else{

            echo'<script>alert("The Data Is Incorect ")</script>';
       }
    }
}
?>

<!--STRAT HTML PAGE BY BASEL AHMED -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login To Contral Boread </title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

    <div class="loginAll">
<!--STRAT FORM BY BASEL AHMED -->
       <div class="title_b">Login To Contral Boread</div>
        <form action="login.php" method="post">
            <input type="text" name="a_name" placeholder="Username" />
            <input type="password" name="a_pass" placeholder="Password" />
            <input type="submit" name="login" value="Log In" />
        </form> 
<!--END FORM BY BASEL AHMED -->        
    </div>
   
</body>
</html>

<!--STRAT HTML PAGE BY BASEL AHMED -->