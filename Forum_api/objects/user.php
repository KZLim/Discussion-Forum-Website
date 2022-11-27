<?php
class User{
    // database connection and table name
    private $conn;
    private $table_name = "useraccount";
	private $table_name2 = "userprofile";
	private $table_name3 = "usersubscribe";
  
    // object properties
    public $username;
    public $password;
    public $email;
    public $status="clear";
	
	
	//this variable is used for the userprofile operation but is for creation(initial register) hence no user input and take default.
	public $stdBio = "Hello, Write Something About Yourself";
	public $stdProfilePicture = "default.png";
	
	//this variable is used for the usersubscription operation. User input is needed and username is taken from above.  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
	
    //CREATE user credential and store into usercredential. This is an initial register operation for CREATE.
    function createCredential(){

                   

                    $query = "INSERT INTO
                                            " . $this->table_name . "
                                    SET
                                            username=:username, password=:password, email=:email, status=:status";

                    // prepare query
                    $stmt = $this->conn->prepare($query);

                     // sanitize
                    $this->username=htmlspecialchars(strip_tags($this->username));
                    $this->password=htmlspecialchars(strip_tags($this->password));
                    $this->email=htmlspecialchars(strip_tags($this->email));
                    $this->status=htmlspecialchars(strip_tags($this->status));

                $hash = password_hash($password, 
                    PASSWORD_DEFAULT);

                    // bind values
                    $stmt->bindParam(":username", $this->username);
                    $stmt->bindParam(":password", $this->password);
                    $stmt->bindParam(":email", $this->email);
                    $stmt->bindParam(":status", $this->status);

                    // execute query
                    if($stmt->execute()){
                            return true;
                    }

                    return false;
    }

    //CREATE user profile and stored into userprofile. This is an initial register operation for CREATE.
    function createProfile(){

                    // query to insert record
                    //$query = "INSERT INTO userdata (username, password, email, status)
                                            //VALUES ('$this->username', '$this->password', '$this->email', '$this->status')";

                    $query = "INSERT INTO
                                            " . $this->table_name2 . "
                                    SET
                                            username=:username, bio=:stdBio, profilePicture=:stdProfilePicture";

                    // prepare query
                    $stmt = $this->conn->prepare($query);

                     // sanitize
                    $this->username=htmlspecialchars(strip_tags($this->username));


                    // bind values
                    $stmt->bindParam(":username", $this->username);
                    $stmt->bindParam(":stdBio", $this->stdBio);
                    $stmt->bindParam(":stdProfilePicture", $this->stdProfilePicture);

                    // execute query
                    if($stmt->execute()){
                            return true;
                    }

                    return false;
    }

    //This create user subscription and stored into usersubscription table. This is a CREATE OPERATION, everytime user subscribe
    //it will be inserted into the database.
	
	
    function readCredential(){

            $query = "SELECT * FROM " . $this->table_name . " WHERE username=:username";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(":username", $this->username);

            // execute query
        $stmt->execute();

        return $stmt;

    }
}
?>