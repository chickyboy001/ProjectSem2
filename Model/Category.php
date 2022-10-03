<?php
class Category extends Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }
    public function addCategory($category_name){
        $this->db->conn->real_escape_string($category_name);
		$sql = "INSERT INTO categories (category_name)
							VALUES ('$category_name')";
		$this->db->conn->query($sql);
    }
    public function getCategory($category_id){
		$sql = "SELECT * FROM categories WHERE category_id = $category_id";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_assoc();
        return $data;
    }

    public function showAll(){
        $sql = "SELECT * FROM categories";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
    }

    public function updateCategory($category_id, $category_name, $status)
    {
        $category_name = $this->db->conn->real_escape_string($category_name);
        $sql = "UPDATE categories SET category_name = '$category_name',
                                                status = '$status' 
                                    WHERE category_id = $category_id";
		return $this->db->conn->query($sql);
    }

    public function deleteCategory($category_id)
    {
        $sql = "DELETE FROM categories WHERE category_id = $category_id";
		return $this->db->conn->query($sql);
    }
}