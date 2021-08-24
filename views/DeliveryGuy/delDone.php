<?php 
      require_once ('../../controllers/deliveryGuyController.php');  
        


    if(isset($_POST['submit']))
    {
          

        session_start();
        if(!isset($_SESSION['loggedinuser']))
        {
            header("Location:../login.php");
        }

        
        $c_id = $_SESSION["loggedinuser"];
        
        $deli_id=$_GET["id"]; 
        $stat="done";

        updateDeli($deli_id,$stat);
        header("Location:../DeliveryGuy/home.php");
        
        

       
    }
    if(isset($_POST['back']))
    {
        header("Location:home.php");
       
    }
?>
<html>
    <head>
        <title>Delivery Booking</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/package_image/about.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .footer {
                position: absolute;;
                left: 0;
                top: 1250px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: rgb(216, 205, 205);
                
            }
        </style>
    </head>
    <body class="bg">

        <div style="position:absolute; top: 100px; left: 30px;">
            <font size="60"><h1>Have you done this delivery?</h1><hr> </font>
        </div>
        
        <form action="" method="post">
            <table border="1" style="position:absolute; top: 300px; left: 130px; width:150">
                <tbody>
                    
                    
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="2"><input type="submit" name="submit" value="OK" style="width:150"></td>
                        <td></td>
                        <td></td>
                        <td rowspan="2"><input type="submit" name="back" value="Cancel" style="width:150"></td>

                    </tr>
                </tbody>
            </table>
        </form>
        <div class="footer">
            <p style="position: absolute;">Hot Line : +88018356465 <br>
               Facebook : www.facebook.com/tms_bd <br>
               fax : 0245699
            </p>
            <p align="right">Powered by :Bengal software <br>
               www.bgsoft.com.bd <br>
               +8805412245  
            </p>
          </div>
    </body>
</html>