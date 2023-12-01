<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ActorPelicula $model */

$this->title = $model->APL_ID;
$this->params['breadcrumbs'][] = ['label' => 'Actor Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="actor-pelicula-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'APL_ID' => $model->APL_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'APL_ID' => $model->APL_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'APL_ID',
            ['label'=>'Actor',
            'value'=> $model->aCT->ACT_NOMBRE,],
            ['label'=>'Pelicula',
            'value'=> $model->pEL->PEL_NOMBRE,],
            'APL_PAPEL',
        ],
    ]) ?>

</div>
