<?php
    
    include "inc/fanction.php";

    session_start()
    
        global $connect;

        $ip=getIp();

        $total=0;

        $t_price="select * from cart where ip_add ='$ip' ";

        $run_price=mysqli_query($connect,$t_price);

        while($row_t_price = mysqli_fetch_array($run_price)){

        $pro_id_t=$row_t_price['p_id'];

        $price_pro="select * from  products where p_id='$pro_id_t'";

        $run_price_pro=mysqli_query($connect,$price_pro);


        while($row_price_pro = mysqli_fetch_array($run_price_pro)){

            $pro_price = array($row_price_pro['p_price']);

            $pro_id    = $row_price_pro['p_id'];

            $values    = array_sum($pro_price);

            $total     += $values;
        }}

        $username=$_SESSION['user_session'];

        $get_u = "select * from  custromers  where  username ='$username'";

        $run_u = mysqli_query($connect, $get_u )

        $c_id  = $row_u['id'];  


// PAYPAL INFROMATIN BY BASEL AHMED 

    $amount   = $_GET['amt'];
    $currency = $_GET['cc'];
    $trx_id   = $_GET['tx'];

   
    
    $inster_payment="insert into payments(amount,cus_id,pro_id,trx_id,currency)
    values(' $amount','$c_id','$pro_id','$trx_id','$currency ')  " 

    $run_payment = mysqli_query($connect,$inster_payment) ;

    $inster_order="insert into orders(p_id,c_id,qty)"

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buoght is done</title>
</head>
<body>

<h2>The Bought is done sucessfully</h2>
<h3>he Bought is done sucessfully pleasde go to <a href="index.php">HOME</a></h3>
    
</body>
</html>