<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Blognoticia */

$this->title = 'Crear Noticia';
$this->params['breadcrumbs'][] = ['label' => 'Blognoticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blognoticia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
