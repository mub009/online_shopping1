<?php

namespace app\controllers;
use yii;
use app\models\Loginrules;
use app\models\TblProduct;
use \yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class LoginController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
// * function its login function 
    
    public function actionLogin()
    {

    	$model=new Loginrules();
   

    	if($model->load(Yii::$app->request->post()) && $model->validate())
    	{
    		

    	}
    	else
    	{
    		
    		return $this->render('index',['model'=>$model]);
    	}

    }

}
