<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\youtube */

$this->title = 'Youtube linkni kiritish';
$this->params['breadcrumbs'][] = ['label' => 'Youtubes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="youtube-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
