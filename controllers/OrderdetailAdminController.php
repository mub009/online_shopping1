<?php
/**
* @author fayiza 
* @version 1.0
* @created date 14/03/17
* @modified date 16/03/17
*/
namespace app\controllers;
use app\models\TblOrder;
use app\models\TblRegistration;
use yii;
class OrderdetailAdminController extends \yii\web\Controller

    /**
     * actionIndex its function and calling index page
     * @param no param
     * @return 
     */
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
        $model=new TblOrder();
        $data=$model->getuser();
       // print_r($data);
       // die();
        return $this ->render('insert',['data'=>$data, 'model'=>$model]);
       
    }

}
