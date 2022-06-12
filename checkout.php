<?php include "files/header.php"; ?>
<?php

      global $connect;

      $ip=getIp();

      $total=0;

      $t_price="select * from cart where ip_add ='$ip' ";

      $run_price=mysqli_query($connect,$t_price);

      while($row_t_price = mysqli_fetch_array($run_price)){

      $pro_id_t=$row_t_price['p_id'];

      $price_pro="select * from  products where p_id='$pro_id_t'";

      $run_price_pro=mysqli_query($connect,$price_pro);


      while($row_price_pro =mysqli_fetch_array($run_price_pro)){

        $pro_price = array($row_price_pro['p_price']);

        $pro_name = $row_price_pro['p_title'];

        $values=array_sum($pro_price);

        $total +=$values;

      }
      }


            ?>
<center>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="baselahmed4444@gmail.com">

    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick">

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="<?php echo $pro_name ?>">
    <input type="hidden" name="amount" value="<?php echo $total ?>">
    <input type="hidden" name="currency_code" value="USD">

    <input type="hidden" name="return" value="http://moobd3.org/ecommerce/paypal_success.php">
    <input type="hidden" name="cancenl_return" value="http://moobd3.org/ecommerce/paypal_cancel.php">

    <!-- Display the payment button. -->
    <input type="image" name="submit" border="0"
    src="images/paypal.png" class="paypal"
    alt="Buy Now">
    <img alt="" border="0" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
</center>
<?php include "files/footer.php";?>