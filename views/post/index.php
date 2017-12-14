<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 05.12.2017
 * Time: 17:28
 */
foreach ($authors as $author): ?>
    <ul>
    <li><?=$author->name?></li>
    <li><?=$author->data?></li>
    <?php $posts = $author->posts;
    foreach ($posts as $post): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><a href=" <?= \yii\helpers\Url::to(['post/view', 'id'=>$post->id])?>"><?=$post->title?></pre></a></h3>
            </div>
            <div class="panel-body">
                <?=$post->text?>
            </div>
        </ul>
    <?php endforeach; ?>
<?php endforeach; ?>
