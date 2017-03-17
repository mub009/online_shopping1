<?php
/**
* @author fayiza 
* @version 1.0
* @created date 14/03/17
* @modified date 16/03/17
*/
//echo "inserted";

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\helpers\ArrayHelper;
use app\models\TblOrder;
use app\models\TblRegistration;
//print_r($data);
$count=count($data);
?>
<?php $form = ActiveForm::begin(); ?>
<h2>order_details</h2>
<table border="2" width="10px" cellpadding="5">
<tr><td>id</td><td>first_name</td><td>last_name</td><td>mobile_number</td><td>address</td><td>product_name</td><td>price</td><td>order_id</td><td>order_date</td><td>order_status</td></tr>
<?php 
for($i=0;$i<$count;$i++)
{
	echo "<tr><td>".$data[$i]['pk_int_registration_id']."</td>";
	echo "<td>".$data[$i]['vchr_first_name']."</td>";
	echo "<td>".$data[$i]['vchr_last_name']."</td>";
	
	echo "<td>".$data[$i]['int_mobile_number']."</td>";
	echo "<td>".$data[$i]['text_address']."</td>";
	echo "<td>".$data[$i]['vchr_product_name']."</td>";
	echo "<td>".$data[$i]['int_price']."</td>";
	echo "<td>".$data[$i]['pk_int_order_id']."</td>";
	echo "<td>".$data[$i]['date_order_date']."</td>";
	//echo "</tr>";?>
	
	 
              <!--echo $form->field($model, 'order_status')->dropDownList(ArrayHelper::map(TblOrder::find()->asArray()->all(),'pk_int_order_id','order_status')); -->
	<?php echo "<td>";?><?= Html::dropDownList('listname2', $model, ['confirm'=>'confirm','processing'=>'processing', 'shipping'=>'shipping', 'delivery'=>'delivery']); ?><?php echo "</td></tr>"; ?>
	<?php
}?>

	</table>
<?php ActiveForm::end(); ?>
