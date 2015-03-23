<?php 
$view->inc('elements/header.php');  ?>
<section class="section section-press">
    <h2 class="main-title">Press Releases</h2>
</section>
<div class="wrapper mid press">
    <div class="col-md-8">
        <h2>
            <? $a = new Area('Press Title');$a->display($c); ?>
        </h2>
        <div class="press-date"><? $a = new Area('Press Date');$a->display($c); ?></div>
        <div class="press-desc"><? $a = new Area('Press Description');$a->display($c); ?></div>
    </div>
    <div class="col-md-4 press-feature">
        <? $a = new GlobalArea('Press Featured On');$a->display($c); ?>
    </div>
</div>
<?php $view->inc('elements/footer.php'); ?>
