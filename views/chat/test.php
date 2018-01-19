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
    <?php $form = ActiveForm::end() ?>
    <?php
$js = <<<JS
    $('#btn').on('click', function(){
        $.ajax({
            url: "index.php",
            data: ,
            type: 'POST',
            success: function(res){
                console.log(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });
JS;

$this->registerJs($js);

?>
