<?php
/**
* @author husnath <husnathpalakkal773@gmail.com>
* created date : 15/03/2017
**/
namespace app\controllers;
use app\models\TblSubcategory;
use yii;


class SubcategoryadminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAdd()
    {

       $model = new TblSubcategory();

    	if($model->load(yii::$app->request->post()) && $model->validate())
    	{

    		echo "done";
    		$model->addUserDetails($model->subcategory_name);
            
    	}
    	else
    	{
    		return $this->render('add',['model'=>$model]);

    	}



    }
    public function actionRemove()
    {

       $model = new subcategory();

    	if($model->load(yii::$app->request->post()) && $model->validate())
    	{

    		echo "deleted";
    		$model->deleteUserDetails($model->category_name,$model->subcategory_name);

            
    	}
    	else
    	{
    		return $this->render('remove',['model'=>$model]);

    	}



    }
   
    public function actionEdit()
    {

       $model = new subcategory();

    	if($model->load(yii::$app->request->post()) && $model->validate())
    	{

    		echo "renamed";
    		$model->editUserDetails($model->category_name,$model->subcategory_name,$model->subcategory_rename);
            
    	}
    	else
    	{
    		return $this->render('edit',['model'=>$model]);

    	}



    }

}
