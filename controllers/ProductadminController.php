<?php
/**
* @author anas
* created date : 8/03/2017
*/

namespace app\controllers;
use app\models\Product;
use yii;


class ProductadminController extends \yii\web\Controller
{
    /**
*actionIndex its function and calling index page
*@param no param
*@return no return
**/
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAdd()
    {
/**
*actionIndex its function and adding index page
*@param no param
*@return 
**/
       $model=new Product();

    	if($model->load(yii::$app->request->post()) && $model->validate())
    	{



    	}
    	else
    	{
    		return $this->render('index',['model'=>$model]);

    	}



    }

}
