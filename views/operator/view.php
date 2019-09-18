<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Operators */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Operators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="operators-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->operator_id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->operator_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
        <?= Html::a('Choose & Buy Number', ['twilio/search-local-numbers', 'id' => $model->operator_id], ['class' => 'btn btn-info']) ?>
    </p>
    <?php
    ?>
    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['label' => '№ п/п',
                'attribute' => 'operator_id',],
            'name:ntext',
            'country:ntext',
            'email:ntext',
            'password:ntext',
            ['label' => 'активные номера',
                'format' => 'raw',
                'value' => function($dataProvider) {
                    $content = "";
                    foreach ($dataProvider->phone as $phone) {
                        $content .= $phone->phoneNumber;
                    }
                    return $content;
                }
            ],
        ],
    ])
    ?>

</div>
