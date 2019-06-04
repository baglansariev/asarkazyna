<?php
	namespace application\models;

	use application\core\Model;

	class Account extends Model
	{
		public function login()
		{
			if(!empty($_POST)){
				if(isset($_POST['login']) && isset($_POST['password'])){
					$login = $_POST['login'];
					$password = $_POST['password'];
					$result = $this->db->getRow("SELECT * FROM users WHERE login = '$login'");

					if($result){
						if(password_verify($password, $result['PASSWORD'])){
							$_SESSION['auth'] = true;
							$_SESSION['login'] = $login;
							$_SESSION['status'] = $result['STATUS'];
							
							header('Location: /account');
						}
						else{
							return 'неправильный логин или пароль';
						}
					}
					else{
						return 'неправильный логин или пароль';
					}
				}
			}
		}

		public function register()
		{
			if(!empty($_POST)){
				if(	isset($_POST['reg-login']) &&
		    		isset($_POST['reg-password']) &&
		    		isset($_POST['reg-confirm'])){

						$login = $_POST['reg-login'];
						$password = $_POST['reg-password'];
						$confirm = $_POST['reg-confirm'];

		    			$loginCheck = $this->db->getRow("SELECT * FROM users WHERE login = '$login'");
		    			if(!$loginCheck){
		    				if($password == $confirm){
		    					$password = password_hash($password, PASSWORD_DEFAULT);
		    					$this->db->changeData("INSERT INTO users SET login = '$login', password = '$password'");

		    					return 'Вы успешно зарегистрировались';
		    				}
		    				else{
		    					return 'Пароли не совпадают';
		    				}
		    			}
		    			else{
		    				return 'Такой логин уже существует';
		    			}
		    	}
		    	else{
		    		return 'Заполните все поля';
		    	}
			}
		}

		public function index()
		{
			return $this->db->getAllRows("SELECT ID, NAME, PAY_SUM, STATUS FROM payers");
		}
	}
