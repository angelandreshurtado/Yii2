<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">

            <?php
            NavBar::begin([
                'brandLabel' => 'AH Yii2',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);

            $user = Yii::$app->user;

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Inicio',
                        'url' => ['/site/index'],
                    ],
                    ['label' => 'Usuarios',
                        'url' => ['/usuarios/index'],
                        'visible' => !$user->isGuest,
                    ],
                    !Yii::$app->user->isGuest ? (
                            ['label' => 'Blog', 'url' => ['/blognoticia/index']]
                            ) : (
                            ['label' => 'Blog', 'url' => ['/site/blogvista']]
                            ),
                    ['label' => 'Contacto',
                        'url' => ['/site/contact'],
                        'id' => ['modalButton'],
                    ],
                    Yii::$app->user->isGuest ? (
                            ['label' => 'Ingresar', 'url' => ['/site/login']]
                            ) : (
                            '<li>'
                            . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                            . Html::submitButton(
                                    'Salir (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link']
                            )
                            . Html::endForm()
                            . '</li>'
                            )
                ],
            ]);
            NavBar::end();
            ?>

            <div class="container">
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
            <?= $content ?>
            </div>
        </div>

        <footer class="footer grey darken-4">
            <div class="container ">
                <p class="pull-left white-text">&copy; Andres Hurtado Yii2 <?= date('Y') ?></p>

        <!--<p class="pull-right"><?= Yii::powered() ?></p>-->
            </div>
        </footer>

        <!--<?php $this->endBody() ?>-->
    </body>
</html>
<?php $this->endPage() ?>
