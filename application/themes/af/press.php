<?php 
$view->inc('elements/header.php');  ?>
<div class="wrapper mid press">
    <h2 class="main-title">Press Releases</h2>
    <h2>
        <? $a = new Area('Press Title');$a->display($c); ?>
    </h2>
    <div class="press-date"><? $a = new Area('Press Date');$a->display($c); ?></div>
    <div class="press-desc"><? $a = new Area('Press Description');$a->display($c); ?></div>
</div>
<?php $view->inc('elements/footer.php'); ?>
