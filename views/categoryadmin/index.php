<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
    
   <div class="col-lg-4"  style="width: 100%;height: 900px;border:dotted;float:left;margin-left:0px;">

  
<?php $form = ActiveForm::begin(); ?>


<div class="col-lg-4"  style="width: 30%;height: 900px;float:left;margin-left:0px; pa">
<h2>Add Category</h2><hr>
    <?= $form->field($model, 'category') ?>


    <div class="form-group">
     <?= Html::submitButton('Add') ?>

    </div></div>

<?php ActiveForm::end(); ?>



<?php $form = ActiveForm::begin(); ?>
  
<div class="col-lg-4"  style="width: 30%;height: 900px;float:left;margin-left:0px; pa">
<h2>Remove Category</h2><hr>
          
           <?php
                     $maxvalues= ['500' => '500', '1000' => '1000','2000' => '2000','5000'=>'5000','10000'=>'10000'];
                echo $form->field($model, 'category')->dropDownList($maxvalues); ?>   
             

    <div class="form-group">
        <?= Html::submitButton('Remove', ['class' => 'btn btn-primary pull-right']) ?>
    </div></div>

<?php ActiveForm::end(); ?>


<?php $form = ActiveForm::begin(); ?>
  
<div class="col-lg-4"  style="width: 30%;height: 900px;float:left;margin-left:0px; pa">
<h2>Edit Category</h2><hr>
 

<?php
                     $maxvalues= ['500' => '500', '1000' => '1000','2000' => '2000','5000'=>'5000','10000'=>'10000'];
                echo $form->field($model, 'category')->dropDownList($maxvalues); ?> 

                   <?= $form->field($model, 'Category_Name') ?>

    <div class="form-group">
        <?= Html::submitButton('Confirm', ['class' => 'btn btn-primary pull-right']) ?>
    </div></div>

<?php ActiveForm::end(); ?>


</div>

