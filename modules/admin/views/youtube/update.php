<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\youtube */

$this->title = 'Update Youtube: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Youtubes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="youtube-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
