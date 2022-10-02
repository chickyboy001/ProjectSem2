<?php
class Color extends Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function getColorById($color_id)
    {
        $sql = "SELECT * FROM colors WHERE color_id = $color_id";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();
        return $data;
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

    public function editColor($color_id, $color_name, $image_link, $image_link_1, $image_link_2, $image_link_3, $image_link_4)
    {
        $color_name = $this->db->conn->real_escape_string($color_name);
        $sql = "UPDATE colors SET color_name = '$color_name', 
                                    image_link = '$image_link', 
                                    image_link_1 = '$image_link_1',
                                    image_link_2 = '$image_link_2', 
                                    image_link_3 = '$image_link_3', 
                                    image_link_4 = '$image_link_4'  
                                    WHERE color_id = $color_id";
		return $this->db->conn->query($sql);
    }

}
?>