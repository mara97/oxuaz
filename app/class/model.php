<?php 

class Database{

	public $host;
	public $username;
	public $password;
	public $dbname;
	public $conn;

	public function __construct($host,$username,$password,$dbname){

		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->dbname = $dbname;

		$this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);

		if(!$this->conn){
			echo "Error! - Not connected!";
		}

	}

}

class Users{

	public $fName;
	public $lName;
	public $email;
	public $u_pwd;

	public function registration($connection,$firstName,$lastName,$email,$password){

		$this->fName = $firstName;
		$this->lName = $lastName;
		$this->email = $email;
		$this->u_pwd = $password;
		$this->conn = $connection;

		$sql = "INSERT INTO users (u_fname,u_lname,u_email,u_pass) VALUES ('$this->fName','$this->lName','$this->email','$this->u_pwd')";
		$query = mysqli_query($this->conn,$sql);

		if ($query) {
			echo "REGISTRATION COMPLETED!";
		}
		else {
			echo "ERROR!";
		}

	}

	public function login($connection,$email,$password){

		$this->email = $email;
		$this->u_pwd = $password;
		$this->conn = $connection;

		$sql = "SELECT u_email,u_pass FROM users WHERE u_email='$this->email'";
		$query = mysqli_query($this->conn,$sql); 
		
		$row = mysqli_fetch_assoc($query);

		if(!is_null($row)){
			if($row['u_pass'] == $this->u_pwd){
				session_start();
				$_SESSION['email'] = $this->email;
				$_SESSION['password'] = $this->u_pwd;
			}
			else{
				echo "password wrong!";
			}
		}else{
			echo "user not found";
		}

	}

}

/**
* for news
*/
class News extends Database
{
	public $newsTitle;
	public $newsDate;
	public $newsImage;
	public $newsText;
	public $newsDesc;
	public $newsStatus;
	public $conn;
	public $fileName;
	public $fileDir;
	public $test;

	public function __construct($connection,$newsTitle,$newsDate,$newsImage,$newsText,$newsDesc,$newsStatus)
	{
		$this->newsTitle = $newsTitle;
		$this->newsDate = $newsDate;
		$this->newsText = $newsText;
		$this->newsDesc = $newsDesc;
		$this->newsStatus = $newsStatus;
		$this->newsImage = $newsImage;
		$this->conn = $connection;
		$this->uploadFile();
		$this->insertNews();

	}
public function uploadFile(){
	$this->fileName=$this->newsImage ['name'];
	$this->fileDir=$this->newsImage ['tmp_name'];
	$dest="../upload/";
	$path=$dest.$this->fileName;
	

	if(move_uploaded_file($this->fileDir,$path)){

			return $this->test=TRUE;

	}else{
		return $this->test=FALSE;
	};
}
	public function insertNews(){
		if($this->test===TRUE){
			$sql = "INSERT INTO news (news_name,news_desc,news_text,status,news_date,img_full) VALUES ('$this->newsTitle','$this->newsDesc','$this->newsText','$this->newsStatus','$this->newsDate','$this->newsImage')";
		$query = mysqli_query($this->conn,$sql);

		if($query){
			echo "Add olundu!";
		}
		else {
			echo "Error! Not added!";
		}	
	}else{
		echo "ged ayna";
	}
		
	}
	
  
}

 ?>