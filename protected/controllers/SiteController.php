<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	public function actionAjax()
	{
		try {
			$wareId = (int) $_POST['wareId'];
			$Warematerials = Warematerials::model()->findAll('IDWare = :id ', array(
				':id' => $wareId
			));

			$materialsCost = 0;
			foreach ($Warematerials as $wm) {
				$materialsCost += $wm->CountMaterials * $wm->iDMH->UnitCost; 	
			}

			$Warecontent = Warecontent::model()->findAll('IDWare = :id ', array(
				':id' => $wareId
			));

			foreach ($Warecontent as $wc) {
				$materialsCost += $wc->CountHardware * $wc->iDMH->UnitCost; 	
			}


			$equipCost = 0;
			foreach ($Warematerials as $wm) {
				$equipCost += $wm->HoursEquip * $wm->iDEquip->CostHour; 	
			}

			$workCost = 0;
			foreach ($Warematerials as $wm) {
				$workCost += $wm->HoursWork * $wm->iDWork->CostHour; 	
			}
			
			$equipHours = 0;
			foreach ($Warematerials as $wm) {
				$equipHours += $wm->HoursEquip; 	
			}

			$workHours = 0;
			foreach ($Warematerials as $wm) {
				$workHours += $wm->HoursWork; 	
			}

			$maxHours = max($equipHours, $workHours);

			$otherCost = 0;
			$countProducts = Wares::model()->count();

			foreach (addexpences::model()->findAll() as $aex) {
				$otherCost += $aex/$countProducts*$maxHours;
			}

			$summary = $materialsCost + $equipCost + $workCost + $otherCost;
		} catch(CExeption $e) {
			echo CJSON::encode(array('status' => false, 'msg' => $e->getMessage()));
			die();
		}

		$res = array(
				'materialsCost' => ($materialsCost/10),
				'equipCost' => ($equipCost/10),
				'workCost' => ($workCost/10),
				'otherCost' => ($otherCost/10),
				'summary' => ($summary/10),
			);

		echo CJSON::encode(array('status' =>  true,'results' => $res));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}