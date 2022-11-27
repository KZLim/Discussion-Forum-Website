<?php
// required headers
header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8"); !!!IMPORTANT NEEDED FOR POSTMAN TESTING CURRENTLY IS COMMENT OUT. UNCOMMENT WHEN TESTING
  
// database connection will be here
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
  
// instantiate database and user object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$user = new User($db);

//get the login form data to verify
$usernameGiven = $_POST['userName'];
$passwordGiven = $_POST['password'];

//set object property
$user->username = $usernameGiven;
$user->password = $passwordGiven;
  
// read products will be here
// query products
$stmt = $user->readCredential();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // products array
    $user_credential=array();
    $user_credential["record"]=array();
  
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
  
        $user_credData=array(
            "username" => $username,
            "password" => $password,
            "email" => $email,
			"status" =>$status,
        );
  
        array_push($user_credential["record"], $user_credData);
    }
  
    //set response code - 200 OK
    //http_response_code(200);
  
    // show products data in json format
    //echo json_encode($user_credential);
	
	//as password is hash, this function is called to get the status of the check is true or false
	$verify = password_verify($passwordGiven, $user_credData['password']);

	if($user_credData["username"] == $usernameGiven && $verify){
		
		if($user_credData["status"] == "clear"){
			session_start();
			$_SESSION["identifier"] = $user_credData["username"] ;
			
			echo'<script>window.location.href = "http://localhost/DiscussionForumWebsite/public_html/homepage.php";
                             </script>';
		}
		else{
			echo'<script>alert("Your Account Has Been Temporary Lock.")</script>';
                        echo'<script>window.location.href = "http://localhost/DiscussionForumWebsite/public_html/login.php";
                             </script>';
		}	
		
	}
	else{
		
		echo'<script>alert("Credential Incorrect. Please Check.")</script>';
                echo'<script>window.location.href = "http://localhost/DiscussionForumWebsite/public_html/login.php";
                    </script>';
		
	}
}
  
// no user found will be here
else{
	
	header("Location: ../../login.php");
	die();
  
    // set response code - 404 Not found
    //http_response_code(404);
  
    // tell the user no products found
    //echo json_encode(
        //array("message" => "No user found.")
    //);
	
}