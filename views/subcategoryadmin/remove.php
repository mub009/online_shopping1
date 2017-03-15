<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
    
   <div class="col-lg-4"  style="width: 100%;height: 900px;border:dotted;float:left;margin-left:0px;">

  

<?php $form = ActiveForm::begin(); ?>
  
<div class="col-lg-4"  style="width: 30%;height: 900px;float:left;margin-left:0px; pa">
<h2>Remove Subcategory</h2><hr>

                <?php
                     $maxvalues= ['Mobile' => 'Mobile', 'LapTop' => 'LapTop'];
                echo $form->field($model, 'category_name')->dropDownList($maxvalues); ?> 
    			<?php
                     $maxvalues= ['haii' => 'haii', 'LapTop' => 'LapTop'];
                echo $form->field($model, 'subcategory_name')->dropDownList($maxvalues); ?>


    <div class="form-group">
        <?= Html::submitButton('Remove', ['class' => 'btn btn-primary pull-right']) ?>
        
    </div></div>

<?php ActiveForm::end(); ?>




</div>

