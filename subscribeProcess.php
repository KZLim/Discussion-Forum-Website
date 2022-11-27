<?php

    echo'<script>
            function redirection(){
                window.location.href = "http://localhost/DiscussionForumWebsite/public_html/subscribeTopic.php";
            }
        </script>';
    
    session_start();
    $user = $_SESSION['identifier'];
    
    $category = $_GET['category'];
    
    $dbc=mysqli_connect("localhost","root","");
    mysqli_select_db($dbc,"forum");
                
    $result = mysqli_query($dbc,"INSERT INTO usersubscribe (username, topicSubscribe)
                            VALUES ('$user', '$category')");
    
    echo"<script> redirection() </script>";

    
?>
