<?php

namespace app\controllers;
use app\models\Category;
use app\models\TblCategories;
use yii;


/**
* @author Mubashir <pro.mubashir@outlook.com>
* created date : 15/03/2017
*/


class CategoryadminController extends \yii\web\Controller
{
        /**
     * actionIndex its function and calling index page
     * @parm no param
     * @return model object
     */

    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * actionAdd its function and showing adding category page
     * @parm no param
     * @return 
     */
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


    /**
     * actionDisplay its function and showing adding category page
     * @parm no param
     * @return 
     */

    function actionDisplay()
    {

    	
    }

}
