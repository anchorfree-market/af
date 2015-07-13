<?php 
$view->inc('elements/header.php');  ?>
<?php $view->inc('elements/fixed-contact-us.php'); ?>
    <? $a = new Area('Section Features');$a->display($c); ?>
    <? $a = new Area('Section Our Mission');$a->display($c); ?>
    <? $a = new Area('Section Our Product');$a->display($c); ?>
    <section class="section txt-center">
        <?php $view->inc('elements/txt-left-img-right.php'); ?>
    </section>
    <? $a = new Area('Section Our Mission 2');$a->display($c); ?>
    <? $a = new Area('Section Featured On');$a->display($c); ?>
    <? $a = new Area('Section Join Our Team');$a->display($c); ?>
 <?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>