<?php


/**
* @author Mubashir <pro.mubashir@outlook.com>
* created date : 15/03/2017
*/

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
    
   <div class="col-lg-4"  style="width: 100%;height: 900px;border:dotted;float:left;margin-left:0px;">

  
<?php $form = ActiveForm::begin() ?>


<div class="col-lg-4"  style="width: 30%;height: 900px;float:left;margin-left:0px; pa">
<h2>Add Category</h2><hr>

    <?= $form->field($model, 'category') ?>


   </div> <?= Html::submitButton('Add',[ 'name'=>'add', 'value' => 'view', 'class' => 'btn btn-default','data-pjax' => 0]) ?></div>

<?php ActiveForm::end(); ?>




</div>