<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css1.css">
        <link rel="stylesheet" href="headerCSS.css">
    </head>
    <body class="bgDesign">
        <?php
            include 'header.php';
        ?>
        <br/>
        
        <div>            
            <div class="formContainer" style="height: auto;">
                
                <h1 align="center">Contact Us</h1>
                
                <form action="contactUs.php" method="POST" style="margin: 10px; padding: 5px;">
                    
                    <div class="input_field">
                        <input type="email" name="email" required>
                        <span></span>
                        <label>Email:</label>
                    </div>
                   
                    <div class="input_field">
                        <input type="text" name="issueTitle" required>
                        <span></span>
                        <label>Issue:</label>
                    </div>
                    
                    <div>
                        Additional Messages: <br/>
                        <textarea name="issueMessage" id="issueMessage" rows="7" cols="43"></textarea>
                    </div>
                    
                    <input name="contactUsSubmit" type="submit" value="Submit">
                    
                    <p>Note: Please understand the high volume of request submitted as our admin team are doing their best to get
                   back to each help request. Thank You.</p>

                </form>
            </div>
        </div>
        
        <br/>
        <br/>
        
        <?php
        
            if(isset($_POST['contactUsSubmit'])){
                
                
                $dbc = mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");
                
                $email = $_POST['email'];
                $issue = $_POST['issueTitle'];
                $message = $_POST['issueMessage'];
                
                $query = mysqli_query($dbc,"INSERT INTO supportticket (email, issue, message)
                                 VALUES ('$email', '$issue', '$message')");
            }
        ?>
 
        <?php
            include'footer.php';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
