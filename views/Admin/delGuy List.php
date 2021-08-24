<?php 
	
    require '../../controllers/buyerController.php';
	require '../../controllers/deliveryGuyController.php';
    
    $deliguys=getAllInfos();
    $infos=getAllInfo();
    $infosD=getAllInfoD();
    
?>
<html>
    <head>
        <title>Delivery Guy List</title>
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
            
            <table border="1" style="position: absolute; top: 100; left: 100;">
                  <tbody>
                      <tr>
                          <td colspan='2'>Delivery Guy List</td>
                      </tr>
                        <tr>
                          <td>Id</td>
                          <td>Name</td>
                          <td>Mobile</td>
                          <td>E mail</td>
                          <td>Address</td>
                          <td>age</td>
                          <td>dob</td>
                          <td>Gender</td>
                          <td>Status</td>
                        </tr>
                        
                        <?php
                            foreach($deliguys as $deliguy)
                            {
                                echo "<tr>";
                                echo "<td>".$deliguy["d_id"]."</td>";
                                echo "<td>".$deliguy["name"]."</td>";
                                echo "<td>".$deliguy["mobile"]."</td>";
                                echo "<td>".$deliguy["email"]."</td>";
                                echo "<td>".$deliguy["address"]."</td>";
                                echo "<td>".$deliguy["age"]."</td>";
                                echo "<td>".$deliguy["dob"]."</td>";
                                echo "<td>".$deliguy["gender"]."</td>";
                               

                                echo '<td><a href="delDelGuy.php?id='.$deliguy["d_id"].'" >Select</a>';
                                
                                echo "</tr>";
                            }
                        ?>
                        
                  </tbody>
            </table>
          </form>



          <form method="post" action="" enctype="multipart/form-data">
            
            <table border="1" style="position: absolute; top: 300; left: 100;">
                  <tbody>
                      <tr>
                          <td colspan='2'>Pending List</td>
                      </tr>
                        <tr>
                          <td>Id</td>
                          <td>Delivery guy id</td>
                          <td>Delivery guy name</td>
                          <td>Product id</td>
                          <td>Product name</td>
                          <td>Quantity</td>
                          <td>Price</td>
                          <td>Payment Status</td>
                          <td>Buyer id</td>
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
                          <td>Id</td>
                          <td>Delivery guy id</td>
                          <td>Delivery guy name</td>
                          <td>Product id</td>
                          <td>Product name</td>
                          <td>Quantity</td>
                          <td>Price</td>
                          <td>Payment Status</td>
                          <td>Buyer id</td>
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
            
          </div>
    </body>
</html>