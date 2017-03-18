<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubcategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subcategory';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-subcategory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pk_int_id',
            'vch_subcategory',
            'Fk_int_categories_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
