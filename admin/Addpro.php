<?php include "inc/header.php";?> 
<?php  

// POST VULES FROM FORM BY BASEL AHMED 

$p_title    = @$_POST['p_title'];
$p_category = @$_POST['p_category'];
$p_img      = @$_FILES['p_img']['name'];
$p_img_tmp  = @$_FILES['p_img']['tmp_name'];
$p_price    = @$_POST['p_price'];
$p_desc     = @$_POST['p_desc'];
$p_key      = @$_POST['p_key'];


// MOVE UPLODE TO IMGES BY BASEL AHMED 

move_uploaded_file($p_img_tmp,"images/$p_img");

//INSTER PROUDECTS BY BASEL AHMEM  


if(isset($_POST['Addpro'])){

if(empty($p_title)OR empty($p_category) OR empty($p_img) OR empty($p_price) OR empty($p_desc) OR empty($p_key) ){

  echo'<script> alert("please you should full all boexes"); </script>';
}

else{
$insert_pro="insert into products(p_title,p_img,p_price,p_key,p_desc,p_category)
    values('$p_title',
           '$p_img',
           '$p_price',
           '$p_key',
           '$p_desc',
           '$p_category')";

$run_pro=mysqli_query($db,$insert_pro);

if(isset($run_pro)){
  header("loacation:Addpro.php");}
}}
?>

<div class="adminbody">  

<!--START FORM FOR INTOER DATA BY BASEL AHMED-->

 <form action="Addpro.php" method="POST"  enctype="multipart/form-data">
    <label>  Name of Proudect </label>
    <input type="text" name="p_title" />
    <label> Classful of Proudect </label><br>
    <select name="p_category" style="margin-top:5px;">

          <?php
          $get_c="select * from category";
          $run_c=mysqli_query($db,$get_c);

          while($row_c= mysqli_fetch_array($run_c)){
            echo '<option value="'.$row_c['c_id'].'">'.$row_c['c_name'].'</option>';
          }
          ?>

    </select><br/><br/>
    <label>Picture of Proudect </label>
    <input type="file" name="p_img" />
    <label>price of Proudect </label>
    <input type="text" name="p_price" />
    <label>Discrbation of Proudect </label>
    <textarea name="p_desc" id="p_desc"> </textarea>
        <script>
          ClassicEditor
                  .create( document.querySelector('#p_desc' ) )
                  .then( editor => {
                          console.log( editor );
                  } )
                  .catch( error => {
                          console.error( error );
                  } );
        </script><br><br>
    <label> Key Words </label>
    <input type="text" name="p_key" />
    <input type="submit" name="Addpro" value="Add Produt"/>
  </form>

<!--END FORM FOR INTOER DATA BY BASEL AHMED-->

</div>
<?php include "inc/footer.php";?> 