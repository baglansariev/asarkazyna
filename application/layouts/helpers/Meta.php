<?php
	namespace application\layouts\helpers;

	use application\lib\Db;

	class Meta
	{
		public $db;

		public function __construct()
		{
			$this->db = new Db;
		}
		
		public function getMetaDesc()
		{
			$data = $this->db->getAllRows("SELECT * FROM menu");
			foreach ($data as $key => $val) {
				if($val['ALIAS'] == '/'.$this->db->uri){
					return $val['DESCRIPTION'];
				}
			}
		}

		public function getMetaKey()
		{
			$data = $this->db->getAllRows("SELECT * FROM menu");
			foreach ($data as $key => $val) {
				if($val['ALIAS'] == '/'.$this->db->uri){
					return $val['KEY_WORDS'];
				}
			}
		}
	}
