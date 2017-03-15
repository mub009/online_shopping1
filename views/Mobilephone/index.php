<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="row">
    
    <div class="col-lg-4"  style="width: 20%;height: 900px;border:dotted;float:left;margin-left:0px;">

    <h2>Product Filter</h2><hr>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'min') ?>

    <?= $form->field($model, 'max') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>



</div>

            <div class="col-lg-8"  style="width: 80%;border:dotted;height: 900px;float:left;margin-left:0px;">


 <h2>Mobile Phone</h2>

                <hr>
                
<h3>Moto</h3><hr>
              

                <div style="height: 250px;width:100%;">
                        
                                <?php

                               
                               $count_mobile_data=count($data_mobile_moto);
                               for($i=0; $i <$count_mobile_data ; $i++)
                                {
                                        ?>
                                        <div style="float: left;width: 180px;height: 250px;padding-left: 10px;">
                                        <img src="<?php echo $data_mobile_moto[$i]['Vchr_img_path']; ?>" width="150px" height="200px"><div style="padding-left: 40px;"><?php echo "INR"." ".$data_mobile_moto[$i]['Int_Price']."<br>".$data_mobile_moto[$i]['Vchr_sub_Categorie']." ".$data_mobile_moto[$i]['Vchr_product_name']; 
                                        ?></div></div>
                                        <?php 
                                        
                               }
                                ?>
                      </div>
  <h3>Lenovo</h3><hr>
  


                <div style="height: 200px;width:100%;">
                        
                                <?php

                               
                               $count_mobile_data=count($data_mobile_lenovo);
                               for ($i=0; $i <$count_mobile_data ; $i++)
                                {
                                        ?>
                                        <div style="float: left;width: 180px;height: 250px;padding-left: 10px;">
                                        <img src="<?php echo $data_mobile_lenovo[$i]['Vchr_img_path']; ?>" width="150px" height="200px"><div style="padding-left: 40px;"><?php echo "INR"." ".$data_mobile_lenovo[$i]['Int_Price']."<br>".$data_mobile_lenovo[$i]['Vchr_sub_Categorie']." ".$data_mobile_lenovo[$i]['Vchr_product_name']; 
                                        ?></div></div>
                                        <?php 
                                        
                               }
                                ?>
                      </div>


        </div>

        </div>
