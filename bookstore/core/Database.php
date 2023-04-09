<?php
class Database
{
	// Variables to connect database
	public $conn = NULL;
	private $server = 'localhost';
	private $dbName = 'bookstore';
	private $user = 'root';
	private $password = '';	

	// Construct connect database
	public function __construct() {
		$this->conn = new mysqli($this->server, $this->user, $this->password, $this->dbName);

		if ($this->conn->connect_error) {
			printf($this->conn->connect_error);
			exit();
		}
		$this->conn->set_charset("utf8");
	}

	// Connect database
	public function connect()
	{
		$this->conn = new mysqli($this->server, $this->user, $this->password, $this->dbName);

		if ($this->conn->connect_error) {
			printf($this->conn->connect_error);
			exit();
		}
		$this->conn->set_charset("utf8");
	}

	// Disconnect database
    public function closeDatabase()
	{
		if ($this->conn) {
			$this->conn->close();
		}
	}
}

?>