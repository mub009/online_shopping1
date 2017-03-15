<?php

namespace app\controllers;
use app\models\TblOrder;
use yii;
class OrderdetailAdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
 public function actionGetuser()
    {
        $test=new TblOrder();
        $data=$test->getuser();
        //print_r($data);
        return $this ->render('insert',['data'=>$data]);
    }

}
