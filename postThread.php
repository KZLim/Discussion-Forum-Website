<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>New Thread</title>
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
        <br/>
        <br/>
        
        
        <div class = "formContainer" style = "height: auto">
            <h1>Write A New Thread:</h1>
            
            <form action="postThread.php" method="post">
                <div class="input_field">
                    <input type="text" name="title" required>
                    <span></span>
                    <label>Title</label>
                </div>

                Select Category for your forum:
                <select id="category" name="category">
                    <option value="photography">Photography</option>
                    <option value="Science">Science</option>
                    <option value="technology">Technology</option>
                    <option value="politics">Politics</option>
                    <option value="movie">Movie</option>
                    <option value="sports">Sports</option>
                    <option value="cars">Cars</option>
                    <option value="games">Games</option>
                    <option value="crafts">Crafts</option>
                    <option value="music">Music</option>
                    <option value="travel">Travel</option>
                    <option value="books">Books</option>
                    <option value="anime">Anime</option>
                    <option value="manga">Manga</option>
                    <option value="astronomy">Astronomy</option>
                    <option value="art">Art</option>
                    <option value="history">History</option>
                    <option value="programming">Programming</option>
                </select>

                <br/>
                <br/>

                Description: <br/>
                <textarea name="description" rows="10" cols="50"></textarea><br/><br/>

                <input name="postThread" type="submit" value="Post">
            </form>  
        </div>
        
        <br/>
        <br/>
        
        <?php
            include'footer.php';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
        <?php
            
            echo'<script>
                    function postedAlert(){
                        alert("Your Thread Has Been Posted");
                        window.location.href="myForum.php";
                    }
                </script>';
        
        
            if(isset($_POST['postThread'])){

                $title = htmlentities($_POST['title'],ENT_IGNORE, "UTF-8");
                $description = htmlentities($_POST['description'],ENT_IGNORE, "UTF-8");
                $category = $_POST['category'];
                $author = $_SESSION['identifier'];
                $date = date("Y-m-d");
               
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");
                
                $result = mysqli_query($dbc,"INSERT INTO forumcontent (forumTitle, forumDescription,forumCategory, username,dateCreated)
                                        VALUES ('$title', '$description', '$category', '$author', '$date')");
                
                echo"<script> postedAlert(); </script>";
            }
        ?>
    </body>
</html>
