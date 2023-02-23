<?php
include_once('dbconfig.php');

    class Products{

        function getProductListing(){

            $getProducts = mysqli_query($con, "SELECT productimg FroM product");

            if($getProducts){
                
                if(mysqli_num_rows($getProducts) > 0){
                    while($rows = mysqli_fetch_assoc($getProducts)){

                        echo '<a href="orders.php"><div class="grid-item text-uppercase text-white">"'.$rows['productimg'].'"</div></a>';
                        
                    }
                }
           // <a href="orders.php"><div class="grid-item text-uppercase text-white">Orders</div></a>
            }

        }
    }
?>