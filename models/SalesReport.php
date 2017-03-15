<?php

namespace app\models;
use Yii;
use yii\base\Model;


class SalesReport extends Model
{
    public $fromdate;
    public $todate;
    public $month;
    public $year;
    public function rules()
    {
        return [
            
            [['fromdate','todate'], 'required'],
        ];
    }
 
 public function comparedate()
    {
        return $data = Yii::$app->db->createCommand("select dat_order_date from tbl_order")->queryAll();
    }

}

