<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Edit Profile</title>
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
        
        <h1 align="center">Edit your Profile</h1>
        
        <br/>
        
        <div class="pcView">
            <div class="rows">
                <div class="column">
                    <div class = "formContainer" style="height: 310px">

                        <h2>Profile Picture Setting</h2>

                        <form action="editProfile.php" method="POST" enctype="multipart/form-data">

                            <div class="input_field">
                                Add or Change your profile picture here:<br/><br/>
                                <input type="file" name="profilePic_upload_pc"><br/>
                            </div>
                           
                            <input name="uploadProfilePicture_pc" type="submit" value="Upload Profile Picture">
                        </form> 
                    </div>
                </div>

                <div class ="column">
                    <div class = "formContainer" style="height: 360px">
                        <form action="editProfile.php" method="POST">

                            <h2>Edit Your Bio</h2>

                            <div>             
                                Bio: <br/>
                                <textarea name="bio_pc" id="bio_pc" rows="7" cols="50"></textarea>
                            </div>        

                          
                            <input name="editBio_pc" type="submit" value="Edit Bio">
                        </form> 

                    </div>
                </div>
            </div>
        </div>
        
        <div class="mobileItem">
            <div>
                <div>
                    <div class = "formContainer" style="height: 310px">

                        <h2>Profile Picture Setting</h2>

                        <form action="editProfile.php" method="POST" enctype="multipart/form-data">

                            <div class="input_field">
                                Add or Change your profile picture here:<br/><br/>
                                <input type="file" name="profilePic_upload_mobile"><br/>
                            </div>

                            <input name="uploadProfilePicture_mobile" type="submit" value="Upload Profile Picture">
                        </form> 
                    </div>
                </div>

                <br/>
                <br/>
                <hr>
                <br/>
                <br/>


                <div class>
                    <div class = "formContainer" style="height: 310px">
                        <form action="editProfile.php" method="POST">

                            <h2>Edit Your Bio</h2>

                            <div>             
                                Bio: <br/>
                                <textarea name="bio_mobile" id="bio_mobile" rows="5" cols="45"></textarea>
                            </div> 

                            <input name="editBio_mobile" type="submit" value="Edit Bio">
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
            
        
            //update bio computer group
            if(isset($_POST['editBio_pc'])){
                
                $dbc = mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");
                
                if(!empty($_POST['bio_pc'])){
                    
                    $bio = $_POST['bio_pc'];
                        
                    $query = "UPDATE userprofile set bio = '$bio' WHERE userName='".$_SESSION["identifier"]."'";
                    mysqli_query($dbc, $query);   
                }
            }
            
            //update profil pic computer group
            if(isset($_POST['uploadProfilePicture_pc'])){
                
                $dbc = mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");
                                
                if(!empty($_FILES['profilePic_upload_pc'])){
                    
                    $image_name = $_FILES['profilePic_upload_pc']['name'];
                    $tmp_name = $_FILES['profilePic_upload_pc']['tmp_name'];
                    $error = $_FILES['profilePic_upload_pc']['error'];
                    
                    if($error == 0){
                        
                        $img_upload_path = 'profileImages/'.$image_name;
                        move_uploaded_file($tmp_name,$img_upload_path);
                        
                        $query = "UPDATE userprofile set profilePicture = '$image_name' WHERE userName='".$_SESSION["identifier"]."'";
                        mysqli_query($dbc, $query);   
                    }
                }
            }
            
            //update bio computer group
            if(isset($_POST['editBio_mobile'])){
                
                $dbc = mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");
                
                if(!empty($_POST['bio_mobile'])){
                    
                    $bio = $_POST['bio_mobile'];
                        
                    $query = "UPDATE userprofile set bio = '$bio' WHERE userName='".$_SESSION["identifier"]."'";
                    mysqli_query($dbc, $query);   
                }
            }
            
            //update profile pic mobile group
            if(isset($_POST['uploadProfilePicture_mobile'])){
                
                $dbc = mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");
                                
                if(!empty($_FILES['profilePic_upload_mobile'])){
                    
                    $image_name = $_FILES['profilePic_upload_mobile']['name'];
                    $tmp_name = $_FILES['profilePic_upload_mobile']['tmp_name'];
                    $error = $_FILES['profilePic_upload_mobile']['error'];
                    
                    if($error == 0){
                        
                        $img_upload_path = 'profileImages/'.$image_name;
                        move_uploaded_file($tmp_name,$img_upload_path);
                        
                        $query = "UPDATE userprofile set profilePicture = '$image_name' WHERE userName='".$_SESSION["identifier"]."'";
                        mysqli_query($dbc, $query);   
                    }
                }
            }
        ?>
    
    </body>
</html>
