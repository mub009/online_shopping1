<?php
/**
* @author athirakrishnanp <athirakrishnanp94@gmail.com>
* @version 1.0
* @created date : 13/03/2017
* @modified date : 14/03/2017
*/
namespace app\models;
use Yii;
use yii\base\Model;
use dosamigos\highcharts\HighCharts;
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
    * @function rulres() used for form data validation
    */
    public function rules()
    {
        return [
            
            [['fromdate','todate'], 'required'],
        ];
    }


 /**
 * function comparedate() for comparing date from interface and  from database 
 * @param string $from store date
 * @param string $to store date
 */
 public function comparedate($from,$to)
    {
        if(!(gettype($from=='string'))&&(gettype($from=='string')))
        {
            echo "error";
        }
        else
        {
            $from;
            $to;
         
            return $data = Yii::$app->db->createCommand("select Vchr_main_Categorie,count(*) as 'num' from tbl_order JOIN tbl_product on (tbl_order.Fk_int_product_id=tbl_product.Pk_int_product_id) JOIN tbl_categories on (tbl_product.Fk_int_categories_id=tbl_categories.Pk_int_categories_id) where dat_order_date between '$from' and '$to' group by Vchr_main_Categorie")->queryAll();
        }
    }

}


