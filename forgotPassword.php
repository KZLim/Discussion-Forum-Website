<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css1.css">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="headerCSS.css">
    </head>
    <body style="background-color: lightblue">
        
        <div class="pcView">
            <div class="center">
                <form action="forgotPassword.php" method="POST">

                    <h1>Password Reset</h1>

                    <div class="input_field">
                        <input type="text" name="userName" required>
                        <span></span>
                        <label>Username</label>
                    </div>

                    <div class="input_field">
                        <input type="email" name="emailUsed" required>
                        <span></span>
                        <label>Email Used</label>
                    </div>

                    <div class="input_field">
                        <input type="password" name="newPassword" required>
                        <span></span>
                        <label>New Password</label>
                    </div>

                    <div class="input_field">
                        <input type="password" name="confirmPassword" required>
                        <span></span>
                        <label>Confirm Password</label>
                    </div>

                    <a href="login.php">Back To Login</a>
                    <input name="resetPassword" type="submit" value="Reset">
                </form>
            </div>
        </div>
        
        <div class="mobileItem">
            <div class="center" style="width: 310px;">
                <form action="forgotPassword.php" method="POST">

                    <h1>Password Reset</h1>

                    <div class="input_field">
                        <input type="text" name="userName" required>
                        <span></span>
                        <label>Username</label>
                    </div>

                    <div class="input_field">
                        <input type="email" name="emailUsed" required>
                        <span></span>
                        <label>Email Used</label>
                    </div>

                    <div class="input_field">
                        <input type="password" name="newPassword" minlength="12" required>
                        <span></span>
                        <label>New Password</label>
                    </div>

                    <div class="input_field">
                        <input type="password" name="confirmPassword" required>
                        <span></span>
                        <label>Confirm Password</label>
                    </div>

                    <a href="login.php">Back To Login</a>
                    <input name="resetPassword" type="submit" value="Reset">
                </form>
            </div>
        </div>
        
        <?php
        
            if(isset($_POST["resetPassword"])){
                
                $username = $_POST['userName'];
                $newPassword = $_POST['newPassword'];
                $confirmPassword = $_POST['confirmPassword'];
                $email = $_POST['emailUsed'];
                
                
                $dbc = mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");

                $query = mysqli_query($dbc,"SELECT * FROM useraccount WHERE username='".$username."'");
                $checkRecordExistence = mysqli_num_rows($query);
                
                if($checkRecordExistence > 0){ 
                    
                    while ($row = $query->fetch_assoc()){
                        $emailDB = $row["email"];
                    }

                    if($email == $emailDB){
                        if($newPassword == $confirmPassword){
                            $query = mysqli_query($dbc, "UPDATE useraccount SET password = '".(password_hash($newPassword, PASSWORD_DEFAULT))."'WHERE username = '".$username."'");
                            echo'<script>alert("Password Reset Successfully.")</script>';
                            echo'<script>window.location.href = "http://localhost/DiscussionForumWebsite/public_html/login.php";
                                 </script>';
                        }
                        else{
                            echo'<script>alert("New Password and Confirm Does Not Match")</script>';
                        }
                    }
                    else{
                            echo'<script>alert("Email Incorrect. Verification Failed")</script>';
                    }
                        
                }
            }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
