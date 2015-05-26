<?php $view->inc('elements/header.php');  ?>
<section class="section section-press release top-section">
    <?php $view->inc('elements/txt-left-img-right.php'); ?>
</section>
<div class="wrapper mid press">
    <div class="container">
        <div class="col-md-8">
            <h2 class="main-title"><? $a = new Area('Press Title');$a->display($c); ?></h2>
            <? $a = new GlobalArea('Press Release Lists');$a->display($c); ?>
        </div>
        <div class="col-md-4 press-feature">
            <? $a = new GlobalArea('Press Featured On');$a->display($c); ?>
        </div>
    </div>
</div>
    
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>

