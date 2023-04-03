<?php

class ConnectDB {
	public $conn;
	public function __construct()
	{
		$this->conn = new mysqli("localhost", "root", "Rajdip@2001", "local_notepad_app");
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}
	}

	public function query($sql){
		$result = $this->conn->query($sql);
		return $result;
	}
}
?>