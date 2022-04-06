<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ParkingData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parking-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'distnict')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'A' => 'A', 'P' => 'P', ]) ?>

    <?//= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
    <div style="padding-bottom: 1"></div>
    <?= Html::img("/uploads/pic/".$model->image,['style'=>"border: 5px solid #555; margin-bottom: 10px; max-width:300px;"]);?>

    <div class="form-group">
        <?= Html::a('Update Image', ['parking-data/upload','id'=>$model->id], ['class' => 'btn btn-warning']) ?>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
