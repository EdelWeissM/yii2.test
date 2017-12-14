<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;?>

<?php if(!empty ($model)):
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?=$model->name?></h3>
        </div>
        <div class="panel-body">
            <?=$model->text?>
        </div>
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options'=>['id'=>'commentsForm']]) ?>
<?= $form->field($model, 'name')?>
<?= $form->field($model, 'text')->textarea(['rows' => 5])?>
<?= Html::submitButton('Send', ['class'=>'btn btn-success'])?>
<?php $form = ActiveForm::end()?><br>

