<?php $view->inc('elements/header.php');  ?>

<div class="container-fluid top-section txt-left">
	<div class="backstretch-contain-press">
    <div class="container">
        <?php $view->inc('elements/txt-left-img-right.php'); ?>
    </div>
    </div>
</div>

<div class="container-fluid">
<div class="row">
<div class="container wrapper mid press">
    <div class="col-md-8">
        <div><h2 class="main-title"><? $a = new Area('Press Title');$a->display($c); ?></h2></div>
        <div class="press-date"><? $a = new GlobalArea('Press Release Lists');$a->display($c); ?></div>
    </div>
    <div class="col-md-3 col-md-offset-1 press-feature hidden-xs">
        <? $a = new GlobalArea('Press Featured On');$a->display($c); ?>
    </div>
</div>
</div>
</div>
    
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>

