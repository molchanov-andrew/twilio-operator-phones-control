<?php
/* @var $this yii\web\View 
@phone choosing  number*/
use yii\helpers\Html;
?>
<h1>Buy number</h1>

<p>
    <?php 
    echo Html::a('Shure, buy number? '.$phone,['twilio/buy-number', 'phone'=>$phone, 'confirm' =>'true']);
    ?>
</p>
