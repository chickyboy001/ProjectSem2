<?php
class Account extends Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function getUserById($user_id){
        mysqli_next_result($this->db->conn);
		$sql = "SELECT * FROM accounts WHERE user_id = $user_id";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_assoc();
        return $data;
    }

    public function login($username, $password)
	{
		$sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}

    public function signup($username, $address, $phone, $password)
	{	
		$sql = "INSERT INTO accounts (username, address, phone, password)
							VALUES ('$username', '$address', '$phone', '$password')";
		$this->db->conn->query($sql);
	}

	public function checkExistUsername($username) {
		$sql = "SELECT * FROM accounts WHERE username = '$username'";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}
    public function checkExistPhone($phone) {
		$sql = "SELECT * FROM accounts WHERE phone = '$phone'";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}

	public function editProfile($userId, $fullname, $sex, $phone, $address, $email)
    {
		$fullname = $this->db->conn->real_escape_string($fullname);
        $address = $this->db->conn->real_escape_string($address);
		$email = $this->db->conn->real_escape_string($email);
        $sql = "UPDATE accounts SET address = '$address',
									phone = '$phone',
									fullname = '$fullname',
									sex = '$sex',
									address = '$address',
									email = '$email' WHERE user_id = $userId";
		return $this->db->conn->query($sql);
    }

}
?>