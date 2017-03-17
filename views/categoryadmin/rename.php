<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\Linkpager;
use yii\widgets\ActiveForm;
?>

<div class="row">


<?php $form = ActiveForm::begin() ?>


	<div class="col-lg-8"  style="width: 40%;border: dotted; height: auto;float:left;margin-left:0px;">
	
	<h2>Rename Category</h2><hr>
   
    <?= $form->field($model, 'category') ?>

	</div>


	<div class="col-lg-4"  style="width: 60%;border: dotted; height: auto;float:left;margin-left:0px;padding-top: 120px;">
	
    <?= Html::submitButton('Update',[ 'name'=>'add', 'value' => 'view', 'class' => 'btn btn-default','data-pjax' => 0]) ?><?php ActiveForm::end(); ?>

  		 </div>
  </div>