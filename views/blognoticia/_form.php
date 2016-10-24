<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Blognoticia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blognoticia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tituloNoticia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contenidoNoticia')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
