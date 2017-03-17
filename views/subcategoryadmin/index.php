<?php
	/* @var $this yii\web\View */
	/**
	* @author husnath <husnathpalakkal773@gmail.com>
	* created date : 15/03/2017
	**/
		use yii\helpers\Html;
		use yii\widgets\ActiveForm;
?>
    
<div class="col-lg-4"  style="width: 100%;height: 800px;border:dotted;float:left;margin-left:0px;	">
	<div style="float:left;width:40%">
		<?php $form = ActiveForm::begin(); ?>
  			<div class="col-lg-4"  style="width: 80%;height: 800px;float:left;margin-left:0px;">
				<h2>Add Subcategory</h2><hr>
				<?php
				$maxvalues= ['Mobile' => 'Mobile', 'LapTop' => 'LapTop'];
            	echo $form->field($model, 'category_name')->dropDownList($maxvalues); ?> 
    			<?= $form->field($model, 'subcategory_name') ?>
					<div class="form-group">
        				<?= Html::submitButton('Add', ['class' => 'btn btn-primary pull-right']) ?>
        			</div>
        	</div>
		<?php ActiveForm::end(); ?>
	</div>

	<div style="float:left;width:250px">
		<h3>View</h3>
		<table>
		<?php
		$count=count($data);
		
		for($i=0;$i<$count;$i++)
		{
			echo "<tr><td>".$data[$i]['vchr_subcategory']."</td>";
			?>
			<td>-  -</td>
			<td><a href="subcategory/view">Delete</a></td>
			<td>-  -</td>
			<td><a href="subcategory/view">Rename</a></td></tr>
			
			<?php
		}
		?>
		</table>
	</div>
</div>
