<?php 
$view->inc('elements/header.php');  ?>
<section class="section section-press release">
    <?php $view->inc('elements/txt-left-img-right.php'); ?>
</section>
<div class="wrapper mid press">
    <div class="container">
        <div class="col-md-7">
            <h2 class="main-title">Press Releases</h2>
            <? $a = new GlobalArea('Press Release Lists');$a->display($c); ?>
        </div>
        <div class="col-md-5 press-feature">
            <? $a = new GlobalArea('Press Featured On');$a->display($c); ?>
        </div>
    </div>
</div>
    
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>

