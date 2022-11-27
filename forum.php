<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Forum</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css1.css">
        <link rel="stylesheet" href="headerCSS.css">
    </head>
    
    <body class = "bgDesign">
        <?php
            include 'header.php';
        ?>
        <br/>
        
        <?php
        
            $packageID = $_GET['forumID'];
            
        
            $dbc = mysqli_connect("localhost","root","");
            mysqli_select_db($dbc,"forum");
            
            $query = mysqli_query($dbc,"SELECT * FROM forumcontent WHERE forumID='".$packageID."'");
            $query2 = mysqli_query($dbc,"SELECT * FROM commentcontent WHERE forumID='".$packageID."' ORDER BY commentID DESC");
            
            
            while ($row = $query->fetch_assoc()){
                
                $forumTitle = $row['forumTitle'];
                $forumDescription = $row['forumDescription'];
                $author = $row['username'];
                $dateCreated = $row['dateCreated'];

                echo'<div class="card" style="height: auto; width:100%; margin:0px 0px 10px 0px;">
                    <h2 style="margin: 15px;">'.$forumTitle.'</h2>
                    <h4 style="margin: 15px; margin-top:-10px;">'.$author.' | '.$dateCreated.'</h4>
                    <p style="margin: 15px;">'.$forumDescription.'</p>
                </div>'; 
            }
            
            if($_SESSION['identifier'] != null && (strlen($_SESSION['identifier']) <=10)){
                echo'<div>
                    <form action="postCommentProcess.php?forumID='.$packageID.'" method="post">
                        <div class="input_field">
                            <input type="text" name="comment" required>
                            <span></span>
                            <label>Post a comment..</label>
                        </div>
                        <input name="postComment" type="submit" value="Post" style="margin-top: -10px">
                    </form> 
                </div>';
            }
            
            echo"<h2>Comment Section:</h2>";
        
            while ($row = $query2->fetch_assoc()){
                
                $author = $row['username'];
                $comment = $row['comment'];
                $date = $row['datePosted'];
                
                echo'<div class="card" style="height: auto; width:100%; margin:0px 0px 10px 0px;">
                    <h3 style="margin: 15px;">'.$author.'</h3>
                    <p style="margin: 15px; margin-top:-10px;">'.$date.'</p>   
                    <p style="margin: 15px;">'.$comment.'</p>  
                </div>';
            }
        ?>
        <br/>
        <br/>
        
        <?php
            include'footer.php';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    </body>
</html>
