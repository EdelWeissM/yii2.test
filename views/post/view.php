<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= $post->title ?></h3>
    </div>
    <div class="panel-body">
        <?=$post->text?>
    <?='Author: '.$post->author->name?><br>
        <?='Data: '.$post->author->data?>
    </div>
</div>

