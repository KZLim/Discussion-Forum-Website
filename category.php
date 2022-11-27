<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Browse::Categories</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css1.css">
        <link rel="stylesheet" href="headerCSS.css">
        <link rel="stylesheet" href="categoryCSS.css">
        
        <!--This embed css is to override the external css as embed has higher priority than external
        the card hover is set to black shadow as default at extrnl css, embed override to the blue and purple color
        for this page only-->
        <style>
            .card:hover{
               box-shadow:
                0 0 0 4px #0d6efd,
                0 0 0 8px #CCCCFF; 
            }   
            
            <!--override card style with embeded css-->
            .card {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 270px;
                height: 480px;
                margin-left: auto;
                margin-right:auto;
            }   
            
        </style>
        
    </head>
    
    <body class = "bgDesign">
        <?php
            include 'header.php';
        ?>
        <br/>
        <br/>
        
        
        <div>
            <br/>
            
            <h1 align="center">Browse Categories</h1>
            
            <div class="pcView">
                <div class="row_2">
                    <div class="column_2">
                        <div class="card">
                            <img src="images/photography icon.png" alt="Avatar" width="230" height="230">
                            <div class="container">
                                <a href="forumList.php?forumCategory=photography" class="link-dark"><h4><b>Photography</b></h4> 
                                <p>A selection of photography topics discussed by user all over the world.</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="column_2">
                        <div class="card">
                            <img src="images/science icon.png" alt="Avatar" width="230" height="230">
                            <div class="container">
                                <a href="forumList.php?forumCategory=science" class="link-dark"><h4><b>Science</b></h4> 
                                <p>From Einstein to Newton. We cover everything.</p></a>
                            </div>
                        </div>
                    </div>


                    <div class="column_2">
                        <div class="card">
                            <img src="images/technology icon.png" alt="Avatar" width="230" height="230">
                            <div class="container">
                                <a href="forumList.php?forumCategory=technology" class="link-dark"><h4><b>Technology</b></h4> 
                                <p>A tech enthusiastic? We got it all. From phones and your computers to chip manufacturing.</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="column_2">
                        <div class="card">
                            <img src="images/politics icon.png" alt="Avatar" width="230" height="230">  
                            <div class="container">
                                <a href="forumList.php?forumCategory=politics" class="link-dark"><h4><b>Politics</b></h4> 
                                <p>Sometimes we talk about this. But make sure that friends stay friends.</p></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row_2">
                    <div class="column_2">
                        <div class="card">
                            <img src="images/movies icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=movie" class="link-dark"><h4><b>Movie</b></h4> 
                                <p>Christopher Nolan didn't include Interstellar in the Tenet trailer. When your resume is too good.</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="column_2">
                        <div class="card">
                            <img src="images/sports icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=sports" class="link-dark"><h4><b>Sports</b></h4> 
                                <p>I don't know anything about sports.</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="column_2">
                        <div class="card">
                            <img src="images/car icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=cars" class="link-dark"><h4><b>Cars</b></h4> 
                                <p>Vroom Vroom ~ Don't drink while you drive.</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="column_2">
                        <div class="card">
                            <img src="images/games icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=games" class="link-dark"><h4><b>Games</b></h4> 
                                <p>I spent too many hours of my life playing games. I need some help.</p></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row_2">
                    <div class="column_2">
                        <div class="card">
                            <img src="images/crafts icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=crafts" class="link-dark"><h4><b>Crafts</b></h4> 
                                <p>Arts and Crafts sold on the internet are so expensive. Learn to make one your own.</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="column_2">
                        <div class="card">
                            <img src="images/music icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=music" class="link-dark"><h4><b>Music</b></h4> 
                                <p>I'll blow up into smithereens
                                    And spew my tiny symphony~
                                </p></a>
                            </div>
                        </div>
                    </div>

                    <div class="column_2">
                        <div class="card">
                            <img src="images/travel icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=travel" class="link-dark"><h4><b>Travel</b></h4> 
                                <p>Journey of a thousand miles begin with a single step.</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="column_2">
                        <div class="card">
                            <img src="images/books icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=books" class="link-dark"><h4><b>Books</b></h4> 
                                <p>A good book stays a good book no matter how many time you read it.</p></a> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row_2">
                    <div class="column_2">
                        <div class="card">
                            <img src="images/anime icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=anime" class="link-dark"><h4><b>Anime</b></h4> 
                                <p>2Ds are better than 3Ds.</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="column_2">
                        <div class="card">
                            <img src="images/manga icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=manga" class="link-dark"><h4><b>Manga</b></h4> 
                                <p>Gojo Approved.</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="column_2">
                        <div class="card">
                            <img src="images/astronomy icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=astronomy" class="link-dark"><h4><b>Astronomy</b></h4> 
                                <p>THE PALE BLUE DOT OF EARTH "That's here. That's Home. That's us. -Carl Sagan"</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="column_2">
                        <div class="card">
                            <img src="images/art icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=art" class="link-dark"><h4><b>Art</b></h4> 
                                <p>I can't even draw circles.</p></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row_2">

                    <div class="column_2">
                        <div class="card">
                            <img src="images/history icon.png"alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=history" class="link-dark"><h4><b>History</b></h4> 
                                <p>​“Those who cannot remember the past are condemned to repeat it.” – George Santayana. 
                                <br/><br/>To forgive but not forget.</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="column_2">
                        <div class="card">
                            <div class="container">
                                <img src="images/programming icon.png" alt="Avatar" width="200" height="200">
                                <a href="forumList.php?forumCategory=programming" class="link-dark"><h4><b>Programming</b></h4> 
                                <p>If the code works, I don't know why. If the code doesn't work, I also dont know why.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mobileItem">
                <div class="row_2">
                    <div class="column_2" style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/photography icon.png" alt="Avatar" width="230" height="230">
                            <div class="container">
                                <a href="forumList.php?forumCategory=photography" class="link-dark"><h4><b>Photography</b></h4> 
                                <p>A selection of photography topics discussed by user all over the world.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row_2">
                    <div class="column_2" style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/science icon.png" alt="Avatar" width="230" height="230">
                            <div class="container">
                                <a href="forumList.php?forumCategory=science" class="link-dark"><h4><b>Science</b></h4> 
                                <p>From Einstein to Newton. We cover everything.</p></a>
                            </div>
                        </div>
                    </div>
                </div>        
                
                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/technology icon.png" alt="Avatar" width="230" height="230">
                            <div class="container">
                                <a href="forumList.php?forumCategory=technology" class="link-dark"><h4><b>Technology</b></h4> 
                                <p>A tech enthusiastic? We got it all. From phones and your computers to chip manufacturing.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/politics icon.png" alt="Avatar" width="230" height="230">  
                            <div class="container">
                                <a href="forumList.php?forumCategory=politics" class="link-dark"><h4><b>Politics</b></h4> 
                                <p>Sometimes we talk about this. But make sure that friends stay friends.</p></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/movies icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=movie" class="link-dark"><h4><b>Movie</b></h4> 
                                <p>Christopher Nolan didn't include Interstellar in the Tenet trailer. When your resume is too good.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row_2">
                    <div class="column_2" style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/sports icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=sports" class="link-dark"><h4><b>Sports</b></h4> 
                                <p>I don't know anything about sports.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/car icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=cars" class="link-dark"><h4><b>Cars</b></h4> 
                                <p>Vroom Vroom ~ Don't drink while you drive.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/games icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=games" class="link-dark"><h4><b>Games</b></h4> 
                                <p>I spent too many hours of my life playing games. I need some help.</p></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/crafts icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=crafts" class="link-dark"><h4><b>Crafts</b></h4> 
                                <p>Arts and Crafts sold on the internet are so expensive. Learn to make one your own.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/music icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=music" class="link-dark"><h4><b>Music</b></h4> 
                                <p>I'll blow up into smithereens
                                    And spew my tiny symphony~
                                </p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/travel icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=travel" class="link-dark"><h4><b>Travel</b></h4> 
                                <p>Journey of a thousand miles begin with a single step.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/books icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=books" class="link-dark"><h4><b>Books</b></h4> 
                                <p>A good book stays a good book no matter how many time you read it.</p></a> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/anime icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=anime" class="link-dark"><h4><b>Anime</b></h4> 
                                <p>2Ds are better than 3Ds.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/manga icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=manga" class="link-dark"><h4><b>Manga</b></h4> 
                                <p>Gojo Approved.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/astronomy icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=astronomy" class="link-dark"><h4><b>Astronomy</b></h4> 
                                <p>THE PALE BLUE DOT OF EARTH "That's here. That's Home. That's us. -Carl Sagan"</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/art icon.png" alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=art" class="link-dark"><h4><b>Art</b></h4> 
                                <p>I can't even draw circles.</p></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row_2">
                    <div class="column_2"  style="margin-left: -95px;">
                        <div class="card">
                            <img src="images/history icon.png"alt="Avatar" width="200" height="200">
                            <div class="container">
                                <a href="forumList.php?forumCategory=history" class="link-dark"><h4><b>History</b></h4> 
                                <p>​“Those who cannot remember the past are condemned to repeat it.” – George Santayana. 
                                <br/><br/>To forgive but not forget.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row_2">
                    <div class="column_2" style="margin-left: -95px;">
                        <div class="card">
                            <div class="container">
                                <img src="images/programming icon.png" alt="Avatar" width="200" height="200">
                                <a href="forumList.php?forumCategory=programming" class="link-dark"><h4><b>Programming</b></h4> 
                                <p>If the code works, I don't know why. If the code doesn't work, I also dont know why.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <br/>
        <br/>
        <br/>
        
        <?php
            include'footer.php';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
