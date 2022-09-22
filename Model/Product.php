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
        $category_id = $this->db->conn->real_escape_string($category_id);
        $sex = $this->db->conn->real_escape_string($sex);
        $price = $this->db->conn->real_escape_string($price);
        $sql = "INSERT INTO products (product_name, category_id, sex, price)
							VALUES ('$product_name', '$category_id', '$sex', '$price')";
		return $this->db->conn->query($sql);
    }

    public function showAll(){
        $sql = "SELECT * FROM products";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }

    public function editProduct($product_id, $product_name, $category_id, $sex, $price)
    {
        $product_name = $this->db->conn->real_escape_string($product_name);
        $category_id = $this->db->conn->real_escape_string($category_id);
        $sex = $this->db->conn->real_escape_string($sex);
        $price = $this->db->conn->real_escape_string($price);
        $sql = "UPDATE products SET product_name = '$product_name', 
                                    category_id = '$category_id', 
                                    price = '$price', 
                                    sex = '$sex', 
                                    price = '$price'
                                    WHERE product_id = $product_id";
		return $this->db->conn->query($sql);
    }

    public function getProduct($product_id)
    {
        $sql = "SELECT * FROM products WHERE product_id = $product_id";
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

    public function deleteProduct($product_id)
    {
        $sql = "DELETE FROM products WHERE product_id = $product_id";
		return $this->db->conn->query($sql);
    }

}
?>