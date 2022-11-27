<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css1.css">
        <link rel="stylesheet" href="login.css">
        
        
    </head>
    
    <body style="background-color: lightblue">
        
            
        <div class="pcView">
            <div class="center">
                <form action="Forum_api/user/readCredential.php" name="loginForm" onsubmit="return validateForm()" method="post">

                    <h1>Login</h1>
                    
                    <div class="input_field">
                        <input name="userName" type="text" required>
                        <span></span>
                        <label>Username</label>
                    </div>
                    
                    <div class="input_field">
                        <input name="password" type="password" required>
                        <span></span>
                        <label>Password</label>
                    </div>
                    
                
                   
                    <input name="signin" type="submit" value="Login">
                    
                    <a href="forgotPassword.php">Forgot Password</a>
                    <p>Do not have an account? <a href="register.php">Register Now</a></p>

                </form>
            </div>
        </div>
        
        <div class="mobileItem">
            <div class="center" style="width:320px;">
                <form action="Forum_api/user/readCredential.php" name="loginForm" onsubmit="return validateForm()" method="post">

                    <h1>Login</h1>
                    
                    <div class="input_field">
                        <input name="userName" type="text" required>
                        <span></span>
                        <label>Username</label>
                    </div>
                    
                    <div class="input_field">
                        <input name="password" type="password" required>
                        <span></span>
                        <label>Password</label>
                    </div>
           
                    <input name="signin" type="submit" value="Login">
                    
                    <a href="forgotPassword.php">Forgot Password</a>
                    <p>Do not have an account? <a href="register.php">Register Now</a></p>

                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>

