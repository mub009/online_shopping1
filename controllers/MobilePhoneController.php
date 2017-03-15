<?php

/**
* @author Mubashir <pro.mubashir@outlook.com>
* created date : 8/03/2017
*/


namespace app\controllers;
use app\models\Loginrules;
use \yii\web\Controller;
use yii;
use app\models\TblProduct;

/**
     * class  class name is MobilephoneController and extends controller
     * functions actionReadmobiledata
     
*/

class MobilephoneController extends Controller
{

 public function actionIndex()
    {
        $this->redirect('index.php?r=mobilephone/readmobiledata');
        //$this->actionMyCustomAction('index.php?r=mobilephone/readmobiledata');

    }

    /**
     * actionReadmobiledata its function and calling index page
     * @parm no param
     * $TblProduct_model its object TblProduct
     * @return its return 'where you going link and two datas,data_mobile_lenovo and data_mobile_moto
     */

    public function actionReadmobiledata()
    {


      $TblProduct_model=new TblProduct();
        $data_mobile_moto=$TblProduct_model->readmobilemoto();
        $data_mobile_lenovo=$TblProduct_model->readmobilelenovo();
        //$data_laptop=$TblProduct_model->readlaptopdata();
        $model=new loginrules();

         return $this->render('index', [
            'model'=>$model,
            'data_mobile_moto' => $data_mobile_moto,
            'data_mobile_lenovo' => $data_mobile_lenovo]);  

        
        if($model->load(yii::$app->request->post()) && $model->validate())
        {

        }
        else
        {
            return $this->render('index',['model'=>$model,
            'data_mobile_moto' => $data_mobile_moto,
            'data_mobile_lenovo' => $data_mobile_lenovo]);
        }
    }


}
