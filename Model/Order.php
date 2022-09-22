<?php
class Order extends Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function getOrder($order_id)
    {
        $sql = "SELECT * FROM orders WHERE order_id = $order_id";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();
        return $data;
    }

    public function deleteOrder($order_id)
    {
        $sql = "DELETE FROM orders WHERE order_id = $order_id";
		return $this->db->conn->query($sql);
    }

    public function updateStatus($order_id, $admin_id, $status)
    {
        $admin_id = $this->db->conn->real_escape_string($admin_id);
        $status = $this->db->conn->real_escape_string($status);
        $sql = "UPDATE products SET admin_id = '$admin_id, 
                                    status = '$status'
                                    WHERE order_id = $order_id";
		return $this->db->conn->query($sql);
    }

    

}
?>