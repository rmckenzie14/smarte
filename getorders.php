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

        ?>