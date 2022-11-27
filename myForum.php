<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>My Forum</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css1.css">
        <link rel="stylesheet" href="headerCSS.css">
    </head>
    
    <body class ="bgDesign">
        <?php
            include 'header.php';
        ?>
        <br/>        
        
        <h1 align="center">My Forum:</h1>
        <br/>
        
        <?php
        
            $dbc = mysqli_connect("localhost","root","");
            mysqli_select_db($dbc,"forum");
            
            $query = mysqli_query($dbc,"SELECT * FROM forumcontent WHERE username='".$_SESSION["identifier"]."' ORDER BY forumID DESC");
        
            while ($row = $query->fetch_assoc()){
                
                $forumID = $row['forumID'];
                $title = $row['forumTitle'];
                $username = $row['username'];
                
                echo'<div class="card" style="height: auto; width:100%; margin:0px 0px 10px 0px;">
                    <div>
                        <table border="0"  style="margin-left: 5px;">
                            <tr>
                                <td><img src="images/chatBubble icon.gif" width="70px" height="70px"></td>
                                <td><a href="forum.php?forumID='.$forumID.'"><h2>'.$title.'<br/></h2><p>'.$username.'</p></a></td>
                            </tr>
                        </table>
                    </div>
                </div>';       
                
    
            }
        ?>
        
        <br/>
        <br/>
        <br/>
        
        <?php
            include'footer.php';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
