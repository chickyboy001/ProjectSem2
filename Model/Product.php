<?php
class Product extends Database 
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function addProduct($product_name, $category_id, $sex, $price, $description)
    {
        mysqli_next_result($this->db->conn);
        $product_name = $this->db->conn->real_escape_string($product_name);
        $description = $this->db->conn->real_escape_string($description);
        $sql = "INSERT INTO products (product_name, category_id, sex, price, description)
							VALUES ('$product_name', '$category_id', '$sex', '$price', '$description')";
		$this->db->conn->query($sql);
        $PID = $this->db->conn->insert_id;
        return $PID;
    }

    public function showAll(){
        $sql = "SELECT * FROM products ORDER BY product_id DESC";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }

    public function getProductByCategory($category_id){
        $sql = "SELECT product_id, product_name, category_id, price, status FROM products WHERE category_id = '$category_id' AND status != 0";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }

    public function editProduct($product_id, $product_name, $category_id, $sex, $price, $description, $status)
    {
        mysqli_next_result($this->db->conn);
        $product_name = $this->db->conn->real_escape_string($product_name);
        $sex = $this->db->conn->real_escape_string($sex);
        $description = $this->db->conn->real_escape_string($description);
        $sql = "UPDATE products SET product_name = '$product_name', 
                                    category_id = '$category_id',  
                                    sex = '$sex', 
                                    price = '$price',
                                    description = '$description',
                                    status = '$status'
                                    WHERE product_id = $product_id";
		return $this->db->conn->query($sql);
    }

    public function getProduct($product_id)
    {
        mysqli_next_result($this->db->conn);
        $sql = "Call sp_getProductById($product_id)";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();
        return $data;
    }

    public function addOrUpdateColor($product_id, $color_id)
    {
        $sql = "UPDATE products SET color_id = '$color_id' WHERE product_id = $product_id";
		return $this->db->conn->query($sql);
    }


    public function getColorOfProduct($product_id){
        mysqli_next_result($this->db->conn);
        $sql = "SELECT * FROM colors WHERE product_id = $product_id";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }

    public function getColorOfProductCard($product_id){
        mysqli_next_result($this->db->conn);
        $sql = "SELECT * FROM colors WHERE product_id = $product_id LIMIT 1";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();
        return $data;
    }

    public function addProductToOrder($order_id, $product_id, $color_name, $size_name, $unit_price, $quantity)
    {
        $sql = "INSERT INTO order_details (order_id, product_id,color_name, size_name, unit_price, quantity )
							VALUES ('$order_id', '$product_id', '$color_name', '$size_name', '$unit_price', '$quantity')";
		return $this->db->conn->query($sql);
    }

    public function searchProductOrderByPrice($searchValue)
    {
        mysqli_next_result($this->db->conn);
        $searchValue = $this->db->conn->real_escape_string($searchValue);
        $sql = "Call sp_searchProductOrderByPrice('$searchValue')";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }

    public function showAllLimit(){
        $sql = "SELECT * FROM products ORDER BY product_id DESC LIMIT 6";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }

    public function showAllLimitASC(){
        $sql = "SELECT * FROM products ORDER BY product_id ASC LIMIT 6";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }



}
?>