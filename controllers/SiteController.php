<?php

/**
* @author Mubashir <pro.mubashir@outlook.com>
* created date : 8/03/2017
*/

namespace app\controllers;
use yii;
use app\models\Loginrules;
use app\models\TblProduct;
use \yii\web\Controller;
use yii\filters\AccessControl;


class SiteController extends Controller
{


    /**
     * actionIndex its function and calling index page
     * @param no param
     * @return its return where you going link and two datas,data_mobile and data_laptop
     */


    public function actionIndex()
    {
        $TblProduct_model=new TblProduct();
        $data_mobile=$TblProduct_model->readmobiledata();
        $data_laptop=$TblProduct_model->readlaptopdata();
        //print_r($data);

         return $this->render('index', [
            'data_mobile' => $data_mobile,
            'data_laptop' => $data_laptop]);    
    }

   }
