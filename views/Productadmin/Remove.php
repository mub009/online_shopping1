<?php
/* @var $this yii\web\View */
/**
* @author anas
* created date : 8/03/2017
*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
    
   <div class="col-lg-4"  style="width: 100%;height: 900px;border:dotted;float:left;margin-left:0px">

  

<?php $form = ActiveForm::begin(); ?>
  
<div class="col-lg-4"  style="width: 30%;height: 900px;float:left;margin-left:0px; pa">
<h2>Product management </h2><hr>
    <?php
    $maxvalues=['Mobile' => 'mobile','laptop' => 'laptop'];
    echo $form->field($model,'category')->dropDownList($maxvalues);
    ?>

  <?php
    $maxvalues=['Mobile' => 'mobile','laptop' => 'laptop'];
    echo $form->field($model,'subcategory')->dropDownList($maxvalues);
    ?>
  <?=$form->field($model,'item_name')?>
  <?=$form->field($model,'image')?>
  <?=$form->field($model,'price')?>
  <?=$form->field($model,'product_details')->textarea()?>

    <div class="form-group">
        <?= Html::submitButton('Remove', ['class' => 'btn btn-primary pull-right']) ?>  
    </div></div> 

<?php ActiveForm::end(); ?>



</div>

