<?php
	namespace application\lib;
	
	class Db
	{
		protected $db;
		public $link;
		public $uri;

		public function __construct()
		{
			$this->db = include($_SERVER['DOCUMENT_ROOT']. '/application/config/db.php');
			$this->setLink($this->db);
			$this->uri = trim($_SERVER['REQUEST_URI'], '/');
		}

		public function getAllRows($query)
		{
			$result = mysqli_query($this->link, $query) or die(mysqli_error($this->link));
			for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			return $data;
		}

		public function getRow($query)
		{
			$result = mysqli_query($this->link, $query) or die(mysqli_error($this->link));
			$row = mysqli_fetch_assoc($result);
			return $row;
		}

		public function changeData($query)
		{
			mysqli_query($this->link, $query) or die(mysqli_error($this->link));
		}


		private function setLink($db = [])
		{
			$this->link = mysqli_connect($db['host'], $db['username'], $db['password'], $db['db']);
			mysqli_query($this->link, "SET NAMES 'utf8'");
		}
	}
