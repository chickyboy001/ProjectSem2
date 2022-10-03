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
    
}
?>