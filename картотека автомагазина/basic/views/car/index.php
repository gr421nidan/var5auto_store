<?php

use app\models\Car;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Машины';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php if(Yii::$app->user->identity->isAdmin()):?>
    <p>
        <?= Html::a('Добавить машину', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php else: ?>
        <p>
            <?= Html::a('Оставить заявку', ['application/create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php if(Yii::$app->user->identity->isAdmin()):?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'name',
                'valume',
                'date_published',
                'color',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Car $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
    <?php else: ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'name',
                'valume',
                'date_published',
                'color'
            ],
        ]); ?>

    <?php endif; ?>


</div>
