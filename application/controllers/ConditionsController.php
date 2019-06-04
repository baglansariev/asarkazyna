<?php
	namespace application\controllers;

	use application\core\Controller;
	use application\components\calculator\Calculator;

	class ConditionsController extends Controller
	{
		public $calculator;

	    public function indexAction()
	    {
	    	$this->calculator = new Calculator;

	    	$arr = [
	    		'mainMessage' => $this->calculator->mainMessage,
	    		'durationMessage' => $this->calculator->durationMessage,
	    		'costMessage' => $this->calculator->costMessage,
	    		'nominalMessage' => $this->calculator->nominalMessage,
	    		'duration' => $this->calculator->duration,
	    		'cost' => $this->calculator->cost,
	    		'nominalPercent' => $this->calculator->nominalPercent,
	    		'nominalPayment' => $this->calculator->nominalPayment,
	    		'overPayment' => $this->calculator->overPayment,
	    		'entrancePayment' => $this->calculator->entrancePayment,
	    		'monthSharePayment' => $this->calculator->monthSharePayment,
	    		'memberPayment' => $this->calculator->memberPayment,
	    		'preRemainSharePayment' => $this->calculator->preRemainSharePayment,
	    		'monthPayment' => $this->calculator->monthPayment,
	    		'remain' => $this->calculator->remain,
	    		'class' => '',
	    	];
	    	$this->view->render('Условия', $arr);
	    }
	}
