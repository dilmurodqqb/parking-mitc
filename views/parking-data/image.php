<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ParkingData */

$this->title = 'Update Parking Data Image: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Parking Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update image';
?>
<div class="parking-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="parking-data-form">

        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'image')->fileInput() ?>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        , code: 401
    </div>

</div>
