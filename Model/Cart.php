<?php
class Cart extends Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }
    public function addItemToCart($cart_id, $customer_id, $product_id, $color_id, $size_id, $unit_price, $quantity)
    {
        $sql = "INSERT INTO carts (cart_id, customer_id, product_id, color_id, size_id, unit_price, quantity)
							VALUES ('$cart_id', '$customer_id', '$product_id', '$color_id', '$size_id', '$unit_price', '$quantity')";
        return $this->db->conn->query($sql);
    }
    public function editCart($cart_id, $quantity)
    {
        $sql = "UPDATE carts SET quantity = '$quantity'   
                                    WHERE cart_id = $cart_id";
        return $this->db->conn->query($sql);
    }
    public function getCart($cart_id)
    {
        mysqli_next_result($this->db->conn);
        $sql = "SELECT * FROM carts WHERE cart_id = $cart_id";
        $result = $this->db->conn->query($sql);
        $data = $result->fetch_array();
        return $data;
    }
    public function getCartOfCustomer($customer_id)
    {
        mysqli_next_result($this->db->conn);
        $sql = "Call sp_getCartOfCustomer($customer_id)";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }
    public function deleteCart($cart_id)
    {
        $sql = "DELETE FROM carts WHERE cart_id = $cart_id";
        return $this->db->conn->query($sql);
    }
    
}
?>