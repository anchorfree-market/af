<?php 
$view->inc('elements/header.php');  ?>
<div class="container top-section">
    <div class="row top-section">
	<div class="col-md-12 col-sm-12"><? $a = new Area('General Section');$a->display($c); ?></div>
    </div>
</div>
<div class="marginbot40"></div>
<div class="separator saperator-gradient"></div>
 <?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('php script');$a->display($c); ?>