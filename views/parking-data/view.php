<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ParkingData */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Parking Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="parking-data-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'city',
            'distnict',
            'address',
            'balance',
            'owner',
            'phone',
            'image',
            [
                'attribute'=>'image',
                'format'=>'html',
                'value'=>Html::img("/uploads/pic/".$model->image,['style'=>"border: 5px solid #555; margin-bottom: 10px; max-width:300px;"])
            ],
            'status',
            'created_date',
        ],
    ]) ?>

</div>
