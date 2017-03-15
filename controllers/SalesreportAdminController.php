<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\SalesReport;

class SalesreportAdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSales()
    {
        $model = new SalesReport();
        //return $this->render('index', ['model' => $model]);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) 
        {
            //valid data received in $model
            echo $model->fromdate;
            echo $model->todate;
            die();
            $data = $model->comparedate();
            print_r($data);
            //return $this->render('insert',['data'=>$data]); 

            //return $this->render('index', ['model' => $model]);
        } 
        else 
        {
           return $this->render('index', ['model' => $model]); 
        }
        
    }

    public function actionCompare()
    {
        $model = new SalesReport();
        $data = $model->comparedate();
        //print_r($data);
        return $this->render('insert',['data'=>$data]);
    }

    
       // return $this->render('insert',['data'=>$data]);
    
    

}