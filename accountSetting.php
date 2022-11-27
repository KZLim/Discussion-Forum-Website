<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Account Setting</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css1.css">
    </head>
    
    <body class = "bgDesign">
        <?php
            include 'header.php';
        ?>
        </div>
        
        <br/>
        
        <h1 align="center">Account Settings</h1>
        
        <br/>
       
        <!-- It is using the newsletter class from the css-->
        <div class="pcView">
            <div class="rows">
                <div class="column">
                    <div class = "formContainer" style="height: auto">

                        <h2>Change Password</h2>

                        <form action="accountSetting.php" method="POST">

                            <div class="input_field">
                                <input type="text" name="currentPassword_pc" required>
                                <span></span>
                                <label>Current Password</label>
                            </div>

                            <div class="input_field">
                                <input type="text" name="newPassword_pc" required>
                                <span></span>
                                <label>New Password</label>
                            </div>

                            <div class="input_field">
                                <input type="text" name="confirmNewPassword_pc" required>
                                <span></span>
                                <label>Confirm New Password</label>
                            </div>


                            <input name="changePassword_pc" type="submit" value="Change Password" style="margin-top: -10px; margin-bottom: 10px;">
                        </form> 
                    </div>
                </div>

                <div class ="column">
                    <div class = "formContainer" style="height: auto">
                        <form action="accountSetting.php" method="POST">

                            <h2>Change Email</h2>

                            <div class="input_field">             
                                <input type="text" name="newEmail_pc" required>
                                <span></span>
                                <label>New Email</label>
                            </div>        

                            <div class="input_field">
                                <input type="text" name="password_pc" required>
                                <span></span>
                                <label>Password</label>
                            </div>        

                            <input name="changeEmail_pc" type="submit" value="Change Email" style="margin-top: -10px; margin-bottom: 10px;">
                        </form> 

                    </div>
                </div>
            </div>
        </div>
        
        
        <!--This part of code is for the mobile view only-->
        <div class="mobileItem">
            <div>
                <div>
                    <div class = "formContainer" style="height: auto">

                        <h2>Change Password</h2>

                        <form action="accountSetting.php" method="POST">

                            <div class="input_field">
                                <input type="text" name="currentPassword_mobile" required>
                                <span></span>
                                <label>Current Password</label>
                            </div>

                            <div class="input_field">
                                <input type="text" name="newPassword_mobile" required>
                                <span></span>
                                <label>New Password</label>
                            </div>

                            <div class="input_field">
                                <input type="text" name="confirmNewPassword_mobile" required>
                                <span></span>
                                <label>Confirm New Password</label>
                            </div>


                            <input name="changePassword_mobile" type="submit" value="Change Password" style="margin-top: -10px; margin-bottom: 10px;">
                        </form> 
                    </div>
                </div>

                <br/>
                <br/>
                <hr>
                <br/>
                <br/>


                <div class>
                    <div class = "formContainer" style="height: atuo">
                        <form action="accountSetting.php" method="POST">

                            <h2>Change Email</h2>

                            <div class="input_field">             
                                <input type="text" name="newEmail_mobile" required>
                                <span></span>
                                <label>New Email</label>
                            </div>        

                            <div class="input_field">
                                <input type="text" name="password_mobile" required>
                                <span></span>
                                <label>Password</label>
                            </div>        

                            <input name="changeEmail_mobile" type="submit" value="Change Email" style="margin-top: -10px; margin-bottom: 10px;">
                        </form> 

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
    
        <?php
        
            if(isset($_POST['changeEmail_mobile'])){
                
                $password = $_POST['password_mobile'];
                $newEmail = $_POST['newEmail_mobile'];
                
                $dbc = mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");

                $query = mysqli_query($dbc,"SELECT password FROM useraccount WHERE username='".$_SESSION["identifier"]."'");
                   
                while ($row = $query->fetch_assoc()){
                    $passwordDB = $row['password'];
                }                
                
                if($password == $passwordDB){
                    if(!empty($_POST['newEmail_mobile'])){
                        
                        $query = "UPDATE useraccount set email = '$newEmail' WHERE username='".$_SESSION["identifier"]."'";
                        mysqli_query($dbc, $query);
      
                    }
                }
            }
            
            if(isset($_POST['changePassword_mobile'])){
                
                $dbc = mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");

                $query = mysqli_query($dbc,"SELECT password FROM useraccount WHERE username='".$_SESSION["identifier"]."'");
                   
                while ($row = $query->fetch_assoc()){
                    $passwordDB = $row['password'];
                }                
                
                if((!empty($_POST['currentPassword_mobile'])) && (!empty($_POST['newPassword_mobile'])) && (!empty($_POST['confirmNewPassword_mobile']))){
                    
                    $currentPassword = $_POST['currentPassword_mobile'];
                    $temp = $_POST['newPassword_mobile'];
                    $confirmNewPassword = $_POST['confirmNewPassword_mobile'];
                    
                    $verify = password_verify($currentPassword, $passwordDB);
                    
                    if($verify){
                        if($temp == $confirmNewPassword){  
                            $newPassword = (password_hash($temp, PASSWORD_DEFAULT));
                            $query = "UPDATE useraccount set password = '$newPassword' WHERE username='".$_SESSION["identifier"]."'";
                            mysqli_query($dbc, $query);  
                        }
                    } 
                }
            }
   
            if(isset($_POST['changeEmail_pc'])){
                
                $password = $_POST['password_pc'];
                $newEmail = $_POST['newEmail_pc'];
                
                $dbc = mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");

                $query = mysqli_query($dbc,"SELECT password FROM useraccount WHERE username='".$_SESSION["identifier"]."'");
                   
                while ($row = $query->fetch_assoc()){
                    $passwordDB = $row['password'];
                }                
                
                if($password == $passwordDB){
                    if(!empty($_POST['newEmail_pc'])){
                        
                        $query = "UPDATE useraccount set email = '$newEmail' WHERE username='".$_SESSION["identifier"]."'";
                        mysqli_query($dbc, $query);
      
                    }
                }
            }
        
            if(isset($_POST['changePassword_pc'])){
                
                $dbc = mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");

                $query = mysqli_query($dbc,"SELECT password FROM useraccount WHERE username='".$_SESSION["identifier"]."'");
                   
                while ($row = $query->fetch_assoc()){
                    $passwordDB = $row['password'];
                }                
                
                if((!empty($_POST['currentPassword_pc'])) && (!empty($_POST['newPassword_pc'])) && (!empty($_POST['confirmNewPassword_pc']))){
                    
                    $currentPassword = $_POST['currentPassword_pc'];
                    $temp = $_POST['newPassword_pc'];
                    $confirmNewPassword = $_POST['confirmNewPassword_pc'];
                    
                    $verify = password_verify($currentPassword, $passwordDB);
                    
                    if($verify){
                        if($temp == $confirmNewPassword){  
                            $newPassword = (password_hash($temp, PASSWORD_DEFAULT));
                            $query = "UPDATE useraccount set password = '$newPassword' WHERE username='".$_SESSION["identifier"]."'";
                            mysqli_query($dbc, $query);  
                        }
                    } 
                }
            }
        ?>

    </body>
</html>
