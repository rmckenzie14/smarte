<?php
 include_once('dbconfig.php');
// start the session


if($_SERVER['REQUEST_METHOD'] == "POST"){
// retrieve the product ID from the form
$product_id = $_POST['itemATCId'];

// check if the product ID is valid
if (isset($product_id)) {
    // get the product details from the database
    $product_details = getProDetail($product_id);

    // add the product to the cart
    if (isset($_SESSION['cart'][$product_id])) {
        // if the product is already in the cart, increase the quantity
        $_SESSION['cart'][$product_id]['quantity'] += 1;
    } else {
        // if the product is not in the cart, add it
        $_SESSION['cart'][$product_id] = array(
            'id' => $product_details['id'],
            'name' => $product_details['name'],
            'price' => $product_details['price'],
            'quantity' => $product_details['productAmount']
        );
    }
}
}


  function getProDetail($product_id){
   
    $searchFl = mysqli_real_escape_string($con, $_POST['searchFl']);
    $getProductdDe = mysqli_query($con, "SELECT productid, productName, productimg, productUnitprice, productDes FroM product WHERE  productid = '$product_id'");

      if($getProductdDe){
          
          if(mysqli_num_rows($getProductdDe) > 0){
              while($rows = mysqli_fetch_assoc($getProductdDe)){

              }
            }
          }
        }
  
?>