<?php
class Database
{
	public $conn = NULL;
	private $server = 'localhost';
	private $dbName = 'double_h';
	private $user = 'root';
	private $password = '';

	// private $server = 'localhost';
	// private $dbName = 'usergezpcied_doubleh';
	// private $user = 'usergezpcied_doublehadmin';
	// private $password = '5Ci9cVCDF2';


	public function connect()
	{

		$this->conn = new mysqli($this->server, $this->user, $this->password, $this->dbName);

		if ($this->conn->connect_error) {
			printf($this->conn->connect_error);
			exit();
		}
		$this->conn->set_charset("utf8");
	}

	public function closeDatabase()
	{
		if ($this->conn) {
			$this->conn->close();
		}
	}
}