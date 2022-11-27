<?php
      
    $packageID = $_GET['forumID'];
    
    echo'<script>
            function redirection(){
                window.location.href = "http://localhost/DiscussionForumWebsite/public_html/forum.php?forumID=" + '.$packageID.';
            }
        </script>';
    
    if(isset($_POST['postComment'])){
        
        echo"<script> redirection();</script>";
               
        $dbc = mysqli_connect("localhost","root","");
        mysqli_select_db($dbc,"forum");
                
        session_start();
 
        $comment = htmlentities($_POST['comment'],ENT_IGNORE, "UTF-8");
        $author = $_SESSION['identifier'];
        $date = date("Y-m-d");
                
        $query3 = mysqli_query($dbc,"INSERT INTO commentcontent (comment, username,forumID, datePosted)
                                 VALUES ('$comment', '$author', '$packageID', '$date')");
                
    } 
    
    echo"<script> redirection() </script>";
          
?>


