 <?php
// CONNECT  WITH DATABASE

  $connect =mysqli_connect('localhost','root','','ec_ommerce'); 
  //$conn = mysqli_connect($servername, $username, $password);
  
//GET IP BY BASEL AHMED 

  function getIp(){
     /* 
      $ip=$_SERVER['REMOTE_ADDR'];

      if(!empty($_SERVER['HTTP_CLIENT_IP'])){
         $ip = $_SERVER['HTTP_CLIENT_IP'];
      }

      elseif(!empty($SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip=$SERVER['HTTP_X_FORWARDED_FOR'];
      } 

      return $ip;
*/
      $ip='121.12.1';  // TEMPERY SULOTINO  BECECASE THE IP RETRUN ::1 
      return  $ip;
    }

// CART FUNCTION BY BASEL AAHMED 
  
   function cart(){

         global $connect;
         // if(isset($_GET['add_cart'])){           //here is problem the code doesnot work I thin the  matter in isset 

         $ip =getIp();

         $pro_id= @(int)$_GET['add_cart'];

         $get_cart="select * from cart where ip_add='$ip' AND p_id='$pro_id'";

         $run_cart =mysqli_query($connect,$get_cart);
      
         if(mysqli_num_rows($run_cart) > 0){
               echo'';
            // }
         }
           
         else{
            $insert_cart="insert into  cart(p_id,ip_add) values('$pro_id','$ip')";

            $run_i_cart =mysqli_query($connect,$insert_cart);

            if(isset($run_i_cart)){
            echo'<meta  http-equiv="refresh"  content=" 2; url=\'index.php\'"/>';
              }
           }
          }

      // }
   
//GET  ITEM BY BASEL AHMED    
  
   function total_item(){

         if (isset($_GET['add_cart'])){

            global $connect;

            $ip=getIp();

            $get_total ="select * from cart where ip_add='$ip'";

            $run_total= mysqli_query($connect, $get_total);

            $total_item= mysqli_num_rows($run_total);

         }else{

            global $connect;

            $ip=getIp();

            $get_total ="select * from cart where ip_add='$ip'";

            $run_total= mysqli_query($connect, $get_total);

            $total_item= mysqli_num_rows($run_total);

         }

         echo$total_item;

         }  
         
//GET TOTAL PRICE BY BASEL AHMED    
  
   function total_price(){
   
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

            $values=array_sum($pro_price);

            $total +=$values;

         }
         }

      echo $total;
      }

//GET CATGOYRYES BY BASEL AHMED 

   function get_cat(){

         global $connect;
         
         $get_cat="select * from category ";

         $run_cat=mysqli_query($connect,$get_cat);

         while($row_cat=mysqli_fetch_array($run_cat)){

         echo'<li><a href="index.php?cat='.$row_cat['c_id'].'">'.$row_cat['c_name'].'</a></li>';
            }
           }

//GET PROUDECT BY BASEL AHMED 

   function get_pro(){

         global $connect;

         if(!isset($_GET['cat'])){ 
            
         $get_pro="select * from products";

         $run_pro=mysqli_query($connect, $get_pro);

         while($row_pro=mysqli_fetch_array($run_pro)){

         echo'
            <li>
            <div class="prodect">
               <div id="pro_img">
                  <a href="#"><img src="admin/images/'.$row_pro['p_img'].'" width="320"/></a>
               </div>
               <div id="pro_title"> 
                  <a href="detials.php?id='.$row_pro['p_id'].'"> '.$row_pro['p_title'].'</a>
                     </div>
               <div id="pro_buy">
                  <a href="index.php?add_cart='.$row_pro['p_id'].'"> <button> Buy Now</button></a>
               </div>
            </div>
            </li>  
            ';
         }
      }
   }

//GET PROUDECT BY CATOGORY BY BASEL AHMED

      
      function get_pro_cat(){

         global $connect;

         if(isset($_GET['cat'])){

         $cat=(int)$_GET['cat'];

         $get_pro_cat="select * from products where p_category='$cat'";

         $run_pro_cat=mysqli_query($connect,$get_pro_cat);

         if(mysqli_num_rows($run_pro_cat) > 0){

            while($row_pro_cat = mysqli_fetch_array($run_pro_cat)){

            echo'
               <li>
                  <div class="prodect">
                     <div id="pro_img">
                     <a href="#"><img src="admin/images/'.$row_pro_cat['p_img'].'" width="320"/></a>
                     </div>
                     <div id="pro_title"> 
                        <a href="#"> '.$row_pro_cat['p_title'].'</a>
                     </div>
                     <div id="pro_buy">
                     <a href="#"> <button> Buy Now</button></a>
                     </div>
                  </div>
               </li>  ';

            }


         }
         
      else{

         echo'<div class="error"  > Sorry There are No Proudect Yet Now </div>';
         }
         } 
         }

            

//GET PROUDECT BY SREACH  BY BASEL

   function get_pro_search(){

         global $connect;

         if(isset($_GET['search'])){

         $searchArea =$_GET['searchArea'];

         $get_pro_search= "select * from products where p_key like '%$searchArea%'";
         
         $run_pro_search= mysqli_query($connect,$get_pro_search);
         
         if(mysqli_num_rows($run_pro_search) > 0){

            while($row_pro_search= mysqli_fetch_array($run_pro_search) ){

               echo' 
            <li>
               <div class="prodect">
                  <div id="pro_img">
                  <a href="#"><img src="admin/images/'.$row_pro_search['p_img'].'" width="320"/></a>
                  </div>
                  <div id="pro_title"> 
                     <a href="#"> '.$row_pro_search['p_title'].'</a>
                  </div>
                  <div id="pro_buy">
                  <a href="#"> <button> Buy Now</button> </a>
                  </div>
               </div>
            </li>';
            }}
         else{
            echo'<div class="error" > Sorry The Proudrct Which Look For Is Not Available </div>';
         }}} 

   ?>