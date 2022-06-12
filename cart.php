
<!--START PAGE CART.PHP BY BASEL AHMED -->

<?php include "files/header.php";?>

<?php session_start(); ?>

<!--START FORM BY BASEL AHMED -->
 
<form action="" method="POST"> 
  
<!--START TABLE BY BASEL AHMED -->
 
<table class="table" >

  <tr align="center" style="font-size: 30px;" >
      <td  Class = "b-b-r">Delete</td>
      <td  Class = "b-b" >The Proudect</td>
      <td  Class = "b-b-l" >The Quntnity</td>
      <td  Class = "b-b-l">The Price</td>
  </tr>

<!--START FUNCTION FOR FETCH PROUDECTS  BY BASEL AHMED -->

<?php 

    global $connect;
    $ip=getIp();
    $total=0;
    $t_price="select * from cart where ip_add='$ip'";
    $run_price=mysqli_query($connect,$t_price);

    while($row_t_price = mysqli_fetch_array($run_price)){

          $pro_id_t=$row_t_price['p_id'];
          $price_pro="select * from  products where p_id='$pro_id_t'";
          $run_price_pro=mysqli_query($connect,$price_pro);

          while($row_price_pro =mysqli_fetch_array($run_price_pro)){

                $pro_price =array($row_price_pro['p_price']);
                $pro_title=$row_price_pro['p_title'];
                $pro_img=$row_price_pro['p_img'];
                //$p_id_t=$row_price_pro['p_id'];  // that  i was used to  bottoun 
                $pro_price_single=$row_price_pro['p_price'];
                $values=array_sum($pro_price);
                $total +=$values;

?>

<!--END FUNCTION FOR FETCH PROUDECTS  BY BASEL AHMED -->

<tr align="center">

  <td Class="b-r" > <input type="checkbox" name="remove[]" value="<?php echo $pro_id_t  ;?>" /> </td>

  <td >
      <div style="font-size: 25px; margin: 5px 0px;font-family: sans-serif">
        <?php echo $pro_title;?>
      </div>
       <img width="300" style="border-radius: 14px; " src="admin/images/<?php echo $pro_img;?>"/>
  </td> 

  <td class="b-l">
    <input type="text" name="qty" size="8" style="border-radius:5px;" value="<?php echo $_SESSION['qty'] ;?>" />
  </td>
  
  <!--START FUNCTION FOR UPDATE CART  BY BASEL AHMED -->

     <?php

        if(isset($_POST['update_cart'])){

            $qty = $_POST['qty'];
            $update_qty=" update cart set  qty='$qty'";
            $run_u_qty = mysqli_query($connect,$update_qty);
            $_SESSION['qty']=$qty;
            $total= $total * $qty;
       
    } ?>

  <!--END FUNCTION FOR UPDATE CART  BY BASEL AHMED -->

  <td  Class="b-l" ><span style="color: #e4342d;"><?php echo $pro_price_single; ?> </span>$</td>

</tr>

<?php }} ?>

<tr align="center" style="background:#fff;font-size: 20px;">
  <th> The full price:<span  style="color: #e4342d;"><?php echo  $total ?></span>$</th>
</tr>

<tr align="center" >
  <td><input type="submit" name="update_cart" value="Updata the Card"/><td>
  <button><a href="index.php">counting the shoping</a> </button><td>

<!--STRAT FUNCTION FOR CHECK BOUTTON CART  BY BASEL AHMED -->

<?php

    if($login_coo==1){
    echo'<td><button><a href="checkout.php">stop the shoping</a> </button><td>';

    }else{
      echo'<td><button><a href="login.php">stop the shoping</a> </button><td>';
    }
?> 

<!--END FUNCTION FOR CHECK BOUTTON CART  BY BASEL AHMED -->

</tr>

<!--STRAT FUNCTION FOR DELETE PROUDECT CART  BY BASEL AHMED -->
<?php 

function update_cart()
{

      global $connect;  
      $ip=getIp();

      if(isset($_POST['update_cart']))
      {

          foreach($_POST['remove'] as $id_remove)
          {
            $delete_pro="delete from cart where  p_id='$id_remove' and ip_add='$ip'";
            $run_delete=mysqli_query($connect, $delete_pro);

            if($run_delete)
              {
                header("Location:cart.php");
              }
          }
      }

      echo $up_c =update_cart();
}

?>
<!--END FUNCTION FOR DELETE PROUDECT CART  BY BASEL AHMED -->

</table>
 </form>

<?php include "files/footer.php";?>