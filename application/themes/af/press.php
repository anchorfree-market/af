<?php 
$view->inc('elements/header.php');  ?>
<h2><? $a = new Area('Press Top Text');$a->display($c); ?></h2>
<h1>Press Releases</h1>
<h1>
    <? $a = new Area('Press Title');$a->display($c); ?>
</h1>
<div class="press-date"><? $a = new Area('Press Date');$a->display($c); ?></div>
<div class="press-desc"><? $a = new Area('Press Description');$a->display($c); ?></div>
<?php $view->inc('elements/footer.php'); ?>
