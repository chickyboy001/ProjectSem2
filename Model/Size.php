<?php
class Size extends Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }
    public function addSize($size_name, $color_id, $quantity)
    {
        $sql = "INSERT INTO sizes (size_name, color_id, quantity)
							VALUES ('$size_name', '$color_id', '$quantity')";
        return $this->db->conn->query($sql);
    }
    public function editSize($size_id, $quantity, $status)
    {
        $sql = "UPDATE sizes SET quantity = '$quantity',
                                    status = '$status'   
                                    WHERE size_id = $size_id";
        return $this->db->conn->query($sql);
    }
    public function getSize($size_id)
    {
        mysqli_next_result($this->db->conn);
        $sql = "SELECT * FROM sizes WHERE size_id = $size_id";
        $result = $this->db->conn->query($sql);
        $data = $result->fetch_array();
        return $data;
    }
    public function deleteSize($size_id)
    {
        $sql = "DELETE FROM sizes WHERE size_id = $size_id";
        return $this->db->conn->query($sql);
    }
    public function deleteSizeOfColor($color_id)
    {
        $sql = "DELETE FROM sizes WHERE color_id = $color_id";
        return $this->db->conn->query($sql);
    }
}
?>