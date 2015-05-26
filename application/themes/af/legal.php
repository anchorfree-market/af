<?php 
$view->inc('elements/header.php');  ?>
<? $a = new Area('Section Top Area');$a->display($c); ?>
    <? $a = new Area('Section Main Area');$a->display($c); ?>

 <?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>