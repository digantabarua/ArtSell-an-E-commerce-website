<?php
    include '../../controllers/issueController.php';

    $issues = getAllIssue();
    session_start();
        if(!isset($_SESSION['loggedinuser']))
        {
            header("Location:../login.php");
        }

        
        $c_id = $_SESSION["loggedinuser"];
            
            
    if(isset($_POST['submit']))
            {
                
                
                    $x=rand(1,10000000);
                    $isid="I-".$x;
                    $comment=$_POST['comment'];

                    insertIssue($isid, $comment, $c_id);
                
            }
?>

<html>
    <head>
        <title>Issue</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/package_image/contact.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .footer {
                position: absolute;;
                left: 0;
                top: 750px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: rgb(216, 205, 205);
                
            }    
        </style>
        <script type="text/javascript">
            function validate() 
            {

                var error="";
                var chc="";
                var name = document.getElementById( "t1" );

            

            if( name.value == "" )
                {
                    error = " You Have To Write Issue ";
                            
                    document.getElementById( "na" ).innerHTML = error;

                    chc="ok";
                           
                }

            if( name.value != "" )
                {
                    if(!name.value.replace(/\s/g, '').length)
                        {
                            error = " Issue cannot be only space. ";
                            
                            document.getElementById( "na" ).innerHTML = error;
                            chc="ok";
                        }

                    else if(name.value.match(/^[a-zA-Z\s]+$/))
                        {
                            error = "";
                            
                            document.getElementById( "na" ).innerHTML = error;
                                    
                        }
                    
                            
                           
                }

                if(chc!="")
                    {   
                        return false;
                    }
                        
                else
                    {  
                        return true;
                    }
        }


            </script>
    </head>
    <body class="bg">
    
        <ul class="active">
        
        <li><a href="home.php">Home</a></li>
        <li><a href="Purchase history.php">Purchase history</a></li>
        <li><a href="delGuy List.php">Delivery Guy List</a></li>
        <li><a href="contact.php">Contact</a></li>
          </ul>

        <div style="position:absolute; top: 100px; left: 30px;">
           <font size="60"><h1>Feel free to contact with us regarding any issue</h1> </font>
        </div>  
        <form action="" method="post" onsubmit="return validate();">
            <table style="position:absolute; top: 200; left: 50px;">
                <tbody>
                    <tr>
                        <td align="right">ID:</td>
                        <td><input type="text" value="<?php echo $c_id?>" style="width: 300; height: 40;" placeholder="write your id" readonly></td>
                       
                    </tr>
        
                    <tr>
                        <td align="right">Comment:</td>
                        <td><input name="comment" id="t1" type="text" style="width: 450; height: 200;" placeholder="write your issue or thoughts"></td>
                        <td><span id="na" style="color:red"></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center"><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                    
                </tbody>
            </table>
        </form>  
        <form method="post" action="" enctype="multipart/form-data">
            
            <table border="1" style="position: absolute; top: 200; left: 700;">
                  <tbody>
                      <tr>
                          <td colspan='2'>Issue List</td>
                      </tr>
                        <tr>
                          <td>Id</td>
                          <td>Comment</td>
                          <td>Delivery Guy Id</td>
                          
                        </tr>
                        
                        <?php
                            foreach($issues as $issue)
                            {
                                echo "<tr>";
                                echo "<td>".$issue["r_id"]."</td>";
                                echo "<td>".$issue["comment"]."</td>";
                                echo "<td>".$issue["d_id"]."</td>";
                        
                                
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
