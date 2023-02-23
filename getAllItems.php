<?php
 
    function gettingallItems(){
      include_once('dbconfig.php');
      global $con;
        $searchFl = isset($searchFl) ? $searchFl : '';
            
        if(isset($_POST['serchfor'])){
          
          $searchFl = mysqli_real_escape_string($con, $_POST['searchFl']);
          $getProducts = mysqli_query($con, "SELECT productid, productName, productimg, productUnitprice, productDes FroM product WHERE productName LIKE '%$searchFl%'");

            if($getProducts){
                
                if(mysqli_num_rows($getProducts) > 0){
                    while($rows = mysqli_fetch_assoc($getProducts)){

                        //echo '<a href="orders.php"><div class="grid-item text-uppercase text-white"><img class="logoImg" src="'.substr($rows['productimg'],3).'""></div></a>';
                        echo '
                        <main class="mainsection">
                        <section class="product-info">
                          <p name="itemATCId" hidden>'.$rows['productid'].'</P>
                          <h1 name="itemATCName">'.$rows['productName'].'</h1>
                          <img src="'.substr($rows['productimg'],3).'" alt="Product Image" id="logoImg">
                          <p name="itemATDes">'.$rows['productDes'].'</p>
                          <ul id="amtpr">
                              <li name="itemATCAmt">Amt : </li>
                              <li name="itemATCQuantiy"><input type="number" name="quantiy" ></li>
                              
                            </ul>
                            <ul  id="pricepr">
                              <li name="itemATCP">Price : USD $</li>
                              <li name="itemATCPrice">'.$rows['productUnitprice'].'</li>
                            </ul>
                          <button name="add_to_cart">Add to Cart</button>
                        </section>
                        <hr>
                    </main>
                    ';
                        
                    }
                }else{
                  echo "No reconrds found of the item you are searching for.  ";
                }
          // <a href="orders.php"><div class="grid-item text-uppercase text-white">Orders</div></a>
            }
        }else{
          include_once('dbconfig.php');
          $getProducts = mysqli_query($con, "SELECT productid, productName, productimg, productUnitprice, productDes FROM product");

            if($getProducts){
                
                if(mysqli_num_rows($getProducts) > 0){
                    while($rows = mysqli_fetch_assoc($getProducts)){

                        //echo '<a href="orders.php"><div class="grid-item text-uppercase text-white"><img class="logoImg" src="'.substr($rows['productimg'],3).'""></div></a>';
                        echo '
                        <main class="mainsection">
                          <section class="product-info">
                            <p name="itemATCId" hidden>'.$rows['productid'].'</P>
                            <h1 name="itemATCName">'.$rows['productName'].'</h1>
                            <img src="'.substr($rows['productimg'],3).'" alt="Product Image" id="logoImg">
                            <p name="itemATDes">'.$rows['productDes'].'</p>
                            <ul id="amtpr">
                              <li name="itemATCAmt">Amt : </li>
                              <li name="itemATCQuantiy"><input type="number" name="quantiy" ></li>
                              
                            </ul>
                            <ul  id="pricepr">
                              <li name="itemATCP">Price : USD $</li>
                              <li name="itemATCPrice">'.$rows['productUnitprice'].'</li>
                            </ul>
                            <button name="add_to_cart"  >Add to Cart</button>
                          </section>
                          <hr>
                      </main>
                      ';

                     
                        
                    }
                }
          // <a href="orders.php"><div class="grid-item text-uppercase text-white">Orders</div></a>
            }
        }
    }
            

        ?>