<?php
class Order extends Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function addOrder($customer_id, $payment_method, $total_price)
    {
        $sql = "INSERT INTO orders (customer_id, payment_method, total_price)
							VALUES ('$customer_id', '$payment_method', '$total_price')";
		$this->db->conn->query($sql);
        $PID = $this->db->conn->insert_id;
        return $PID;
    }

    public function addOrderWithSub_customer($customer_id, $payment_method, $sub_customer, $total_price)
    {
        $sql = "INSERT INTO orders (customer_id, payment_method,sub_customer, total_price)
							VALUES ('$customer_id', '$payment_method', '$sub_customer', '$total_price')";
		$this->db->conn->query($sql);
        $PID = $this->db->conn->insert_id;
        return $PID;
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
        mysqli_next_result($this->db->conn);
        $sql = "Call sp_getOrderById($order_id)";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();
        return $data;
    }

    public function getOrderByCustomerId($customer_id)
    {
        mysqli_next_result($this->db->conn);
        $sql = "Call sp_getOrderByCustomerId($customer_id)";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }


    public function updateStatus($order_id, $admin_id, $status)
    {
        $sql = "UPDATE orders SET admin_id = '$admin_id', 
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

    

    

    public function getOrderInThisWeek()
    {
        mysqli_next_result($this->db->conn);
        $sql = "SELECT total_price FROM orders WHERE order_date >= date_sub(CURDATE(), INTERVAL WEEKDAY(CURDATE()) DAY) AND order_date < date_add(CURDATE(), INTERVAL 1 DAY) ORDER BY order_date DESC";
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getOrderToday()
    {
        mysqli_next_result($this->db->conn);
        $sql = "SELECT * FROM orders WHERE cast(order_date as Date) = cast(CURDATE() as Date) AND status = '4'";
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getOrderOfCustomer($customer_id)
    {
        mysqli_next_result($this->db->conn);
        $sql = "SELECT * FROM orders WHERE customer_id = '$customer_id' ORDER BY order_date DESC";
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getLatestOrder(){
        mysqli_next_result($this->db->conn);
        $sql = "SELECT * FROM orders ORDER BY order_date DESC";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }



}
?>