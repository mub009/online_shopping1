<?php
/**
* @author anas
* created date : 8/03/2017
*/

namespace app\controllers;
use app\models\Product;
use app\models\TblProduct;
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
       $modeldata=new TblProduct();

    	if($model->load(yii::$app->request->post()) && $model->validate())
    	{
            echo "done";
            //print_r($model);
          $modeldata->addUserDetails($model->item_name,$model->image,$model->price,$model->product_details);      
            


        } 
    	else
    	{
    		return $this->render('index',['model'=>$model]);

    	}



    }

  public function actionRemove()
    {

       $model = new Product();

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

       $model = new Product();

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
