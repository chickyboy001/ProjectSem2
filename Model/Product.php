<?php
class Product extends Database 
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function addProduct($product_name, $category_id, $sex, $price)
    {
        $product_name = $this->db->conn->real_escape_string($product_name);
        $sex = $this->db->conn->real_escape_string($sex);
        $sql = "INSERT INTO products (product_name, category_id, sex, price)
							VALUES ('$product_name', '$category_id', '$sex', '$price')";
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
        $color_id = $this->db->conn->real_escape_string($color_id);
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

}
?>