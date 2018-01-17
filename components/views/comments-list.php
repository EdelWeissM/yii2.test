<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 16.01.2018
 * Time: 10:55
 */
debug($model);
?>
<?php foreach ($model as $comment): ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= 'Автор: ' . $comment->name ?><br>
            <?= 'Дата: ' . $comment->date_update ?></h3>
    </div>
    <div class="panel-body">
        <?= $comment->content ?>
    </div>
</div>
<?php endforeach; ?>