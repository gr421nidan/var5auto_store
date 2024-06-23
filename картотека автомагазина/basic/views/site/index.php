<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Картотека автомагазина!</h1>
        <p class="lead">Хотите найти машину своей мечты?</p>
        <?php if (Yii::$app->user->isGuest): ?>
            <p><a class="btn btn-lg btn-success" href="<?= yii\helpers\Url::to(['site/login']) ?>">Найти машину</a>
            </p>
        <?php else: ?>
            <p><a class="btn btn-lg btn-success" href="<?= yii\helpers\Url::to(['car/index']) ?>">Найти машину</a>
            </p>
        <?php endif; ?>

    </div>

</div>
