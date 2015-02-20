<?php 
$view->inc('elements/header.php');  ?>
<?php $view->inc('elements/fixed-contact-us.php'); ?>
    <? $a = new Area('Section Features');$a->display($c); ?>
    <? $a = new Area('Section Target');$a->display($c); ?>
    <? $a = new Area('Section Counter');$a->display($c); ?>
    <? $a = new Area('Section HowItWorks');$a->display($c); ?>
    <? $a = new Area('Section Mobile');$a->display($c); ?>
    <? $a = new Area('Section Chart');$a->display($c); ?>
    <? $a = new Area('Section ContactUs');$a->display($c); ?>

 <?php $view->inc('elements/footer.php'); ?>