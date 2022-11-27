<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    
    <?php
    
        ini_set("display_errors",0);
        error_reporting(E_ALL);
        
        session_start();
   
        if($_SESSION["identifier"] != null && strlen($_SESSION['identifier']) <=10){
            
            echo'
                <head>
                    <title>Homepage</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=100%, initial-scale=1.0">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                    <link rel="stylesheet" href="css1.css">
                    <link rel="stylesheet" href="headerCSS.css">
                </head>


                <body class = "bgDesign"> 
                    <div class="header">
                        <a href="#default"><img src="images/logo.png" alt="forumLogo" width="90" height="90"></a>

                        <div class="header-right">
                            <a href="profile.php">Profile</a>
                            <a href="logout.php">Logout</a>   
                        </div>   

                        <br/>

                        <div class="header-left">
                            <a href="homepage.php">Home</a>
                            <a href="myForum.php">MyForum</a>
                            <a href="discover.php">Discover</a>
                            <a href="category.php">Categories</a>
                        </div>
                    </div>

                    <br/>

                    <div class = "borders">
                        <table border="0">
                            <tr>
                                <td><a href="postThread.php"><h3 style="margin-left: 45px; margin-top: 5px;">Start New Thread</h3></a></td>
                                <td><a href="subscribeTopic.php"><h3 style="margin-left: 45px; margin-top: 5px;">Subscribe to Topic</h3></a></td>
                            </tr>
                        </table>
                    </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
                </body>';
        }
        else if($_SESSION["identifier"] != null && (strlen($_SESSION['identifier'])) == 23){
            
            echo'
                <head>
                    <title>Homepage</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=100%, initial-scale=1.0">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                    <link rel="stylesheet" href="css1.css">
                    <link rel="stylesheet" href="headerCSS.css">
                </head>


                <body class = "bgDesign"> 
                    <div class="header">
                        <a href="#default"><img src="images/logo.png" alt="forumLogo" width="70" height="70"></a>

                        <div class="header-right">
                            <a href="logout.php">Logout</a>   
                        </div>   

                        <br/>

                        <div class="header-left">
                            <a href="adminDashboard.php">Home</a>
                            <a href="discover.php">Discover</a>
                            <a href="category.php">Categories</a>
                        </div>
                    </div>

                    <br/>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
                </body>';

        }
        else{
            echo'
                <head>
                    <title>Homepage</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=100%, initial-scale=1.0">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                    <link rel="stylesheet" href="css1.css">
                    <link rel="stylesheet" href="headerCSS.css">
                </head>


                <body class = "bgDesign"> 
                    <div class="header">
                        <a href="#default"><img src="images/logo.png" alt="forumLogo" width="70" height="70"></a>
                        
                        <div class="header-right">
                            <a href="login.php">Login</a>   
                        </div> 
                        
                        <br/>

                        <div class="header-left">
                            <a href="homepage.php">Home</a>
                            <a href="discover.php">Discover</a>
                        </div>
                    </div>

                    <br/>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
                </body>';
        }
    ?>
    
</html>

