<?php foreach ($list as $page): ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <a href=" <?= \yii\helpers\Url::to(['/pages/list/article', 'article' => $page]) ?>"><?= $page->name ?></pre></a>
        </h3>
    </div>
    <div class="panel-body">
        <?= $page->excerpt ?><br/>
        <?= $page->datetime ?>
    </div>
<?php endforeach; ?>

