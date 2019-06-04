<?php
	namespace application\layouts\helpers;

	use application\lib\Db;

	class HeaderMenu
	{
		public $db;

		public function __construct()
		{
			$this->db = new Db;
			$this->uri = trim($_SERVER['REQUEST_URI'], '/');
		}

		public function getMenuList()
		{
			return $this->db->getAllRows("SELECT * FROM menu");
		}
	}
