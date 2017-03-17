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
    /**
     * @function actionIndex used for add,delete,rename,view the subcategory name
     * @param no param
     * @return it return to the index page 
    */
    public function actionIndex()
    {
        $model = new TblSubcategory();
        $data=$model->viewUserDetails();
        if($model->load(yii::$app->request->post()) && $model->validate())
        {
            echo "done";
            $model->addUserDetails($model->subcategory_name); 
        }
        else
        {
            return $this->render('index',['model'=>$model,'data'=>$data]);
        }
    }  
}