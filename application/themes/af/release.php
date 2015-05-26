<?php $view->inc('elements/header.php');  ?>

<div class="container-fluid top-section">
	<div class="row">
    <div class="col-md-12">
    <?php $view->inc('elements/txt-left-img-right.php'); ?>
    <? $a = new Area('Backstretch Script');$a->display($c); ?>
    </div>
    </div>
<div class="row">
	<div class="container">
<div class="wrapper mid press">
    <div class="col-md-8">
        <h2 class="main-title"><? $a = new Area('Press Title');$a->display($c); ?></h2>
        <div class="press-date"><? $a = new GlobalArea('Press Release Lists');$a->display($c); ?></div>
    </div>
    <div class="col-md-4 press-feature hidden-xs">
        <? $a = new GlobalArea('Press Featured On');$a->display($c); ?>
    </div>
</div>
</div></div></div>
    
<?php $view->inc('elements/footer.php'); ?>

