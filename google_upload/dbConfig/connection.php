<?php
include_once("dbconfig.php");
class Database{
    public $connection;
    public function __construct()
    {
        $this->open_db_connection();
    }
    public function open_db_connection()
	{
		$this->connection=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		if($this->connection->connect_errno)
		{
			echo "Connection faliled".$this->connection->connect_error;
		}

    }
    public function query($query)
	{
		$result=$this->connection->query($query);
		if(!$result)
		{
			echo "Query failed";
		}
		return $result;
	}
}
$database=new Database();