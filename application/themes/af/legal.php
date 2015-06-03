<?php 
$view->inc('elements/header.php');  ?>

<div class="container top-section">
    <div class="row top-section">
	<div class="col-md-2"><? $a = new Area('Legal Sections Nav');$a->display($c); ?></div>
    <div class="col-md-10"><? $a = new Area('Section Main Area');$a->display($c); ?></div>
    </div>
</div>

<div class="marginbot40"></div>
<div class="separator saperator-gradient"></div>

 <?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('php script');$a->display($c); ?>