<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Blognoticia */

$this->title = $model->tituloNoticia;
$this->params['breadcrumbs'][] = ['label' => 'Blognoticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blognoticia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idNoticia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->idNoticia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Está seguro de que quiere eliminar este elemento?',
                'method' => 'post', 'get',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idNoticia',
            'tituloNoticia',
            'contenidoNoticia:ntext',
            'estado',
        ],
    ]) ?>

</div>
