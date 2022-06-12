<?php include "files/header.php"?>
<div class="plane l" style=" "> 

<?php

    global $connect;
    $p_id=(int)$_GET['id'];

    if(isset($_GET['id'])){

    $get_pro_d="select * from products where p_id='$p_id'";
    
    $run_pro_d=mysqli_query($connect ,$get_pro_d);

    $row_pro_d=mysqli_fetch_array($run_pro_d);

}
?>


</div>
<div class="plane r" style="
    width: 500px;
    position: relative;
    right: 10%;"> 

<div class="plane_title"> <?php echo $row_pro_d['p_title']; ?>  </div>

<div class="plane_body"> 
  
<img src="<?php echo'admin/images/'.$row_pro_d['p_img'];?>"  width="500px" style="margin:-10px"><br/><br/>

<p> <?php echo $row_pro_d['p_desc']; ?></p>

</div>

</div>

<div class="plane l" style="/*width: 500px; */
    position: relative;
    /* right: -91px; */
    left: 1%;"> 

<div class="plane_title">Infromation about Proudect  </div>

<div class="plane_body"> 
  <div id="p_info">Price:<?php echo $row_pro_d['p_price'] ?>$</div>
  <div id="p_info">Calssful:
    
      <?php $cat=$row_pro_d['p_category'];

      $get_cat="select * from  category where c_id='$cat'";

      $run_cat=mysqli_query($connect,$get_cat);

      $row_cat=mysqli_fetch_array($run_cat);


      echo $row_cat['c_name'];

      ?>

  </div>
  <div id="p_info">Key word:<?php echo $row_pro_d['p_key']; ?></div>
  
</div>

</div>
<div class="c" style=" width:320px;"> </div>
<?php include "files/footer.php"?>