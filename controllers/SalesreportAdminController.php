<?php
/**
* @author athirakrishnanp
* @version 1.0
* @created date : 13/03/2017
* @modified date : 15/03/2017
*/
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\SalesReport;

/**
 * SalesreportAdminController implements the 
 */
class SalesreportAdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
    * Shows sales report
    * @param no param
    * @return date
    */
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

    /**
    

    public function actionCompare()
    {
        $model = new SalesReport();
        $data = $model->comparedate();
        //print_r($data);
        return $this->render('insert',['data'=>$data]);
    }

    
        return $this->render('insert',['data'=>$data]);
    
    */

}
