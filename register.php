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
        
        <script>
            function validateForm() {
                let password = document.forms["registerForm"]["password"].value;
                let confirmPassword = document.forms["registerForm"]["confirm_password"].value;
                let email = document.forms["registerForm"]["email_address"].value;

                if(!(password === confirmPassword)){
                    alert("Password and ConfirmPassword Are Not The Same");
                    return false;
                }
                
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
                    return true;
                }
                else{
                    alert("You have entered an invalid email address!");
                    return false;
                }
            }
        </script>
        
        
    </head>
    <body style="background-color: lightblue">
          
        <div class="pcView">        
            <div class="center">
                <form action="Forum_api/user/createAccount.php" name="registerForm" onsubmit="return validateForm()" method="post">
                    <h1>Register</h1>

                    <div class="input_field">
                        <input type="text" name="userName" required>
                        <span></span>
                        <label>Username</label>
                    </div>

                    <div class="input_field">
                        <input type="password" name="password" minlength="12" required>
                        <span></span>
                        <label>Password</label>
                    </div>

                    <div class="input_field">
                        <input type="password" name="confirm_password" required>
                        <span></span>
                        <label>Confirm Password</label>
                    </div>

                    <div class="input_field">
                        <input type="text" name="email_address" required>
                        <span></span>
                        <label>Email</label>
                    </div>

                    <input name="register" type="submit" value="Register">

                    <p>Already have an account? <a href="login.php">Login Now</a></p>
                </form>
            </div>
        </div>
        
        <div class="mobileItem">        
            <div class="center" style="width: 300px; height:auto;">
                <form action="Forum_api/user/createAccount.php" name="registerForm" onsubmit="return validateForm()" method="post">
                    <h1>Register</h1>

                    <div class="input_field">
                        <input type="text" name="userName" required>
                        <span></span>
                        <label>Username</label>
                    </div>

                    <div class="input_field">
                        <input type="password" name="password" required>
                        <span></span>
                        <label>Password</label>
                    </div>

                    <div class="input_field">
                        <input type="password" name="confirm_password" required>
                        <span></span>
                        <label>Confirm Password</label>
                    </div>

                    <div class="input_field" style="margin-bottom: -10px;">
                        <input type="text" name="email_address" required>
                        <span></span>
                        <label>Email</label>
                    </div>

                    <input name="register" type="submit" value="Register">

                    <p>Already have an account? <a href="login.php">Login Now</a></p>
                </form>
            </div>
        </div>        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>

