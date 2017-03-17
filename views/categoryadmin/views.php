<?php

/**
* @author mubashir
* @version 1.0
* @created date : 15/03/2017
* @modified date : 16/03/2017
*/
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\Linkpager;
use yii\widgets\ActiveForm;
?>

<div class="row">


<?php $form = ActiveForm::begin() ?>

<div style="float:left;width:100%;">
	<div class="col-lg-8"  style="width: 40%;height: 400px;float:left;margin-left:0px;">
	
	<h2>Add Category</h2><hr>

    <?= $form->field($model, 'category') ?>

	</div>


	<div class="col-lg-4"  style="width: 10%; height: auto;float:left;margin-left:0px;padding-top: 120px;">
	
    <?= Html::submitButton('Add',[ 'name'=>'add', 'value' => 'view', 'class' => 'btn btn-default','data-pjax' => 0]) ?><?php ActiveForm::end(); ?>

  	</div>

	<div class="col-lg-12"  style="width: 50%;height: auto;border-left:dotted #ff0000;float:left;margin-left:0px;">
<h1> Display Category</h1><hr>
<table>

<tr><th>Index&nbsp;&nbsp;</th><th>Category &nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>
<?php 


$count_data=count($data);

$num=1;

for($i=0;$i<$count_data;$i++)
{ 
	$num=$i;
echo "<tr><td>".$num."</td><td>".$data[$i]['Vchr_main_Categorie']."</td><td>"."<a href=>update</a>&nbsp;&nbsp;"."</td><td>"."<a href=>delete</a>&nbsp;&nbsp;"."</td></tr>";
}


?>
</table>

		</div>
   </div>





