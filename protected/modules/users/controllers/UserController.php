<?php

class UserController extends Controller
{
	//public $layouts = null ;
	public function actionIndex()
	{
		$this->renderPartial('index');
	}

	public function actionProfile()
	{
		$this->renderPartial('profile');
	}

	public function actionFace()
	{
		$this->renderPartial('face');
	}

	public function actionFcm()
	{
		$this->renderPartial('fcm');
	}

	public function actionPassword()
	{
		$this->renderPartial('password');
	}

}