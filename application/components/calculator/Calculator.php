<?php
	namespace application\components\calculator;

	class Calculator
	{
		public $nominalPercent = '';
		public $duration = '';
		public $cost = '';
		public $overPayment = '';
		public $nominalPayment = '';
		public $entrancePayment = '';
		public $preRemainSharePayment = '';
		public $monthSharePayment = '';
		public $MRP = 2525;
		public $memberPayment;
		public $remainSharePayment = '';
		public $monthPayment = '';
		public $remain = '';

		public $mainMessage = '';
		public $durationMessage = '';
		public $costMessage = '';
		public $nominalMessage = '';

		public function __construct()
		{
			$this->checkFieldValues();
		}

		private function checkFieldValues()
		{
			if(!empty($_GET)){
				if(isset($_GET['duration']) && isset($_GET['cost']) && isset($_GET['nominal'])){
					if($_GET['duration'] >= 1 && $_GET['duration'] <= 180){
						$this->duration = $_GET['duration'];
					}
					else{
						$this->durationMessage = 'Срок не должен превышать 180 мес.';
					}
					
					if($_GET['cost'] >= 3000000){
						$this->cost = $_GET['cost'];
					}
					else{
						$this->costMessage = 'Минимальная стоимость объекта 3 млн тенге';
					}
					
					if($_GET['nominal'] >= 28){
						$this->nominalPercent = $_GET['nominal'];
					}
					else{
						$this->nominalMessage = 'Минимальная стоимость объекта 3 млн тенге';
					}
					
					if(!empty($this->duration) && !empty($this->cost) && !empty($this->nominalPercent)){
						$this->setGraphValues($this->duration, $this->cost, $this->nominalPercent);
					}
				}
				else{
					$this->mainMessage = 'Заполните необходимые поля!';
				}
			}
		}

		private function setGraphValues($duration, $cost, $nominalPercent)
		{
			$this->entrancePayment = $cost * 0.07;
			$this->nominalPayment = ($cost * $nominalPercent) / 100;
			$this->preRemainSharePayment = $cost - $this->nominalPayment;
			$this->monthSharePayment = $this->preRemainSharePayment / $duration;
			$this->memberPayment = $this->MRP * 2;
			$this->monthPayment = $this->monthSharePayment + $this->memberPayment;
			$this->remain = $this->memberPayment * $duration;
			$this->overPayment = $this->remain + $this->entrancePayment;
		}
	}
