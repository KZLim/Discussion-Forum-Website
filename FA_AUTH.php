<?php
/* This code and overTheFence.html is for the http authentication use
 * if the credentials is correct then it will redirect to the admin dashboard but if 
 * its wrong then it will bring it over to overTheFence.html to redirect again to user login.
 */

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Login Call Off';
    exit;
} else {
    if($_SERVER['PHP_AUTH_USER'] == "Niministrator" && $_SERVER['PHP_AUTH_PW'] == "NiministratorText"){
        header('Location: adminDashboard.php');
        
        session_start();
        $_SESSION['identifier'] = "Administrator Authority";
        
    }
    else{
        header('Location: overTheFence.php');
    }
}
?>