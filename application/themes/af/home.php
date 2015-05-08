<?php 
$view->inc('elements/header.php');  ?>
    <? $a = new Area('Section Features');$a->display($c); ?>
    <? $a = new Area('Section Our Mission');$a->display($c); ?>
    <? $a = new Area('Section Our Product');$a->display($c); ?>
    <section class="section section-press release">
        <?php $view->inc('elements/txt-left-img-right.php'); ?>
    </section>
    <? $a = new Area('Section Our Mission 2');$a->display($c); ?>
    <? $a = new Area('Section Featured On');$a->display($c); ?>
    <section class="section section-join-team join-team">
        <?php $view->inc('elements/txt-left-img-right-2.php'); ?>
    </section>

 <?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>