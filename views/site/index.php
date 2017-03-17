<?php

/**
* @author Mubashir <pro.mubashir@outlook.com>
* created date : 09/03/2017
*/

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'shopping';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">


    <div class="body-content">
<div class="row">
<div style="border:dotted;width: 100%;height: 50px;" class="col-lg-12">
    <div style="padding-top: 10px;">
    <a href="" >Add Product</a></div>
    

</div>
        <div class="row">
            <div class="col-lg-4"  style="width: 20%;height: 900px;float:left;margin-left:0px;">

                <h2>Your Favorite</h2>

                

                    <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Mobile Phone &raquo;</a></p>
                     <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Laptop &raquo;</a></p>

            </div>

         <?php
/**
* function display
* parm $data_
*/
        function display($data,$title)
          {

                ?>
                    <div style="height: 350px;width:100%;">
                    <h2><?php echo "$title"; ?></h2>
                    <hr>
                   <?php

                   $count_data=count($data);
                   for ($i=0; $i <$count_data ; $i++)
                    {
                    ?>
                            <div style="float: left;width: 200px;height: 250px;padding-left: 10px;">
                            <img src="<?php echo $data[$i]['Vchr_img_path']; ?>" width="150px" height="200px"><div style="padding-left: 40px;"><?php echo "INR"." ".$data[$i]['Int_Price']."<br>"." ".$data[$i]['Vchr_product_name']; 
                            ?></div></div>
                            <?php 
                            
                   }
                    ?>

                <div style="padding-top: 100px;"><a href="">more</a>
                </div></div>

                <?php
        }


          //$title='Mobile';
        display($data_mobile,'Mobile');

        // $title='Laptop';
        display($data_laptop,'Laptop');

                ?>
            </div>
        </div>

    </div>
</div>
