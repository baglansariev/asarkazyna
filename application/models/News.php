<?php
	namespace application\models;

	use application\core\Model;

	class News extends Model
	{
		public function showAll()
		{
			return $this->db->getAllRows("SELECT * FROM news ORDER BY `date` DESC");
		}

		public function showOne()
		{
			$uri = trim($_SERVER['REQUEST_URI'], '/');
			$uri = explode('/', $uri);
			$id = array_pop($uri);
			
			return $this->db->getRow("SELECT * FROM news WHERE id = $id");
		}
	}
