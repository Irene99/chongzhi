<?php

class DefaultController extends Controller
{
	//public $layouts = null ;
	public function actionIndex()
	{
		$this->renderPartial('index');
	}

	public function actionLogin()
	{
		$this->renderPartial('login');
	}

}
