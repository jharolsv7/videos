<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/img/logo.png', ['alt' => Yii::$app->name, 'class' => 'logo-img', 'width' => 40]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Sexo', 'url' => ['/sexo/index']],
            ['label' => 'Actor', 'url' => ['/actor/index']],
            ['label' => 'Actor de Película', 'url' => ['/actor-pelicula/index']],
            ['label' => 'Socio', 'url' => ['/socio/index']],
            ['label' => 'Formato', 'url' => ['/formato/index']],
            ['label' => 'Director', 'url' => ['/director/index']],
            ['label' => 'Genero', 'url' => ['/genero/index']],
            ['label' => 'Alquiler', 'url' => ['/alquiler/index']],
            ['label' => 'Película', 'url' => ['/pelicula/index']],
            ['label' => 'Login', 'url' => ['/site/login']],
            ['label' => 'Sign Up', 'url' => ['/site/error']],
        ],
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="center">&copy; (G4) Desarrollo Web Avanzado <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
