<?php 
	
	require '../../controllers/productController.php';
    
    $histories=getAllHistory();
    
?>
<html>
    <head>
        <title>Purchase History</title>
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
            background-image: url("../../storage/\web_info_image/reg.jpg");
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
        <li><a href="Purchase history.php">Purchase history</a></li>
        <li><a href="delGuy List.php">Delivery Guy List</a></li>
        <li><a href="contact.php">Contact</a></li>
        </ul>

          
          
         
        <form method="post" action="" enctype="multipart/form-data">
            
            <table border="1" style="position: absolute; top: 200; left: 300;">
                  <tbody>
                        <tr>
                          <td>ID</td>
                          <td>Customer Id</td>
                          <td>name</td>
                          <td>Product</td>
                          <td>Quantity</td>
                          <td>Price</td>
                        </tr>
                        
                        <?php
                            foreach($histories as $history)
                            {
                                echo "<tr>";
                                echo "<td>".$history["ph_id"]."</td>";
                                echo "<td>".$history["c_id"]."</td>";
                                echo "<td>".$history["name"]."</td>";
                                echo "<td>".$history["product"]."</td>";
                                echo "<td>".$history["quantity"]."</td>";
                                echo "<td>".$history["price"]."</td>";
                              
                                echo "</tr>";
                            }
                        ?>
                        
                  </tbody>
            </table>
          </form>

          <div class="footer">
            
          </div>
    </body>
</html>