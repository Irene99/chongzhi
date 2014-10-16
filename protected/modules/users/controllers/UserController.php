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

	public function actionPassworddo()
	{
		$this->renderPartial('passworddo');
	}

	public function actionProfiledo()
	{
		$this->renderPartial('profiledo');
	}

	public function actionLogout()
	{
		$this->renderPartial('logout');
	}

	public function actionRegister()
	{
		$this->renderPartial('register');
	}

}