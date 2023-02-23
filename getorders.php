<?php

   
             function getAllOrders(){
                include_once('dbconfig.php');
             $getOrders = mysqli_query($con, "SELECT invoiceNumber, orderQuantity, orderShipToAdd, orderTime, orderDate, company_name FroM orders JOIN company ON orders.buyerCompanyId = company.companyid ");

                if($getOrders){
                    $count = 1;
                    if(mysqli_num_rows($getOrders) > 0){
                        while($rows = mysqli_fetch_assoc($getOrders)){

                           
                          
                            //echo '<a href="orders.php"><div class="grid-item text-uppercase text-white"><img class="logoImg" src="'.substr($rows['productimg'],3).'""></div></a>';
                            echo ' <tr>
                            <th scope="row" style="text-align: center">'.$count.'</th>
                            <td style="text-align: center">'.$rows['invoiceNumber'].'</td>
                            <td style="text-align: center">'.$rows['orderQuantity'].'</td>
                            <td style="text-align: center">'.$rows['company_name'].'</td>
                            <td style="text-align: center">'.$rows['orderShipToAdd'].'</td>
                            <td style="text-align: center" >'.$rows['orderTime'].'</td>
                            <td style="text-align: center" >'.$rows['orderDate'].'</td>
                          </tr>';

                          $count++;
                            
                        }

                       

                    }else{
                      echo "No reconrds found of the item you are searching for.  ";
                    }
              // <a href="orders.php"><div class="grid-item text-uppercase text-white">Orders</div></a>
                  }
                }

                function getAllCart(){
                include_once('dbconfig.php');
                $userid = isset($userid) ? $userid : '';
                if(isset($_SESSION['userid'])){
                  $userid = $_SESSION['userid'];
                }
                $getOrders = mysqli_query($con, "SELECT productquantity, productprice, productName, productimg, productDes FrOM cart JOIN product ON cart.productid = product.productid WHERE userid = '$userid'  ");
  
                  if($getOrders){
                      $count = 1;
                      if(mysqli_num_rows($getOrders) > 0){
                          while($rows = mysqli_fetch_assoc($getOrders)){
  
                           
                            
                              //echo '<a href="orders.php"><div class="grid-item text-uppercase text-white"><img class="logoImg" src="'.substr($rows['productimg'],3).'""></div></a>';
                              echo ' <tr>
                              <th scope="row" style="text-align: center">'.$count.'</th>
                              <td style="text-align: center">'.subtr($rows['productimg'], 3).'</td>
                              <td style="text-align: center">'.$rows['productName'].'</td>
                              <td style="text-align: center">'.$rows['productquantity'].'</td>
                              <td style="text-align: center">'.$rows['productprice'].'</td>
                              <td style="text-align: center" >'.$rows['productDes'].'</td>
                            </tr>';
  
                            $count++;
                              
                          }
  
                         
  
                      }else{
                        echo '<td style="text-align: center">No reconrds found of the item you are searching for.</td>';
                        
                      }
                // <a href="orders.php"><div class="grid-item text-uppercase text-white">Orders</div></a>
                    }
                  }

        ?>