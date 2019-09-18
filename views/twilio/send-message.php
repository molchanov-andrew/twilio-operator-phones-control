<?php
/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Send Messasge</h1>

<?php $form = ActiveForm::begin(['class' => 'form',]); ?>
<?= $form->field($model, 'phone'); ?>
<?= Html::submitButton('Send', ['class' => 'btn btn-primary']); ?>
<?php ActiveForm::end(); ?>
