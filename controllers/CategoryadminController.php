<?php
/**
* @author Mubashir <pro.mubashir@outlook.com>
* created date : 15/03/2017
**/

namespace app\controllers;
use app\models\Category;
use app\models\TblCategories;
use yii;

class CategoryadminController extends \yii\web\Controller
{
    /**
     * actionIndex its function and calling index page
     * @parm no param
     * @return model object
    **/

    public function actionIndex()
    {
        
     $model_view=new TblCategories();
    
      $data=$model_view->views();
      
      //print_r($data);die();
    
    // return $this->render('views',['data'=>$data]);  
      
 
      //  return $this->render('index');


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

            return $this->render('views',['model'=>$model,'data'=>$data]);

        }






    }

    /**
     * actionAdd its function and showing adding category page
     * @parm no param
     * @return 
    **/

    public function actionAdd()
    {
<<<<<<< HEAD
        $model=new Category();
        if($model->load(yii::$app->request->post()) && $model->validate())
=======

       $model=new Category();
       

    	if($model->load(yii::$app->request->post()) && $model->validate())
>>>>>>> 48a7857684acbe7405f1e90363c1b84806ad8fa5
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
<<<<<<< HEAD
}
=======


    /**
     * actionDisplay its function and showing adding category page
     * @parm no param
     * @return 
     */

   public function actionDisplay()
    {

    	$model_view=new TblCategories();
    
      $data=$model_view->views();
      //print_r($data);die();
    
     return $this->render('views',['data'=>$data]);  
        
    }

}
>>>>>>> 48a7857684acbe7405f1e90363c1b84806ad8fa5
