<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'shopping';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">


   <div class="body-content">
       <div class="row">
           <div style="border:1px solid #F5F5F5;height: 30px;border-radius:150px" class="col-lg-2">
  
               <a href="" >Add Product</a>

           </div>
           <div style="height: 30px;" class="col-lg-9">
           </div>

           <div style="border:1px solid #F5F5F5;height:30px;border-radius:150px" class="col-lg-1">
  
               <p style="text-align:right">
               <a href="index.php?r=login/login" id="login">Login</a></p>

           </div>
       </div>

       <div class="row">
           <div class="col-lg-4"  style="width: 20%;height: 900px;float:left;margin-left:0px;">
               <h2>Your Favorite</h2>
               <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Mobile Phone &raquo;</a></p>
               <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Laptop &raquo;</a></p>

           </div>

           <div class="col-lg-8" style="width: 80%;height: 900px;float:left;">
               <?php
                    function read_mobile_phone($data_mobile)
                            {

                               ?> 
                                <div style="height: 350px;width:100%;">
                                <h2>Mobile Phones</h2>
                                <hr>
                                <?php

                               
                               $count_mobile_data=count($data_mobile);
                               for ($i=0; $i <$count_mobile_data ; $i++)
                                {
                                        ?>
                                        <div style="float: left;width: 180px;height: 250px;padding-left: 10px;">
                                        <img src="<?php echo $data_mobile[$i]['Vchr_img_path']; ?>" width="150px" height="200px"><div style="padding-left: 40px;"><?php echo "INR"." ".$data_mobile[$i]['Int_Price']."<br>".$data_mobile[$i]['Vchr_sub_Categorie']." ".$data_mobile[$i]['Vchr_product_name']; 
                                        ?></div></div>
                                        <?php 
                                        
                               }
                                ?>


                             <div style="padding-top: 100px;"><a href="index.php?r=mobilephone/readmobiledata">More Mobile Phone</a></div></div     
          <?php
                        }

        function read_laptop_data($data_laptop)
          {

                ?>
                    <div style="height: 350px;width:100%;">
                    <h2>Laptop</h2>
                    <hr>
                   <?php

                   $count_laptop_data=count($data_laptop);
                   for ($i=0; $i <$count_laptop_data ; $i++)
                    {
                    ?>
                            <div style="float: left;width: 200px;height: 250px;padding-left: 10px;">
                            <img src="<?php echo $data_laptop[$i]['Vchr_img_path']; ?>" width="150px" height="200px"><div style="padding-left: 40px;"><?php echo "INR"." ".$data_laptop[$i]['Int_Price']."<br>".$data_laptop[$i]['Vchr_sub_Categorie']." ".$data_laptop[$i]['Vchr_product_name']; 
                            ?></div></div>
                            <?php 
                            
                   }
                    ?>

                <div style="padding-top: 100px;"><a href="">more</a>
                </div></div>

                <?php
        }


        read_mobile_phone($data_mobile);
        read_laptop_data($data_laptop);

                ?>
            </div>
        </div>

    </div>
</div>
