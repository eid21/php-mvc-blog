<?php




?>
<?php require 'inc/header.php' ?>

<?php if (empty($this->oPosts)): ?>
    <p class="bold">There is no Blog Post.</p>
    <p><button type="button" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=add'" class="bold">Add Your First Blog Post!</button></p>
<?php else: ?>

    <?php foreach ($this->oPosts as $oPost): ?>
        <h1><a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>"><?=htmlspecialchars($oPost->title)?></a></h1>

        <p><?=nl2br(htmlspecialchars(mb_strimwidth($oPost->body, 0, 100, '...')))?></p>
        <p><a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>">Want to see more?</a></p>
        <p class="left small italic">Posted on <?=$oPost->createdDate?></p>

        <?php require 'inc/control_buttons.php' ?>
        <hr class="clear" /><br />
    <?php endforeach ?>

<?php endif ?>

<?php require 'inc/footer.php' ?>
