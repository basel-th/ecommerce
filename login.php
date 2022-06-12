<?php include "files/header.php"; ?>
<?php 

//post value
 $username =@$_POST['username'];
 $password =@$_POST['password'];

if(isset($_POST['login'])){


    if(empty($username)|| empty($password)){


        echo'<script> alert("please put all data")</script>';



    }

    else{
   
        $seclec_c="select * from  customers where username='$username' and  password='$password'";

        $run_c= mysqli_query($connect, $seclec_c);

        if(mysqli_num_rows($run_c)>0){

           $row_c=mysqli_fetch_array($run_c);

             $user=$row_c['username'];
             $pass=$row_c['password'];

           if($user !=$username && $pass !=$password) {

            echo'<script> alert("infromat is uncorect ")</script>';
           } 
           else{
            
            setcookie("user",$username,time()+60*60*24);   //$_SESSION['user_session']=$user
            setcookie("login",1,time()+60*60*24);          //$_SESSION['login_session']=1

            echo'<script>alert("You Are Wlecome sueccessfully regeister")</script>';
            echo' <meta  http-equiv="refresh"  content=" 2; url=\'checkout.php\'"/>';


           }

        }else{

            echo'<script> alert(" no infromation like these ")</script>';

        }



    }
}


 
?>


<form action="" method="post">
  <div  class="plane" style=" width:500px ; margin:0px auto ;" > 
    
  <div class="plane_title"> Log in </div>
  <div class="plane_body "> 
      
  <div calss="lable"> User Name : </div>
    <input  type="txet"  name="username" />
        <br/><br/>
  <div calss="lable"> Password  : </div>
  <input  type="txet"  name="password" />  
  

    <input  type="submit"  name="login"  value="log in" /> 

</div>

</div>





</form>
<?php include "files/footer.php";?>