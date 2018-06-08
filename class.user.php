<?php
// Database Configuration Linking 
require_once('dbconfig.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function register($ua_username,$ua_password)
	{
		try
		{	$ul_ID = 1;
			$new_password = password_hash($ua_password, PASSWORD_DEFAULT);
			$stmt = $this->conn->prepare("INSERT INTO user_account(ul_ID,ua_username,ua_password) 
		                                               VALUES( :ul_ID,:ua_username, :ua_password)");
					
			$stmt->bindparam(":ul_ID", $ul_ID);	  
			$stmt->bindparam(":ua_username", $ua_username);
			$stmt->bindparam(":ua_password", $new_password);	
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	
	public function doLogin($login_user,$login_password)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT ua_ID, ul_ID ,ua_username, ua_password FROM user_account WHERE ua_username=:ua_username");
			$stmt->execute(array(':ua_username'=>$login_user));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($login_password, $userRow['ua_password']))
				{
					$_SESSION['ua_ID'] = $userRow['ua_ID'];
					$_SESSION['ul_ID'] = $userRow['ul_ID'];
					$_SESSION['ua_username'] = $userRow['ua_username'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function is_loggedin()
	{
		if(isset($_SESSION['ua_ID']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['ua_ID']);
		return true;
	}
	
}
?>