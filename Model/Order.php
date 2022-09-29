<?php
class Order extends Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function showAll(){
        $sql = "SELECT * FROM orders ORDER BY order_id DESC";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }

    public function getOrder($order_id)
    {
        $sql = "Call sp_getOrderById($order_id)";
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
        $sql = "UPDATE orders SET admin_id = '$admin_id, 
                                    status = '$status'
                                    WHERE order_id = $order_id";
		return $this->db->conn->query($sql);
    }

    public function getProductInOrder($order_id)
    {
        mysqli_next_result($this->db->conn);
        $sql = "Call sp_getProductInOrder($order_id)";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }

}
?>