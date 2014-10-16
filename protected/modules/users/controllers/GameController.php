<?php

class GameController extends Controller
{
	public function actionIndex()
	{
		$this->renderPartial('index');
	}
}