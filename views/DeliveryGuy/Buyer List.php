<?php 
	
	require '../../controllers/buyerController.php';
   
    $buyers=getAllCustomer();
    
?>
<html>
    <head>
        <title>Buyer List</title>
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
        <li><a href="Delivery.php">Delivery</a></li>
        <li><a href="Buyer List.php">Buyer List</a></li>
        <li><a href="contact.php">Contact</a></li>
        </ul>

        <form method="post" action="" enctype="multipart/form-data">
            
            <table border="1" style="position: absolute; top: 200; left: 300;">
                  <tbody>
                        <tr>
                          <td>ID</td>
                          <td>Name</td>
                          <td>Phone</td>
                          <td>Email</td>
                          <td>Address</td>
                          <td>Age</td>
                          <td>DOB</td>
                          <td>Gender</td>
                      
                        </tr>
                        
                        <?php
                            foreach($buyers as $buyer)
                            {
                                echo "<tr>";
                                echo "<td>".$buyer["b_id"]."</td>";
                                echo "<td>".$buyer["name"]."</td>";
                                echo "<td>".$buyer["mobile"]."</td>";
                                echo "<td>".$buyer["email"]."</td>";
                                echo "<td>".$buyer["address"]."</td>";
                                echo "<td>".$buyer["age"]."</td>";
                                echo "<td>".$buyer["dob"]."</td>";
                                echo "<td>".$buyer["gender"]."</td>";
                                
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