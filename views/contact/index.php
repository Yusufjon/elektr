<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Янги Хабарлар';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>

  

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'message:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
