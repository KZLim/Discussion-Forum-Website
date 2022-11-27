<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Admin::User Management</title>
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
        
        <div class ="formContainer" style="height: 700px">
            <h1>Action Performing: Users Ban and Unban</h1>

            <form action="userManagement.php" method="POST">

                <div class="input_field">
                    <input type="text" name="targetUsername" required>
                    <span></span>
                    <label>Target Username</label>
                </div>

                <div class="input_field">
                    <input type="text" name="violation" required>
                    <span></span>
                    <label>Violation</label>
                </div>

                Reasons <br/>
                <textarea rows="10" cols="40"></textarea><br/><br/>

                <input type="radio" value="lock" name="userStatus">BAN
                <input type="radio" value="clear" name="userStatus">UNBAN
                <br/>
                <br/>

                <input name="submitUserManagement" type="submit" value="Submit">

            </form>
        </div>
        
        <br/>
        <br/>
        
        <?php
            include'footer.php';
        ?>
        
        <?php

            if(isset($_POST['submitUserManagement'])){
                
                $targetUser = $_POST['targetUsername'];
                $judgement = $_POST["userStatus"];

                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");

                $result = mysqli_query($dbc,"SELECT * FROM useraccount WHERE username = '".$targetUser."'");
                $checkRecordExistence = mysqli_num_rows($result);

                if($checkRecordExistence > 0){
                    $query = mysqli_query($dbc,"UPDATE useraccount set status = '".$judgement."' WHERE username='".$targetUser."'");
                }
            }

        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
