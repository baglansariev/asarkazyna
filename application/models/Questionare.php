<?php
	namespace application\models;

	use application\core\Model;

	class Questionare extends Model
	{
		public function index()
		{
			$this->sendQuestion();
			
			return $this->db->getAllRows("SELECT questions.NAME AS QUEST_NAME, questions.DATE AS QUEST_DATE, questions.TEXT AS QUEST_TEXT, answers.DATE AS ANS_DATE, answers.TEXT AS ANS_TEXT FROM questions LEFT JOIN answers on questions.ID = answers.QUESTION_ID");
		}

		public function sendQuestion()
		{
			if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['text'])){
				$name = mysqli_real_escape_string($this->db->link, htmlspecialchars($_POST['name']));
				$email = mysqli_real_escape_string($this->db->link, htmlspecialchars($_POST['email']));
				$phone = (int) mysqli_real_escape_string($this->db->link, htmlspecialchars($_POST['phone']));
				$text = mysqli_real_escape_string($this->db->link, htmlspecialchars($_POST['text']));

				$this->db->changeData("INSERT INTO questions SET `NAME` = '$name', `EMAIL` = '$email', `PHONE` = $phone, `TEXT` = '$text'");
			}
		}
	}
