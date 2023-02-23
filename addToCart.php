<?php
 
// start the session
session_start();


// $product_id = isset($product_id) ? $product_id : '';
// $quantity = isset($quantity) ? $quantity : '';
if(isset($_POST['add_to_cart'])){

  $product_id = $_POST['itemATCId'];
  $quantity = $_POST['quantity'];
  var_dump($quantity);
  //$q = $_GET['q'];

}
// if(isset($_GET['id'])){

//   $product_id = $_GET['id'];
//   $quantity = $_GET['quantity'];
//   var_dump($quantity);
//   //$q = $_GET['q'];

// }
// retrieve the product ID from the form
//$product_id = $_POST['itemATCId'];

// check if the product ID is valid
if (isset($product_id)) {
    // get the product details from the database
    $product_details = getProDetail($product_id);
    //var_dump($product_details);
    // add the product to the cart
    if (isset($_SESSION['cart'][$product_id])) {
        // if the product is already in the cart, increase the quantity
        $_SESSION['cart'][$product_id]['quantity'] += 1;
        echo "Line 22 ".$_SESSION['cart'][$product_id]['quantity'];
    } else {
        // if the product is not in the cart, add it
        $_SESSION['cart'][$product_id] = array(
            'id' => $product_details['productid'],
            'name' => $product_details['productName'],
            'price' => $product_details['productUnitprice'],
            'quantity' => $product_details['productAmount']
        );
    }
    
    //var_dump($_SESSION['cart']);
}



  function getProDetail($product_id){
    include_once('dbconfig.php'); 
    //$searchFl = mysqli_real_escape_string($con, $_POST['searchFl']);
    $getProductdDe = mysqli_query($con, "SELECT productid,productName, productUnitprice,productAmount  FroM product WHERE  productid = '$product_id'");
    $rows = "";
      if($getProductdDe){
          
          if(mysqli_num_rows($getProductdDe) > 0){
              $rows = mysqli_fetch_assoc($getProductdDe);


              //return($rows;
            }
          }
          return $rows;
           //echo var_dump($rows);
        }
  
?>