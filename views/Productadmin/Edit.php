<?php
/* @var $this yii\web\View */
/**
* @author anas
* created date : 15/03/2017
**/
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
    
   <div class="col-lg-4"  style="width: 100%;height: 900px;border:dotted;float:left;margin-left:0px;">

  

<?php $form = ActiveForm::begin(); ?>
  
<div class="col-lg-4"  style="width: 30%;height: 900px;float:left;margin-left:0px; pa">
<h2>Rename Subcategory</h2><hr>


 

<?php
                     $maxvalues= ['Mobile' => 'Mobile', 'LapTop' => 'LapTop'];
                echo $form->field($model, 'category_name')->dropDownList($maxvalues); ?> 
                <?php
                     $maxvalues= ['one' => 'one', 'two' => 'two','three' => 'three','four'=>'four','five'=>'five'];
                echo $form->field($model, 'subcategory_name')->dropDownList($maxvalues); ?> 

                   
                   <?= $form->field($model, 'subcategory_rename') ?>
                   <?=$form->field($model,'item_name')?>

                   <?=$form->field($model,'image')?>

                   <?=$form->field($model,'price')?>

                   <?=$form->field($model,'product_details')->textarea()?>

    <div class="form-group">
        <?= Html::submitButton('Confirm', ['class' => 'btn btn-primary pull-right']) ?>
    </div></div>

<?php ActiveForm::end(); ?>


</div>

