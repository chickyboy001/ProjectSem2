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

	public function getNewInfor($user_id)
	{
		$sql = "SELECT * FROM accounts WHERE user_id = '$user_id'";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();
        return $data;
	}

	public function checkExistCustomer($fullname, $email, $phone, $address)
	{
		$sql = "SELECT * FROM accounts WHERE fullname = '$fullname' AND phone ='$phone' AND address = '$address' AND email = '$email'";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();
        return $data;
	}

    public function signup($username, $fullname, $address, $phone, $password)
	{	
		$sql = "INSERT INTO accounts (username, fullname, address, phone, password)
							VALUES ('$username','$fullname', '$address', '$phone', '$password')";
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

	public function editProfile($userId, $fullname, $phone, $address, $email)
    {
		$fullname = $this->db->conn->real_escape_string($fullname);
        $address = $this->db->conn->real_escape_string($address);
		$email = $this->db->conn->real_escape_string($email);
        $sql = "UPDATE accounts SET address = '$address',
									phone = '$phone',
									fullname = '$fullname',
									address = '$address',
									email = '$email' WHERE user_id = $userId";
		return $this->db->conn->query($sql);
    }

	public function addCustomer($fullname, $address, $phone, $email)
	{	
		$sql = "INSERT INTO accounts (fullname, address, phone, email)
							VALUES ('$fullname', '$address', '$phone', '$email')";
		$this->db->conn->query($sql);
		$SID = $this->db->conn->insert_id;
        return $SID;
	}

}
?>