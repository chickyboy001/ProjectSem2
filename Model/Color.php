<?php
class Color extends Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function getSizeOfColor($color_id)
    {
        mysqli_next_result($this->db->conn);
        $sql = "SELECT * FROM sizes WHERE color_id = $color_id";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }

}
?>