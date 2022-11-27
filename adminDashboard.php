<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Admin Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css1.css">
        <link rel="stylesheet" href="headerCSS.css">
        <link rel="stylesheet" href="categoryCSS.css">
    </head>
    
    <body class ="bgDesign">
        <?php
            include 'header.php';
        ?>
        <br/>
 
        <br/>
        <br/>
        
        <h1 align="center">Admin Dashboard Action:</h1>
        
        <div class="row_2">
            <div class="column_2">
                <div class="card">
                    <img src="images/delete icon.png" alt="Avatar" width="250" height="250">
                    <div class="container">
                        <a href="deleteForum.php" class="link-dark"><h4><b>Delete Forum</b></h4> 
                        <p>The Power to Delete Any Forum on the website from the database. Admin Use It With A Thousand Care.</p></a>
                    </div>
                </div>
            </div>
               
            <div class="column_2">
                <div class="card">
                    <img src="images/query icon.png" alt="Avatar" width="250" height="250">
                    <div class="container">
                        <a href="forumLookUp.php" class="link-dark"><h4><b>Query Forum</b></h4> 
                        <p>The Power to look up the forum ID using the forum name and author name.</p></a>
                    </div>
                </div>
            </div>
  
            <div class="column_2">
                <div class="card">
                    <img src="images/user management icon.png" alt="Avatar" width="250" height="250">
                    <div class="container">
                        <a href="userManagement.php" class="link-dark"><h4><b>User Management</b></h4> 
                        <p>The power to ban and unban any user from the forum using their username. Admin use it caution.</p></a>
                    </div>
                </div>
            </div>
  
            <div class="column_2">
                <div class="card">
                    <img src="images/load forum icon.png" alt="Avatar" style="padding: 20px;">
                    <div class="container">
                        <a href="loadForum.php" class="link-dark"><h4><b>Load Forum</b></h4> 
                        <p>The power to load the forum after looking up the forum id through the admin features.</p></a>
                    </div>
                </div>
            </div>
        </div>
            
        <br/>
        <br/>
       
        <?php
            include'footer.php';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
