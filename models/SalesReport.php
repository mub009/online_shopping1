<?php
/**
* @author athirakrishnanp
* @version 1.0
* @created date : 13/03/2017
* @modified date : 14/03/2017
*/
namespace app\models;
use Yii;
use yii\base\Model;
/**
 * SalesReport is the model behind the sales report.
 */

class SalesReport extends Model
{
    public $fromdate;
    public $todate;
    public $month;
    public $year;

    /**
    * function rulres() for validation 
    */
    public function rules()
    {
        return [
            
            [['fromdate','todate'], 'required'],
        ];
    }


 /**
 * function comparedate() for comparing date from interface and  from database 
 */
 public function comparedate($from,$to)
    {
         $from;
         $to;
        return $data = Yii::$app->db->createCommand("select dat_order_date,Vchr_product_name from tbl_order JOIN tbl_product on tbl_order.Fk_int_product_id=tbl_product.Pk_int_product_id where dat_order_date between '$from' and '$to'")->queryAll();
      }

}

