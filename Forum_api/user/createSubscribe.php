<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
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
  
//get the data using post method once the form is submitted.
//$username = $_POST['userName'];
//$password = $_POST['password'];
//$email = $_POST['email_address'];  
  
//make sure data is not empty
if(true){

    //set user property values
	//$user-> = $username;
    //$user->password = $password;
    //$user->email = $email;
	
    // create the user credential
    if($user->createSubscription()){
		header("Location: ../../homepage.php");
		die();
		
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
//tell the user data is incomplete
else{
  
    //set response code - 400 bad request
    //http_response_code(400);
  
    //tell the user
    //echo json_encode(array("message" => "Unable to create User. Data is incomplete."));
}
?>

