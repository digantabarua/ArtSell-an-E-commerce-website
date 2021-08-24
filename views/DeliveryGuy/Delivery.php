<?php 
	
	require '../../controllers/buyerController.php';
    require '../../controllers/deliveryGuyController.php.';
   
    $infos=getAllInfo();
    $infosD=getAllInfoD();
    
?>
<html>
    <head>
        <title>Deliver Status</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/web_info_image/reg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .p1 {
                position: absolute;
                left: 420;
                top: 70px;
                font-size: 40px;
                color: rgb(255, 200, 205);
                }
            .footer {
                position: absolute;;
                left: 0;
                top: 1200px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: rgb(216, 205, 205);
            }
        </style>
    </head>
    <body class="bg">
    
        <ul class="active">
        <li><a href="home.php">Home</a></li>
        <li><a href="Delivery.php">Delivery</a></li>
        <li><a href="Buyer List.php">Buyer List</a></li>
        <li><a href="contact.php">Contact</a></li>
        </ul>

        <form method="post" action="" enctype="multipart/form-data">
            
            <table border="1" style="position: absolute; top: 200; left: 100;">
                  <tbody>
                      <tr>
                          <td colspan='2'>Pending List</td>
                      </tr>
                        <tr>
                          <td>ID</td>
                          <td>Delivery Guy ID</td>
                          <td>Delivery Guy Name</td>
                          <td>Product ID</td>
                          <td>Product Name</td>
                          <td>Quantity</td>
                          <td>Price</td>
                          <td>Payment Status</td>
                          <td>Buyer ID</td>
                          <td>Buyer Name</td>
                          <td>Buyer Address</td>
                          <td>Delivery Status</td>
                      
                        </tr>
                        
                        <?php
                            foreach($infos as $info)
                            {
                                echo "<tr>";
                                echo "<td>".$info["di_id"]."</td>";
                                echo "<td>".$info["d_id"]."</td>";
                                echo "<td>".$info["d_name"]."</td>";
                                echo "<td>".$info["p_id"]."</td>";
                                echo "<td>".$info["p_name"]."</td>";
                                echo "<td>".$info["quantity"]."</td>";
                                echo "<td>".$info["price"]."</td>";
                                echo "<td>".$info["paid_status"]."</td>";
                                echo "<td>".$info["b_id"]."</td>";
                                echo "<td>".$info["b_name"]."</td>";
                                echo "<td>".$info["address"]."</td>";
                                echo "<td>".$info["delivery_status"]."</td>";
                                echo '<td><a href="delDone.php?id='.$info["di_id"].'" >Select</a>';
                                
                                echo "</tr>";
                            }
                        ?>
                        
                  </tbody>
            </table>
          </form>
          
          <form method="post" action="" enctype="multipart/form-data">
            
            <table border="1" style="position: absolute; top: 500; left: 100;">
                  <tbody>
                      <tr>
                          <td colspan='2'>Delivery Done List</td>
                      </tr>
                        <tr>
                          <td>ID</td>
                          <td>Delivery Guy ID</td>
                          <td>Delivery Guy Name</td>
                          <td>Product ID</td>
                          <td>Product Name</td>
                          <td>Quantity</td>
                          <td>Price</td>
                          <td>Payment Status</td>
                          <td>Buyer ID</td>
                          <td>Buyer Name</td>
                          <td>Buyer Address</td>
                          <td>Delivery Status</td>
                      
                        </tr>
                        
                        <?php
                            foreach($infosD as $info)
                            {
                                echo "<tr>";
                                echo "<td>".$info["di_id"]."</td>";
                                echo "<td>".$info["d_id"]."</td>";
                                echo "<td>".$info["d_name"]."</td>";
                                echo "<td>".$info["p_id"]."</td>";
                                echo "<td>".$info["p_name"]."</td>";
                                echo "<td>".$info["quantity"]."</td>";
                                echo "<td>".$info["price"]."</td>";
                                echo "<td>".$info["paid_status"]."</td>";
                                echo "<td>".$info["b_id"]."</td>";
                                echo "<td>".$info["b_name"]."</td>";
                                echo "<td>".$info["address"]."</td>";
                                echo "<td>".$info["delivery_status"]."</td>";
                                
                                
                                echo "</tr>";
                            }
                        ?>
                        
                  </tbody>
            </table>
          </form>
         
        

          <div class="footer">
            <p style="position: absolute;">Hot Line : +8801952544538 <br>
               Facebook : www.facebook.com/rafid.rimu <br>
               
            </p>
            <p align="right">Powered by :Rafid IT <br>
               www.rafid.com <br>
               
            </p>
          </div>
    </body>
</html>