<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblSubcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-subcategory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vch_subcategory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fk_int_categories_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
