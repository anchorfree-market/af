<?php $view->inc('elements/header.php');  ?>

<div class="container-fluid top-section txt-left">
	<div class="backstretch-contain-press">
    <div class="container">
        <?php $view->inc('elements/txt-left-img-right.php'); ?>
    </div>
    </div>
</div>

<div class="container-fluid">
<div class="container">
<div class="row">
    <div class="col-md-8 press">
        <div><h2 class="main-title"><? $a = new Area('Press Title');$a->display($c); ?></h2></div>
        <div class="press-date"><? $a = new GlobalArea('Press Release Lists');$a->display($c); ?></div>
    </div>
    <div class="col-md-3 col-md-offset-1 press-feature hidden-xs">
        <div>
        <h3><? $a = new GlobalArea('Press Inquiries Title');$a->display($c); ?></h3>
        <p><? $a = new GlobalArea('Press Inquiries');$a->display($c); ?></p>
        <p>&nbsp;</p>
        <h3><? $a = new GlobalArea('Press Featured On');$a->display($c); ?></h3>
        <p><? $a = new GlobalArea('Press Featured Logos');$a->display($c); ?></p>
        </div>
    </div>
</div>
</div>
</div>
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>

