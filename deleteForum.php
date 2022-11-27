<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Admin::Delete Forum</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css1.css">
        <link rel="stylesheet" href="headerCSS.css">

        <script>
            function validateForm() {
                let forumID = document.forms["deleteForm"]["forumID"].value;
                if(isNaN(forumID)){
                    alert("Forum ID must be NUMERIC ONLY");
                    return false;
                }
            }
        </script>
    </head>
    <body class ="bgDesign">
        <?php
            include 'header.php';
        ?>
        <br/>
        
        <br/>
        <br/>
        <br/>
        
        
        <div class ="formContainer" style="height: auto">
            <h1>Action Performing: Forum Deletion</h1>

            <form action="deleteForum.php" method="POST" name="deleteForm" onsubmit=" return validateForm()" style="margin: 5px;">
                <div class="input_field">
                    <input type="text" name="forumID" required>
                    <span></span>
                    <label>Forum ID</label>
                </div>

                <div class="input_field">
                    <input type="text" name="violation" required>
                    <span></span>
                    <label>Violation</label>
                </div>

                Reasons <br/>
                <textarea rows="10" cols="40" required></textarea><br/><br/>

                <input name="deleteForum" type="submit" value="Delete Forum">

            </form>
        </div>
        
        <br/>
        <br/>
        
        <?php
            include'footer.php';
        ?>
        
        <?php
        
            if(isset($_POST['deleteForum'])){
                
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");
                
                $targetID = $_POST['forumID'];
                
                $result = mysqli_query($dbc,"DELETE FROM forumcontent WHERE forumID = '".$targetID."'");
                
            }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
