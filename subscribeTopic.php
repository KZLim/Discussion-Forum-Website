<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Subscribe To A Topic</title>
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
        
        <br/>
        <br/>
        
        <?php
        
            $subscribeArray[18];
            $counter = 0;
        
            $dbc = mysqli_connect("localhost","root","");
            mysqli_select_db($dbc,"forum");
            
            $query = mysqli_query($dbc,"SELECT * FROM usersubscribe WHERE username='".$_SESSION['identifier']."'");
            $checkRecordExistence = mysqli_num_rows($query);
       
            if($checkRecordExistence > 0){
                while ($row = $query->fetch_assoc()){
                    
                    $subscribeArray[$counter] = $row['topicSubscribe'];
                    $counter++;
                }
            }
            
            echo'<div class="pcView">';
                echo'<h1 align="center">Subscribe to a topic</h1>';
                echo'<table border="0" align="center">
                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/photography icon.png" alt="Avatar" style="padding: 45px;">
                                    <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=photography" class="link-dark"><h2><b>Photography</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("photography",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=photography" class="link-dark"><h2><b>Photography</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("photography",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=photography" class="link-dark"><h2><b>Photography</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }           
                                    echo'</div>
                                </div>
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/science icon.png" alt="Avatar" style="padding: 45px;">
                                    <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=science" class="link-dark"><h2><b>Science</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("science",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=science" class="link-dark"><h2><b>Science</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("science",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=science" class="link-dark"><h2><b>Science</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }        
                                    echo'</div>
                                </div>  
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/technology icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=technology" class="link-dark"><h2><b>Technology</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("technology",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=technology" class="link-dark"><h2><b>Technology</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("technology",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=technology" class="link-dark"><h2><b>Technology</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }       
                                    echo'</div>
                                </div>  
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/politics icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=politics" class="link-dark"><h2><b>Politics</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("politics",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=politics" class="link-dark"><h2><b>Politics</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("politics",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=politics" class="link-dark"><h2><b>Politics</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }    
                                    echo'</div>
                                </div>  
                            </td>


                        </tr>  

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/movies icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=movie" class="link-dark"><h2><b>Movies</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("movie",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=movie" class="link-dark"><h2><b>Movies</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("movie",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=movie" class="link-dark"><h2><b>Movies</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/sports icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                         if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=sports" class="link-dark"><h2><b>Sports</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("sports",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=sports" class="link-dark"><h2><b>Sports</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("sports",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=sports" class="link-dark"><h2><b>Sports</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>  
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/car icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=cars" class="link-dark"><h2><b>Cars</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("cars",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=cars" class="link-dark"><h2><b>Cars</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("cars",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=cars" class="link-dark"><h2><b>Cars</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>  
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/games icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=games" class="link-dark"><h2><b>Games</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("games",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=games" class="link-dark"><h2><b>Games</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("games",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=games" class="link-dark"><h2><b>Games</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/crafts icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=crafts" class="link-dark"><h2><b>Crafts</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("crafts",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=crafts" class="link-dark"><h2><b>Crafts</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("crafts",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=crafts" class="link-dark"><h2><b>Crafts</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/music icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=music" class="link-dark"><h2><b>Music</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("music",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=music" class="link-dark"><h2><b>Music</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("music",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=music" class="link-dark"><h2><b>Music</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>  
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/travel icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=travel" class="link-dark"><h2><b>Travel</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("travel",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=travel" class="link-dark"><h2><b>Travel</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("travel",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=travel" class="link-dark"><h2><b>Travel</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }    
                                    echo'</div>
                                </div>  
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/books icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=books" class="link-dark"><h2><b>Books</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("books",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=books" class="link-dark"><h2><b>Books</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("books",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=books" class="link-dark"><h2><b>Books</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/anime icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=anime" class="link-dark"><h2><b>Anime</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("anime",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=anime" class="link-dark"><h2><b>Anime</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("anime",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=anime" class="link-dark"><h2><b>Anime</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/manga icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=manga" class="link-dark"><h2><b>Manga</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("manga",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=manga" class="link-dark"><h2><b>Manga</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("manga",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=manga" class="link-dark"><h2><b>Manga</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>  
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/astronomy icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=astronomy" class="link-dark"><h2><b>Astronomy</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("astronomy",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=astronomy" class="link-dark"><h2><b>Astronomy</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("astrnomy",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=astronomy" class="link-dark"><h2><b>Astronomy</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>  
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/art icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=art" class="link-dark"><h2><b>Art</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("art",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=art" class="link-dark"><h2><b>Art</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("art",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=art" class="link-dark"><h2><b>Art</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <div class="card">
                                    <img src="images/history icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=history" class="link-dark"><h2><b>History</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("history",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=history" class="link-dark"><h2><b>History</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("history",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=history" class="link-dark"><h2><b>History</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>
                            </td>

                            <td>
                                <div class="card">
                                    <img src="images/programming icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=programming" class="link-dark"><h2><b>Programming</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("programming",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=programming" class="link-dark"><h2><b>Programming</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("programming",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=programming" class="link-dark"><h2><b>Programming</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }     
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>         
                    </table>';
                echo'</div>';
        ?>
        
        <?php
        
            echo'<div class="mobileItem">';

                echo'<h1 align="center">Subscribe to a topic</h1>';

                    echo'<table border="0" align="center">
                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/photography icon.png" alt="Avatar" style="padding: 45px;">
                                    <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=photography" class="link-dark"><h2><b>Photography</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("photography",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=photography" class="link-dark"><h2><b>Photography</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("photography",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=photography" class="link-dark"><h2><b>Photography</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }  
                                    echo'</div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/science icon.png" alt="Avatar" style="padding: 45px;">
                                    <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=science" class="link-dark"><h2><b>Science</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("science",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=science" class="link-dark"><h2><b>Science</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("science",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=science" class="link-dark"><h2><b>Science</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/technology icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=technology" class="link-dark"><h2><b>Technology</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("technology",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=technology" class="link-dark"><h2><b>Technology</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("technology",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=technology" class="link-dark"><h2><b>Technology</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/politics icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=politics" class="link-dark"><h2><b>Politics</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("politics",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=politics" class="link-dark"><h2><b>Politics</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("politics",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=politics" class="link-dark"><h2><b>Politics</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>    

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/movies icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=movie" class="link-dark"><h2><b>Movie</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("movie",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=movie" class="link-dark"><h2><b>Movie</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("movie",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=movie" class="link-dark"><h2><b>Movie</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/sports icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=sports" class="link-dark"><h2><b>Sports</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("sports",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=sports" class="link-dark"><h2><b>Sports</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("sports",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=sports" class="link-dark"><h2><b>Sports</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/car icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=cars" class="link-dark"><h2><b>Cars</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("cars",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=cars" class="link-dark"><h2><b>Cars</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("cars",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=cars" class="link-dark"><h2><b>Cars</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/games icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=games" class="link-dark"><h2><b>Games</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("games",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=games" class="link-dark"><h2><b>Games</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("games",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=games" class="link-dark"><h2><b>Games</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/crafts icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=crafts" class="link-dark"><h2><b>Crafts</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("crafts",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=crafts" class="link-dark"><h2><b>Crafts</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("crafts",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=crafts" class="link-dark"><h2><b>Crafts</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/music icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=music" class="link-dark"><h2><b>Music</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("music",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=music" class="link-dark"><h2><b>Music</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("music",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=music" class="link-dark"><h2><b>Music</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/travel icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=travel" class="link-dark"><h2><b>Travel</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("travel",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=travel" class="link-dark"><h2><b>Travel</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("travel",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=travel" class="link-dark"><h2><b>Travel</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/books icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=books" class="link-dark"><h2><b>Books</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("books",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=books" class="link-dark"><h2><b>Books</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("books",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=books" class="link-dark"><h2><b>Books</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/anime icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=anime" class="link-dark"><h2><b>Anime</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("anime",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=anime" class="link-dark"><h2><b>Anime</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("anime",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=anime" class="link-dark"><h2><b>Anime</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/manga icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=manga" class="link-dark"><h2><b>Manga</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("manga",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=manga" class="link-dark"><h2><b>Manga</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("manga",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=manga" class="link-dark"><h2><b>Manga</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/astronomy icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=astronomy" class="link-dark"><h2><b>Astronomy</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("astronomy",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=astronomy" class="link-dark"><h2><b>Astronomy</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("astronomy",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=astronomy" class="link-dark"><h2><b>Astronomy</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="card">
                                    <img src="images/art icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=art" class="link-dark"><h2><b>Art</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("art",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=art" class="link-dark"><h2><b>Art</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("art",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=art" class="link-dark"><h2><b>Art</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <div class="card">
                                    <img src="images/history icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=history" class="link-dark"><h2><b>History</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("history",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=history" class="link-dark"><h2><b>History</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("history",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=history" class="link-dark"><h2><b>History</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>
                            </td>
                        </tr>    

                        <tr>     
                            <td>
                                <div class="card">
                                    <img src="images/programming icon.png" alt="Avatar" style="padding: 45px;">
                                     <div class="container" align="center">';
                                        if(empty($subscribeArray)){
                                            echo'<a href="subscribeProcess.php?category=programming" class="link-dark"><h2><b>Programming</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        }
                                        else if(in_array("programming",$subscribeArray)){
                                            echo'<a href="unsubscribeProcess.php?category=programming" class="link-dark"><h2><b>Programming</b>
                                                <br/><br/>Unsubscribe</a></h2>';
                                        }
                                        else if(!(in_array("programming",$subscribeArray))){
                                            echo'<a href="subscribeProcess.php?category=programming" class="link-dark"><h2><b>Programming</b>
                                                <br/><br/>Subscribe</a></h2>';
                                        } 
                                    echo'</div>
                                </div>  
                            </td>
                        </tr>         
                    </table>          
            </div>';
        ?>
        <br/>
        <br/>
        
        <?php
            include'footer.php';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
