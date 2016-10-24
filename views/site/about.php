<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Sobre Mi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Esto es una página sobre Mi.
    </p>

    <code><?= __FILE__ ?></code>
</div>
