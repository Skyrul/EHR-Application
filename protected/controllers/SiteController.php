<?php

class SiteController extends Controller
{
    
    public $defaultAction = 'applicationform';
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

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
		    $this->dd($error);
// 			if(Yii::app()->request->isAjaxRequest)
// 				echo $error['message'];
// 			else
// 				$this->render('error', $error);
		}
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
	
// 	public function actionTest()
// 	{
// 	    foreach(Yii::app()->params['recipient'] as $k=>$v) {
// 	        $info = array(
// 	            'sent_to'=>$v,
// 	            'sent_name'=>$v,
// 	            'subject'=> Yii::app()->name,
// 	            'bodyhtml'=>'Test'
// 	        );
// 	        $this->sendMail($info);
// 	    }
// 	}
	
	public function actionApplicationform()
	{	    
	    $applicant = new Applicant();
	    
	    // uncomment the following code to enable ajax-based validation
	     if(isset($_POST['ajax']) && $_POST['ajax']==='applicant-applicationform-form')
	     {
	         echo CActiveForm::validate($applicant);
    	     Yii::app()->end();
	     }
	    
	    if(isset($_POST['Applicant']))
	    {
	        $applicant->attributes=$_POST['Applicant'];
	        if($applicant->validate())
	        {
	            // form inputs are valid, do something here
	            $applicant->save();
	            
	            // send email
	            $arr_rcpt = array();
	            foreach(Yii::app()->params['recipient'] as $k=>$v) {
	                array_push($arr_rcpt, $v);
	            }
	            $html  = '<h2>New Application Form</h2>';
	            $html .= '<strong>Name:</strong> ' . $applicant->last_name . ', ' . $applicant->first_name . '<br><br>';
	            $html .= '<a href="'. Yii::app()->params['pdfviewer']. $this->programAuthURL() .'/eapplication/index.php/site/view/'. $applicant->id .'">View PDF</a><br>';
	            $html .= '<a href="'. $this->programURL() .'/eapplication/index.php/site/admin">Access Admin Dashboard</a><br>';
	            $html .= 'Temporary Login<br>';
	            $html .= 'UID: admin <br> PWD: LetmeIN';
	            $info = array(
	                'sent_to'=>$arr_rcpt,
	                'sent_name'=>'HR Application Form',
	                'subject'=> Yii::app()->name,
	                'bodyhtml'=> $html
	            );
// 	            $this->dd($info);
	            $this->sendMail($info);
	            
	            // redirect
	            $this->redirect('index.php/site/formsubmitted');
	            return;
	        }
	    }
	 
	    $this->render('applicationform', array(
	        'applicant'=>$applicant,
	    ));
	}
	
	public function actionFormsubmitted()
	{
	    $this->render('formsubmitted');
	}

	public function actionAdmin() 
	{
	    $this->require_auth();
	    $this->render('admin');
	}
	
	public function actionView($id=0)
	{
// 	    $this->require_auth();
	    if ($id!=0) {
	        $model = Applicant::model()->findByPk($id);
	        $this->renderPartial('view', array('model'=>$model));
	    }
	}
	
	public function actionDelete($id=0)
	{
// 	    $this->require_auth();
	    if ($id!=0) {
	        $model = Applicant::model()->findByPk($id);
	        $model->delete();
	        Yii::app()->user->setFlash('success', 'Record Deleted');
	        $this->redirect($this->programURL().'/eapplication/index.php/site/admin');
	    }
	}
}