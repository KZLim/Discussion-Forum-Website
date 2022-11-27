
<?php
    ini_set("display_errors",0);
    error_reporting(E_ALL);
    session_start();
   
    if($_SESSION["identifier"] != null && strlen($_SESSION['identifier']) <=10){

        echo'<div class ="footer">
                <!--below is footer code for mobile view-->
                <div class="mobileItem">
                    <div>
                        <table border="0">
                            <tr>
                                <td width="30"></td>
                                <td><h3><u>Links</u></h3></td>
                                <td width="50"></td>
                                <td><h3><u>About</u></h3></td>
                                <td width="50"></td>
                                <td><h3><u>Contact Us</u></h3></td>
                            </tr>

                            <tr>
                                <td width="10"></td>
                                <td><a href="homepage.php"><h4>Home</h4></a></td>
                                <td width="10"></td>
                                <td><a href="aboutUs.php"><h4>About Us</h4></a></td>
                                <td width="10"></td>
                                <td><a href="contactUs.php"><h4>Support</h4></a></td>
                            </tr>

                            <tr>
                                <td width="10"></td>
                                <td><a href="myForum.php"><h4>My Forum</h4></a></td>
                                <td width="10"></td>
                                <td><a href="faq.php"><h4>FAQ</h4></a></td>
                            </tr>

                            <tr>
                                <td width="10"></td>
                                <td><a href="discover.php"><h4>Discover More</h4></a></td>

                            </tr>

                            <tr>
                                <td width="10"></td>
                                <td><a href="category.php"><h4>Categories</h4></a></td>
                            </tr>

                        </table>
                    </div>

                    <div>
                            <div class="column" align="center">
                                <h3>Follow Us On Social Media:</h3>                    
                                <table>
                                    <tr>
                                        <td height="10px"></td>
                                    </tr>

                                    <tr> 
                                        <td><a href="https://www.facebook.com/"><img src="images/facebook logo.png" alt="facebook" width="45" height="45"></a></td>
                                        <td><a href="https://twitter.com/i/flow/login"><img src="images/twitter logo.png" alt="twitter" width="45" height="45"></a></td>
                                        <td><a href="https://www.instagram.com/accounts/login/"><img src="images/insta logo.webp" alt="twitter" width="45" height="45"></a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                </div>

                <!--below is footer code for pc view-->
                <div class="pcView">
                    <div class="rows">
                        <div class="column">
                            <table border="0">
                                <tr>
                                    <td width="30"></td>
                                    <td><h3><u>Links</u></h3></td>
                                    <td width="50"></td>
                                    <td><h3><u>About</u></h3></td>
                                    <td width="50"></td>
                                    <td><h3><u>Contact Us</u></h3></td>
                                </tr>

                                <tr>
                                    <td width="10"></td>
                                    <td><a href="homepage.php"><h4>Home</h4></a></td>
                                    <td width="10"></td>
                                    <td><a href="aboutUs.php"><h4>About Us</h4></a></td>
                                    <td width="10"></td>
                                    <td><a href="contactUs.php"><h4>Support</h4></a></td>
                                </tr>

                                <tr>
                                    <td width="10"></td>
                                    <td><a href="myForum.php"><h4>My Forum</h4></a></td>
                                    <td width="10"></td>
                                    <td><a href="faq.php"><h4>FAQ</h4></a></td>
                                </tr>

                                <tr>
                                    <td width="10"></td>
                                    <td><a href="discover.php"><h4>Discover More</h4></a></td>

                                </tr>

                                <tr>
                                    <td width="10"></td>
                                    <td><a href="category.php"><h4>Categories</h4></a></td>
                                </tr>

                            </table>
                        </div>
                        <div>
                            <div class="column" align="center">
                                <h3>Follow Us On Social Media:</h3>                    
                                <table>
                                    <tr>
                                        <td height="10px"></td>
                                    </tr>

                                    <tr> 
                                        <td><a href="https://www.facebook.com/"><img src="images/facebook logo.png" alt="facebook" width="45" height="45"></a></td>
                                        <td><a href="https://twitter.com/i/flow/login"><img src="images/twitter logo.png" alt="twitter" width="45" height="45"></a></td>
                                        <td><a href="https://www.instagram.com/accounts/login/"><img src="images/insta logo.webp" alt="twitter" width="45" height="45"></a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="column">
                            <table border="0" align="center"> 
                                <tr class="pcView">
                                    <td><h3><u>Subscribe to Our Newsletter</u></h3></td>
                                </tr>

                                <tr class="pcView">
                                    <td><form action="newsletter.php" method="POST">
                                        <div class="input_field">
                                            <input type="email" name="email" required>
                                            <span></span>
                                            <label>Email</label>
                                        </div>

                                        <input name="submit" type="submit" value="Subscribe" style="margin-top: -30px;">
                                    </form></td>
                                </tr>

                                <tr>
                                    <td height="15px"></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>';
    }
    else if($_SESSION["identifier"] != null && (strlen($_SESSION['identifier'])) == 23){
        
         echo'<div class ="footer">
                <!--below is footer code for mobile view-->
                <div class="mobileItem">
                    <div>
                        <table border="0">
                            <tr>
                                <td width="30"></td>
                                <td><h3><u>Links</u></h3></td>
                                <td width="50"></td>
                                <td><h3><u>About</u></h3></td>
                                <td width="50"></td>
                            </tr>

                            <tr>
                                <td width="10"></td>
                                <td><a href="adminDashboard.php"><h4>Home</h4></a></td>
                                <td width="10"></td>
                                <td><a href="aboutUs.php"><h4>About Us</h4></a></td>
                            </tr>

                            <tr>
                                <td width="10"></td>
                                <td><a href="discover.php"><h4>Discover More</h4></a></td>
                            </tr>

                            <tr>
                                <td width="10"></td>
                                <td><a href="category.php"><h4>Categories</h4></a></td>
                            </tr>

                        </table>
                    </div>

                </div>

                <!--below is footer code for pc view-->
                <div class="pcView">
                    <div class="rows">
                        <div class="column">
                            <table border="0" align="center">
                                <tr>
                                    <td width="30"></td>
                                    <td><h3><u>Links</u></h3></td>
                                    <td width="50"></td>
                                    <td><h3><u>About</u></h3></td>
                                </tr>

                                <tr>
                                    <td width="10"></td>
                                    <td><a href="homepage.php"><h4>Home</h4></a></td>
                                    <td width="10"></td>
                                    <td><a href="aboutUs.php"><h4>About Us</h4></a></td>
                                </tr>

                                <tr>
                                    <td width="10"></td>
                                    <td><a href="discover.php"><h4>Discover More</h4></a></td>
                                </tr>

                                <tr>
                                    <td width="10"></td>
                                    <td><a href="category.php"><h4>Categories</h4></a></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>';
    }
    else{
        echo'<div class ="footer">
                <!--below is footer code for mobile view-->
                <div class="mobileItem">
                    <div>
                        <table border="0">
                            <tr>
                                <td width="30"></td>
                                <td><h3><u>Links</u></h3></td>
                                <td width="50"></td>
                                <td><h3><u>About</u></h3></td>
                                <td width="50"></td>
                                <td><h3><u>Contact Us</u></h3></td>
                            </tr>

                            <tr>
                                <td width="10"></td>
                                <td><a href="homepage.php"><h4>Home</h4></a></td>
                                <td width="10"></td>
                                <td><a href="aboutUs.php"><h4>About Us</h4></a></td>
                                <td width="10"></td>
                                <td><a href="contactUs.php"><h4>Support</h4></a></td>
                            </tr>

                            <tr>
                                <td width="10"></td>
                                <td><a href="faq.php"><h4>FAQ</h4></a></td>
                            </tr>

                            <tr>
                                <td width="10"></td>
                                <td><a href="discover.php"><h4>Discover More</h4></a></td>

                            </tr>

                            <tr>
                                <td width="10"></td>
                                <td><a href="category.php"><h4>Categories</h4></a></td>
                            </tr>

                        </table>
                    </div>

                    <div>
                            <div class="column" align="center">
                                <h3>Follow Us On Social Media:</h3>                    
                                <table>
                                    <tr>
                                        <td height="10px"></td>
                                    </tr>

                                    <tr> 
                                        <td><a href="https://www.facebook.com/"><img src="images/facebook logo.png" alt="facebook" width="45" height="45"></a></td>
                                        <td><a href="https://twitter.com/i/flow/login"><img src="images/twitter logo.png" alt="twitter" width="45" height="45"></a></td>
                                        <td><a href="https://www.instagram.com/accounts/login/"><img src="images/insta logo.webp" alt="twitter" width="45" height="45"></a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                </div>

                <!--below is footer code for pc view-->
                <div class="pcView">
                    <div class="rows">
                        <div class="column">
                            <table border="0">
                                <tr>
                                    <td width="30"></td>
                                    <td><h3><u>Links</u></h3></td>
                                    <td width="50"></td>
                                    <td><h3><u>About</u></h3></td>
                                    <td width="50"></td>
                                    <td><h3><u>Contact Us</u></h3></td>
                                </tr>

                                <tr>
                                    <td width="10"></td>
                                    <td><a href="homepage.php"><h4>Home</h4></a></td>
                                    <td width="10"></td>
                                    <td><a href="aboutUs.php"><h4>About Us</h4></a></td>
                                    <td width="10"></td>
                                    <td><a href="contactUs.php"><h4>Support</h4></a></td>
                                </tr>

                                <tr>
                                    <td width="10"></td>
                                    <td><a href="faq.php"><h4>FAQ</h4></a></td>
                                </tr>

                                <tr>
                                    <td width="10"></td>
                                    <td><a href="discover.php"><h4>Discover More</h4></a></td>

                                </tr>

                                <tr>
                                    <td width="10"></td>
                                    <td><a href="category.php"><h4>Categories</h4></a></td>
                                </tr>

                            </table>
                        </div>
                        <div>
                            <div class="column" align="center">
                                <h3>Follow Us On Social Media:</h3>                    
                                <table>
                                    <tr>
                                        <td height="10px"></td>
                                    </tr>

                                    <tr> 
                                        <td><a href="https://www.facebook.com/"><img src="images/facebook logo.png" alt="facebook" width="45" height="45"></a></td>
                                        <td><a href="https://twitter.com/i/flow/login"><img src="images/twitter logo.png" alt="twitter" width="45" height="45"></a></td>
                                        <td><a href="https://www.instagram.com/accounts/login/"><img src="images/insta logo.webp" alt="twitter" width="45" height="45"></a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="column">
                            <table border="0" align="center"> 
                                <tr class="pcView">
                                    <td><h3><u>Subscribe to Our Newsletter</u></h3></td>
                                </tr>

                                <tr class="pcView">
                                    <td><form action="newsletter.php" method="POST">
                                        <div class="input_field">
                                            <input type="email" name="email" required>
                                            <span></span>
                                            <label>Email</label>
                                        </div>

                                        <input name="submit" type="submit" value="Subscribe" style="margin-top: -30px;">
                                    </form></td>
                                </tr>

                                <tr>
                                    <td height="15px"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>';
    }
?>
