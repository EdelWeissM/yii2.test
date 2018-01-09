<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html; ?>

<?php if ($model->content):
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?= 'Автор: ' . $model->name ?><br>
                <?= 'Дата: ' . $model->date_create ?></h3>
        </div>
        <div class="panel-body">
            <?= $model->content ?>
        </div>
    </div>
<?php endif; ?>

<div class="container">
    <?php $form = ActiveForm::begin(['options' => ['id' => 'comment']]) ?>
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

