<?php
    
    $email = $_POST['email'];
    
    $dbc = mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"forum");
              
                
    $query = mysqli_query($dbc,"INSERT INTO newsletter (subscriberEmail)
                        VALUES ('$email')");


    echo'<script>alert("Welcome To Our Newsletter)</script>';
    echo'<script>window.location.href = "http://localhost/DiscussionForumWebsite/public_html/homepage.php"</script>';

?>
