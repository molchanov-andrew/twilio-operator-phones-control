<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */

/* @var $dataProvider yii\data\ActiveDataProvider */
/* phonesList[] */

$this->title = 'Operators';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operators-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Operators', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['label' => '№ п/п',
                'attribute' => 'operator_id'],
            'name:ntext',
            'country:ntext',
            'email:ntext',
            'password:ntext',
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
