<?php include "inc/header.php" ?>
<?php

//POST VULE FROM FORM BY BASEL AHMED

$c_name = @$_POST['c_name'];

//INSTER CATOGERS BY BASEL AHMED 

if(isset($_POST['Addcat'])){

$insert_cat="insert into category(c_name) values('$c_name')";
$run_cat=mysqli_query($db,$insert_cat);
    if(isset($run_cat)){
    header("loacation:Addcat.php");
    }}

?>

<div class="adminbody">

<!-- STRAT FROM  FOR INSERT DATA BY BASEL AHMED -->
    <form action="Addcat.php" method="post">
        <label>  Name of Classful </label>
        <input type="text" name="c_name" />
        <input type="submit" name="Addcat" value="Add Calssful"/>
    </form>    
<!-- END FROM  FOR INSERT DATA BY BASEL AHMED -->

</div>
<?php include "inc/footer.php" ?>