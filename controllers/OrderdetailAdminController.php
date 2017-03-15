<?php
/**
* @author fayiza 
* @version 1.0
* @created date 14/03/17
* @modified date 15/03/17
*/
namespace app\controllers;
use app\models\TblOrder;
use yii;
class OrderdetailAdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    /**
    * getuser() for showing user details
    * @param no param
    * @return no return value
    */
 public function actionGetuser()
    {
        $test=new TblOrder();
        $data=$test->getuser();
        //print_r($data);
        return $this ->render('insert',['data'=>$data]);
    }

}
