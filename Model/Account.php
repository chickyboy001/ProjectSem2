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

}
?>