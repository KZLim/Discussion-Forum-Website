<?php
// required headers
header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8"); !!!IMPORTANT NEEDED FOR POSTMAN TESTING CURRENTLY IS COMMENT OUT. UNCOMMENT WHEN TESTING 
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../config/database.php';
  
// instantiate user object
include_once '../objects/user.php';
  
$database = new Database();
$db = $database->getConnection();
  
$user = new User($db);

// get posted data
//$data = json_decode(file_get_contents("php://input"));
 
 
//for the initial creation the credential is stored into the credential table
//the profile data will use the default value for the initial creation after update api will allow changes

//get the data using post method once the form is submitted.
$username = $_POST['userName'];
$password = $_POST['password'];
$email = $_POST['email_address'];  

//make sure data is not empty
if(isset($username) && isset($password) &&isset($email)){
    if(strlen($password) >= 12){
        //set user property values
        $user->username = $username;
		$user->password = (password_hash($password, 
							PASSWORD_DEFAULT));
		$user->email = $email;

        // create the user credential
        if($user->createCredential() && $user->createProfile()){
            echo'<script>alert("Account Created. Log In To Continue....")</script>';
            echo'<script>window.location.href = "http://localhost/DiscussionForumWebsite/public_html/login.php";
                </script>';

            //set response code - 201 created
            //http_response_code(201);

            // tell the user
            //echo json_encode(array("message" => "User was created."));		
        }
        //if unable to create the user, tell the user
        //else{
            //set response code - 503 service unavailable
            //http_response_code(503);

            // tell the user
            //echo json_encode(array("message" => "Register"));
        //}
    }
}
//tell the user data is incomplete
else{
  
    //set response code - 400 bad request
    //http_response_code(400);
  
    //tell the user
    //echo json_encode(array("message" => "Unable to create User. Data is incomplete."));
}
?>

