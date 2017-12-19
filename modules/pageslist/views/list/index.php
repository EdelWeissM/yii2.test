<?php foreach ($list as $page): ?>
    <?php if(($page->hidden) != 1):?>
    <ul>
        <li><?=$page->name?></li>
        <li><?=$page->url?></li>
        <div class="panel-body">
            <?=$page->content?>
        </div>
        <li><?=$page->datetime?></li>
    </ul>
    <?php endif; ?>
<?php endforeach; ?>

