<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 16.01.2018
 * Time: 10:55
 */

?>
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