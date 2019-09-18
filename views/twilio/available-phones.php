<?php

/* @local[] 
   @countryList[]
 *  */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php
 $form = ActiveForm::begin();

    echo $form->field($model, 'country')->dropDownList($countryList);
    echo Html::submitButton('Ok', ['class' => 'btn btn-success']);
    echo '<br>';
    echo '<br>';
    ActiveForm::end();
    
if (isset($local)) {
    foreach ($local as $record) {
        echo Html::a($record->friendlyName, ['twilio/buy-number', 'phone' => $record->friendlyName]);
        echo '<hr>';
    }
}
   
