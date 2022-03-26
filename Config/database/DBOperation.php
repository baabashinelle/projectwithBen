<?php
/**
 * *
 * *
 * *
 * *
 * *
* */
class DBOperation
{
	
	private $con;

	function __construct()
	{
		include_once("db.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	// PRIVATE FUNCTIONS

	private function accountExists($email, $table= "users")
	{
		$pre_stmt = $this->con->prepare("SELECT * FROM $table WHERE email = ? LIMIT 1");
		$pre_stmt->bind_param("s",$email);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		if($result->num_rows > 0)
		{
			return true; 
		}else
		{
			return false;
		}
	}

	
	public function getToken($email, $table = "users")
	{
		$pre_stmt = $this->con->prepare("SELECT token FROM $table WHERE email = ? LIMIT 1");
		$pre_stmt->bind_param("i",$email);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		$rows = $result->fetch_assoc();
		if($result->num_rows > 0)
		{
			return $rows['token'];
		}else
		{
			return "ACCOUNT_DOESN'T_EXIST";
		}
	}
	
	public function getAllRecord($table){
		$pre_stmt = $this->con->prepare("SELECT * FROM ".$table);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		$rows = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}
		return "NO_DATA";
	}

	public function recoordCount($tb)
	{
		$pre_stmt = $this->con->prepare("SELECT * FROM ".$tb);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		return $result->num_rows;
	}
	public function singlerecord($tb, $val, $key="id")
	{
		$stmt = "SELECT * FROM  `$tb` WHERE $key = ? LIMIT 1";
		$pre_stmt = $this->con->prepare($stmt);
		$pre_stmt->bind_param("s", $val);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		return $result->fetch_assoc();
	}


	// PUBLIC FUNCTIONS[CUSTOMER]
	public function addUser($name,$email, $phone,$password, $utype)
	{  
		if(!$this->accountExists($email)){
			$pre_stmt = $this->con->prepare("INSERT INTO `users`(`name`, `phone`, `email`, `password`, `user_type`, `date_added`, `token`)VALUES (?,?,?,?,?,?,?)");
			$date = date("y-m-d");
			$token = base64_encode($email);
			$pre_stmt->bind_param("ssssiss",$name,$phone,$email, $password, $utype, $date, $token);
			$result = $pre_stmt->execute() or die($this->con->error);
			if ($result) {
				return "USER_ADDED_SUCCESSFULLY";
			}else{
				return "USER_ADDITION_FAILED";
			}
		}else{
			return "USER_ALREADY_EXIST";	
		}
	}
	public function Login($email,$password, $table = "users")
	{
		$pre_stmt = $this->con->prepare("SELECT * FROM $table WHERE email = ?");
		$pre_stmt->bind_param("s",$email);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		if ($result->num_rows < 1)
		{
			return "USER_NOT_REGISTERED";
		}else
		{
			$row = $result->fetch_assoc();
			if($row["password"] == md5($password))
			{
					$_SESSION["name"]; 
					$_SESSION['user'] = $row['user_type'] == 1? 'user':'admin';
					echo "<pre>";
					$_SESSION["phone"] = "+233 ".$row["phone"];
					echo "Logged in as". $_SESSION['user'] ."<br><br>";
					echo "Full Name: ".$_SESSION['name']."<br>";
					echo "Phone:  ".$_SESSION['phone']."<br>";
					return "LOGIN_SUCCESSFULL";

			}else
			{
				return "PASSWORD_NOT_MATCHED";
			}
		}
	}

	public function verifyAccount($email, $token, $table = "users")
	{
		if($this->accountExists($email, $table))
		{
			$inToken = $this->getToken($email, $table);
			if($token == $inToken)
			{
				$pre_stmt = $this->con->prepare("UPDATE $table SET `status`=? WHERE email = ?");
				$status = 1;
				$pre_stmt->bind_param("is", $status, $email);
				$result = $pre_stmt->execute() or die($this->con->error);
				if($result){
					return "ACCOUNT_VERIFICATION_SUCCESS";
				}
			}else{
				return "INVALID_VERIFICATION_CODE";
			}
		}else
		{
			return "ACCOUNT_NOT_FOUND";
		}
	}

	// POSTS
	public function createPost($uid, $title, $content, $attachments)
	{
		$pre_stmt = $this->con->prepare("INSERT INTO `post`(`uid`, `title`, `content`, `attachments`, `date_added`) VALUES (?, ?, ?, ?, ?)");
		$date = date("y-m-d h:i:s");
		$pre_stmt->bind_param("issss",$uid,$title,$content, $attachments, $date);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "POST_ADDED_SUCCESSFULLY";
		}else{
			return "POST_ADDITION_FAILED";
		}
	}
	// Sites
	public function newSite($uid, $name, $location, $about, $date, $img)
	{
		$pre_stmt = $this->con->prepare("INSERT INTO `site`(`name`, `location`, `about`, `date`, `img`, `uid`) VALUES (?, ?, ?, ?, ?, ?)");
		$date = date("y-m-d h:i:s");
		$pre_stmt->bind_param("ssssss",$name,$location,$about, $date, $img, $uid);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "SITE_ADDED_SUCCESSFULLY";
		}else{
			return "SITE_ADDITION_FAILED";
		}
	}
	// Comments
	public function createComment($uid, $message)
	{
		$pre_stmt = $this->con->prepare("INSERT INTO `comments`(`uid`, `message`, `status`) VALUES (?, ?, ?)");
		$pre_stmt->bind_param("sss",$uid,$message,$status);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "COMMENT_ADDED_SUCCESSFULLY";
		}else{
			return "COMMENT_ADDITION_FAILED";
		}
	}
}

// $opr = new DBOperation();
// echo "<pre>";
// echo $opr ->addUser("benr", "bd@gmail.com", "123456789", "afsdgvsfbs", 1)."<br>";
// echo $opr ->validPhone("0256844331")."<br>";
// echo $opr ->formatPhone("0556844331")."<br>";
// echo $opr ->validName("Benadrack")."<br>";
// echo $opr->addRider("Joan","Doe", "0561028072","0501028072",  "1234", "1234567890", "1234567890");
// echo $opr->verifyAccount("561028072", "7931");
// echo "<pre>";
// print_r($opr->getToken("0561028072"));

// print_r($opr->getAllRecord("customers"));
?>