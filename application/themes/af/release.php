<?php $view->inc('elements/header.php');  ?>

<div class="container-fluid top-section txt-left">
    <? $a = new GlobalArea('Background Header Image');$a->display($c); ?>
	<div class="backstretch-contain">
    <div class="container">
        <div class="col-sm-8 col-md-7 col-lg-6">
            <? $a = new Area('Text Left');$a->display($c); ?>
        </div>
        <div class="clearfix"></div>
    </div></div>
</div>

<div class="row">
<div class="container wrapper mid press">
    <div class="col-md-8">
        <h2 class="main-title"><? $a = new Area('Press Title');$a->display($c); ?></h2>
        <div class="press-date"><? $a = new GlobalArea('Press Release Lists');$a->display($c); ?></div>
    </div>
    <div class="col-md-4 press-feature hidden-xs">
        <? $a = new GlobalArea('Press Featured On');$a->display($c); ?>
    </div>
</div>
</div>
    
<?php $view->inc('elements/footer.php'); ?>

