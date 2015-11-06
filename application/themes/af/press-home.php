<?php $view->inc('elements/header.php');  ?>
<div class="section press-home-back">
    <?php $view->inc('elements/press-text-left-img-right.php'); ?>
</div>
<div class="container">
<div class="row">
    <div class="col-md-8">
    	<div><h2 class="main-title"><? $a = new Area('Press Title');$a->display($c); ?></h2></div>
        <div class="press-date"><? $a = new GlobalArea('Press Release Lists');$a->display($c); ?></div>
    </div>
    <div class="col-md-3 col-md-offset-1 press-feature hidden-xs">
        <div>
        <h2 class="align-left visble-xs"><? $a = new GlobalArea('Press Inquiries Title');$a->display($c); ?></h2>
        <p class="align-left visble-xs"><? $a = new GlobalArea('Press Inquiries');$a->display($c); ?></p>
        <p>&nbsp;</p>
        <h2 class="align-left"><? $a = new GlobalArea('Press Featured On');$a->display($c); ?></h2>
        <p class="align-left" id="greyscale"><? $a = new GlobalArea('Press Featured Logos');$a->display($c); ?></p>
        </div>
    </div>
</div>
</div>
<div class="marginbot40"></div>
<div class="separator saperator-gradient"></div>
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>