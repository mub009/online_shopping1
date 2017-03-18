<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

<div id="header" style="height:70px;width:100%;background-color:#00f;padding:10px;">
<div id="nav" style="height:50px;width:300px;float:right;padding-left:200px;">
<a href="#" style="color:#fff">Logout</a>
</div>
<div id="logo" style="height:50px;width:100px;color:#fff;text-align:center;font-size:30px;padding:7px">
shopping
</div>

</div>
    <div class="container">
<div style="width:20%;float:left">
          <table class="table">
          <tr><td><a href="#">Manage Category</a></td></tr>
          <tr><td><a href="#">Manage Subcategory</a></td></tr>
          <tr><td><a href="#">Manage Product</a></td></tr>
          <tr><td><a href="#">Manage Order</a></td></tr>
          </table>
        </div>
        <div style="width:80%;float: left; padding-left: 30px; ">
            
            <?= $content; ?>


        </div>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>


       
    </div>
</div>

<footer id="footer" style="height:70px;width:100%;background-color:#00f;padding:10px;color:#fff">
    <div class="container">
        <p class="pull-left">&copy; Shopping</p>

        <p class="pull-right">Create By shopping</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
