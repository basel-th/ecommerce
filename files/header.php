<?php

include "inc/fanction.php";

$user_coo=@$_COOKIE['user'];
$login_coo=@$_COOKIE['login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BASEL AL-QUREAPY</title>
      <link  rel="stylesheet " type="text/css" href="css/style.css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css"/>
</head>
<body>

<!--- STRAT MUAE BY ENG.BASEL AHMED -->

   <div class="menuBar">
      <h2 class="l">BAS<span>EL</span></h2>
         <ul class="w">
            <li> <a href="index.php">Home</a> </li> 
            <?php get_cat();?>
            <div class="c"></div>
         </ul>
   </div>

<!--- END MUAE BY ENG.BASEL AHMED -->


<!--- STRAT HEADER TOP BY ENG.BASEL AHMED -->

   <div class="headertop">  
      <div class="head">
         <h4>Flash Deals</h4>
         <h2>Get your best products</h2>
      </div>
   </div>

<!--- END HEADER TOP BY ENG.BASEL AHMED -->


<!--- STRAT AREAR SREACH BY ENG.BASEL AHMED -->


      <div class="search">
         <div class="w">
               <div class="cart1 ">You Are Welcome <?php echo $user_coo . " "; ?> !</div>
               <div class="cart ">The Case of Shooping :&nbsp;&nbsp;&nbsp; All Proudect :<span class="red"> <?php echo total_item();?> </span> &nbsp;, &nbsp;&nbsp;&nbsp;The Full Price :<span class="red"><?php echo total_price();  ?> </span><?php echo"$    "; ?> </div>
               <div class="cart "><a href="cart.php"> Go To The Cart</a></div>
               <?php cart(); ?> 

               <div class="sreachForm  l"> 
                  <form action="sreach.php" method="get" >
                     <input type="submit"  name="search"  value="Search"/>
                     <input type="text"  name="searchArea" placeholder="   Search here....."/>
                  </form>
                </div> 

               <div class="sochil  l"> 
                     <ul>
                        <li><a href="#"> <i class="fab fa-facebook fa-2x drakblue"></i></a> </li>
                        <li><a href="#"> <i class="fab fa-twitter fa-2x lightblue"></i></a> </li>
                        <li><a href="#"> <i class="fab fa-youtube fa-2x red"></i></a> </li>
                        <li><a href="#" > <i class="fab fa-instagram fa-2x pink "></i></a></li>
                        <li><a href="#"> <i class="fa fa-google-plus fa-2x  red"></i></a> </li>
                     </ul>
               </div>
               <div class="c"></div>
          </div>
         
      </div>

<!--- END SREACH AREARE BY ENG.BASEL AHMED --> 

<!--- END MENU BY ENG.BASEL AHMED -->
<br/>
<br/>
   <!--- STRAT CONTENT BY ENG.BASEL AHMED -->
   
   <div class=" content">


   