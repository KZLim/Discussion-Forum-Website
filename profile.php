<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Profile</title>
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
        
        <?php
            session_start();
            
            //This is the php code for recommendation on the homepage.
            $dbc = mysqli_connect("localhost","root","");
            mysqli_select_db($dbc,"forum");
            
            $query = mysqli_query($dbc,"SELECT * FROM userprofile WHERE userName='".$_SESSION["identifier"]."'");
                        
            while ($row = $query->fetch_assoc()){

                $username = $row['userName'];
                $bio = $row['bio'];
                $profilePicture = $row['profilePicture'];
                
                echo'<div align="center" class="formContainer" style="height: auto; padding: 15px;">';
            
                    echo'<img src="profileImages/';
                    echo$profilePicture;
                    echo'"width="300" height="300">';
                    
                    echo'<h3>Username: '.$username.'</h3>';
                    echo'<h3>Bio: '.$bio.'</h3>';
                    
                    echo'<a href="editProfile.php"><input name="edit_profile" type="submit" value="Edit Profile" ></a>
                    <br/>
                    <a href="accountSetting.php"><input name="account_setting" type="submit" value="Account Settings" style="margin-top: -10px;"></a>';
  
                echo'</div>';
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
