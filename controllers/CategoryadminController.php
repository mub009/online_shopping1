<?php

namespace app\controllers;
use app\models\Category;
use app\models\TblCategories;
use yii;


class CategoryadminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAdd()
    {

       $model=new Category();

    	if($model->load(yii::$app->request->post()) && $model->validate())
    	{
    		if(isset($_POST['add']))
    		{
    			$modelc=new TblCategories();
    			$data=$modelc->addcategory($model->category);
    			if($data)
    			{
    				echo "addded";
    			}
    			else
    			{
    				echo "fail";
    			}


    		}
    	}	
    	else
    	{

    		return $this->render('addadmin',['model'=>$model]);

    	}



    }

    function display()
    {

    	
    }

}
