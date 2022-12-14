<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Admin::Query Forum</title>
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
        
        <br/>
        <br/>
        <br/>
        
            <div class ="formContainer" style="height: auto;">
                <h1>Action Performing: Query Forum</h1>

                <form action="forumLookUp.php" method="POST">

                    <div class="input_field">
                        <input type="text" name="targetForumTitle" required>
                        <span></span>
                        <label>Forum Title</label>
                    </div>

                    <div class="input_field">
                        <input type="text" name="author" required>
                        <span></span>
                        <label>Author</label>
                    </div>

                    <input name="forumSearch" type="submit" value="Query">

                </form>
            </div>
 
        <br/>
        <br/>
        
        <?php
            include'footer.php';
        ?>
        
        <?php
            
            if(isset($_POST['forumSearch'])){
                                
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");
                
                $title = $_POST['targetForumTitle'];
                $author = $_POST['author'];

                $result = mysqli_query($dbc,"SELECT * FROM forumcontent WHERE forumTitle = '".$title."' AND username = '".$author."'");
                $checkRecordExistence = mysqli_num_rows($result);
                
                if($checkRecordExistence > 0){
                    while ($row = $result->fetch_assoc()){
                        $id = $row['forumID'];
                        $title = $row['forumTitle'];
                        $owner = $row['username'];
                    }
                }
                
                echo '<script>alert("The ID for that Forum is: '.$id.'\n\n'
                        . 'The Title is: '.$title.'\n\n'
                        . 'The Author is: '.$owner.'")</script>';
            }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
