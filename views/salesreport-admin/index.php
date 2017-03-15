<?php
/**
* @author athirakrishnanp
* @version 1.0
* @created date : 13/03/2017
* @modified date : 14/03/2017
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\helpers\ArrayHelper;

?>
<br><br>
<h2><b><u><font color="green">SALES REPORT</font></u></h2><br>
<div style="float: left; height: 100px; width: 200px">
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fromdate')?>
    <?= $form->field($model, 'todate')?>
</div>

<div style=" padding-left: 60px; padding-top: 10px; float: left; height: 100px; width: 150px">
<?php echo Html::dropDownList('listname1', $model, 
          array('sel' => 'Select a month','J' => 'January', 'F' => 'February', 'Ma' => 'March', 'A' => 'April', 'May' => 'May', 'Ju' => 'June', 'Ju' => 'July', 'Au' => 'August', 'S' => 'September', 'O' => 'October', 'N' => 'November', 'D' => 'December')); ?><br><br>
   <!-- $form->dropDownList()-->
   <?= Html::dropDownList('listname2', $model, ['sely'=>'Select year','a'=>'2015', 'b'=>'2016', 'c'=>'2017']); ?>
</div>

    <div style="padding-top: 150px; padding-left: 100px">
     <?= Html::submitButton('Summary Report',['name' =>'sales', 'class' => 'btn btn-primary'])?>
        
    </div>

<?php ActiveForm::end(); ?>
