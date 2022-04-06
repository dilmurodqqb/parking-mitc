<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ParkingData */

$this->title = 'Create Parking Data';
$this->params['breadcrumbs'][] = ['label' => 'Parking Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parking-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
