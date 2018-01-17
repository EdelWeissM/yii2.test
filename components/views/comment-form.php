<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 16.01.2018
 * Time: 10:54
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html; ?>

<div class="container">
    <?php $form = ActiveForm::begin(['options' => ['id' => 'CommentForm']]) ?>
    <div class="row">
        <div class="col-lg-5">
            <?= $form->field($model, 'name') ?>
        </div>
        <div class="col-lg-5">
            <?= $form->field($model, 'email') ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <?= $form->field($model, 'content')->textarea(['rows' => 5]) ?>
            <?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php $form = ActiveForm::end() ?><br>
</div>
