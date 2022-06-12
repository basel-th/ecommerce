<?php include "files/header.php"; ?>
<?php 


//POST VALUES BY BASEL AHMED

 $username   =@ $_POST['username'];
 $password   =@ $_POST['password'];
 $email      =@ $_POST['email'];
 $country    =@ $_POST['country'];



//ADD IP BY BASEL AHMED 

 $ip =getIp();

 if(isset($_POST['singup'])){
  
  if(empty($username)||empty($password)||empty($email)||empty($country)){

  echo'<script>alert("Please Inter All Data");</script>';

  }
  else{

    $inster_c="insert into customers(username,password,email,country,ip) 
    values( '$username',
            '$password',
            '$email',
            '$country',
            '$ip')";

    $run_c=mysqli_query($connect,$inster_c) ;

    if(isset($run_c)){

      echo'<script>alert("Sucessfully Regeister  You Are Wlecome ");</script>';
    }}}
 
?>


<form action="" method="post">
    <div  class="plane" style=" width:500px ; margin:0px auto ;" > 

        <div class="plane_title">Name of Membership </div>

        <div class="plane_body "> 
              <div calss="lable"> User Name : </div>
                <input  type="txet"  name="username" />
                <br/><br/>

              <div calss="lable"> Password  : </div>
                <input  type="txet"  name="password" />  
                <br/><br/>

              <div calss="lable"> The Email : </div>
                <input  type="txet"  name="email" />  
                <br/><br/> 

              <div calss="lable">The Country : </div>
                <input  type="txet"  name="country" /> 
                <input  type="submit"  name="singup"  value="sing up" /> 
        </div>
    </div>
</form>
<?php include "files/footer.php";?>