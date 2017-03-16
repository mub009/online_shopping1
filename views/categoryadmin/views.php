<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\Linkpager;
use yii\widgets\ActiveForm;
?>

<div class="row">


<?php $form = ActiveForm::begin() ?>


<div class="col-lg-4"  style="width: 100%;height: 300px;float:left;margin-left:0px; pa">
	
	<h2>Add Category</h2><hr>

    <?= $form->field($model, 'category') ?>


   </div> <?= Html::submitButton('Add',[ 'name'=>'add', 'value' => 'view', 'class' => 'btn btn-default','data-pjax' => 0]) ?>

    <h1>Display Category <hr></h1>
<?php 


$count_data=count($data);

for($i=0;$i<$count_data;$i++)
{ 
echo $data[$i]['Vchr_main_Categorie']."<br>";
}


?>

   </div>

<?php ActiveForm::end(); ?>


    </div>
 </div>

