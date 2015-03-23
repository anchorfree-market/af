<?php 
$view->inc('elements/header.php');  ?>
<section class="section section-press release">
    <div class="col-md-7">
        <? $a = new Area('Press Top Text');$a->display($c); ?>
    </div>
    <div class="col-md-5 press-image">
        <? $a = new Area('Press Top Image');$a->display($c); ?> 
    </div>
    <div class="clearfix"></div>
    </section>
<div class="wrapper mid press">
    <div class="col-md-7">
        <h2 class="main-title">Press Releases</h2>
        <? $a = new GlobalArea('Press Release Lists');$a->display($c); ?>
    </div>
    <div class="col-md-5 press-feature">
        <? $a = new GlobalArea('Press Featured On');$a->display($c); ?>
    </div>
</div>
<?php $view->inc('elements/footer.php'); ?>


