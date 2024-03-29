<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vesti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vesti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'naslov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sadrzaj')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'korisnik_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
