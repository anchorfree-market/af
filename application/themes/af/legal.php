<?php 
$view->inc('elements/header.php');  ?>
<section class="section section-about-us about-us top-section">
</section>
    <? $a = new Area('Section Main Area');$a->display($c); ?>

 <?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>