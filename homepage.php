<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Homepage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=100%, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css1.css">
        <link rel="stylesheet" href="headerCSS.css">
        
        <?php
            include 'header.php';
        ?>
    </head>
    
    
    <body class = "bgDesign">
        <!-- These below are the code for the statistic field pc version-->
        
        <?php
            session_start();
        ?>
        
        <?php
        
            $categoryTopArray[2];
            $counter=0;
        
            $dbc = mysqli_connect("localhost","root","");
            
            mysqli_select_db($dbc,"forum");
            
            $categoryTop = mysqli_query($dbc,"SELECT forumCategory FROM forumcontent GROUP BY  forumCategory ORDER BY count(forumCategory) DESC LIMIT 2");                    
            $totalUser = mysqli_query($dbc,"SELECT COUNT(username) as userCount FROM useraccount");
            $totalThread = mysqli_query($dbc,"SELECT COUNT(forumTitle) as forumCount FROM forumcontent");
            
            while($row = mysqli_fetch_assoc($totalUser)){
                
                $total2 = $row['userCount'];

            }
            
            while($row = mysqli_fetch_assoc($totalThread)){
                
                $total = $row['forumCount'];

            }
            
            while($row = mysqli_fetch_assoc($categoryTop)){
                
                $categoryTopArray[$counter] = $row['forumCategory'];
                $counter++;

            }
            
            echo'<div class="pcView">
                    <table border="0" align="center">
                        <tr>
                            <td>
                                <div class="card" style="height: 310px;">
                                    <img src="images/graph icon.gif" alt="Avatar" style="padding: 45px;">
                                    <div class="container">
                                        <h4 align="center"><b>Total Thread In Forum</b></h4>'; 
                                            echo"<p align=\"center\">$total</p>" ;
                                    echo'</div>
                                </div>
                            </td>

                            <td>
                                <div class="card" style="height: 310px;">
                                    <img src="images/user ani icon.gif" alt="Avatar" style="padding: 45px;">
                                    <div class="container">
                                        <h4 align="center"><b>Total User</b></h4>'; 
                                            echo"<p align=\"center\">$total2</p>";
                                    echo'</div>
                                </div>  
                            </td>

                            <td>
                                <div class="card" style="height: 310px;">
                                    <img src="images/graph2 icon.gif" alt="Avatar" style="padding: 45px;">
                                    <div class="container" style="margin-top: 10px;">
                                        <h4 align="center"><b>Most Discussed Topic</b></h4>'; 
                                            echo"<p align=\"center\">$categoryTopArray[0]</p>";
                                    echo'</div>
                                </div>  
                            </td>

                            <td>
                                <div class="card" style="height: 310px;">
                                    <img src="images/discussion icon.gif" alt="Avatar" style="padding: 45px;">
                                    <div class="container" style="margin-top: -5px;">
                                        <h4 align="center"><b>2nd Most Discussed Topic</b></h4>'; 
                                            echo"<p align=\"center\">$categoryTopArray[1]</p>"; 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>   
                    </table>      
            </div>

            <br/>';

            echo'<div class="mobileItem">
                <div class="formContainer" style="height: auto; padding:10px;">
                    <h1>Statistic</h1>
                                                
                     <div class="card>
                        <div class="container" style="margin-top: -5px;">';
                            echo"<p align=\"left\">Total Thread In Forum: $total</p>"; 
                            echo"<p align=\"left\">Total User: $total2</p>"; 
                            echo"<p align=\"left\">Most Discussed Topic: $categoryTopArray[0]</p>"; 
                            echo"<p align=\"left\">2nd Discussed Topic: $categoryTopArray[1]</p>"; 

                        echo'</div>
                    </div>     
                </div>  
                <br/>
            </div>';
        ?>
        
        <?php
            //This is the php code for recommendation on the homepage.
            $dbc = mysqli_connect("localhost","root","");
            mysqli_select_db($dbc,"forum");
            
            $query = mysqli_query($dbc,"SELECT * FROM forumcontent ORDER BY RAND() LIMIT 5");
            
            echo'<h1>Recommendation:</h1>';
            
            while ($row = $query->fetch_assoc()){

                $forumID = $row['forumID'];
                $title = $row['forumTitle'];
                $username = $row['username'];
        
                echo'<div class="card" style="height: auto; width:100%; margin:0px 0px 10px 0px;">
                    <div>
                        <table border="0"  style="margin-left: 5px;">
                            <tr>
                                <td><img src="images/chatBubble icon.gif" width="70px" height="70px"></td>
                                    <td><a href="forum.php?forumID='.$forumID.'"><h2>'.$title.'<br/></h2><p>'.$username.'</p></a></td>
                            </tr>
                        </table>
                    </div>
                </div>';
            }
        ?>
        
        <?php
            
            if($_SESSION['identifier'] != null){
                echo"<br/>";
                echo"<br/>";
                echo'<h1>Based On What You Liked: </h1>';
            }
        
            $query2= mysqli_query($dbc,"SELECT topicSubscribe FROM usersubscribe WHERE username='".$_SESSION['identifier']."' ORDER BY RAND() LIMIT 5");
        
            $subscribeArray[5];
            $counter = 0;
            $checkRecordExistence = mysqli_num_rows($query2);

       
            if($checkRecordExistence > 0){
                while ($row = $query2->fetch_assoc()){
                    
                    $subscribeArray[$counter] = $row['topicSubscribe'];
                    $counter++;
                }
            }
            
            $query3 = mysqli_query($dbc,"SELECT * FROM forumcontent WHERE forumCategory IN ('".$subscribeArray[0]."','".$subscribeArray[1]."','".$subscribeArray[2]."',"
                    . "'".$subscribeArray[3]."','".$subscribeArray[4]."')");

        
            while ($row = $query3->fetch_assoc()){
                
                $forumID = $row['forumID'];
                $title = $row['forumTitle'];
                $username = $row['username'];
                
                echo'<div class="card" style="height: auto; width:100%; margin:0px 0px 10px 0px;">
                       <div>
                           <table border="0"  style="margin-left: 5px;">
                               <tr>
                                   <td><img src="images/chatBubble icon.gif" width="70px" height="70px"></td>
                                       <td><a href="forum.php?forumID='.$forumID.'"><h2>'.$title.'<br/></h2><p>'.$username.'</p></a></td>
                               </tr>
                           </table>
                       </div>
                   </div>';
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
