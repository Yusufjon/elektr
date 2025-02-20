<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\YoutubeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Videoni taxrirlash';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="youtube-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Taxrirlash', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
