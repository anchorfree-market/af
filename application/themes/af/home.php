<?php 
$view->inc('elements/header.php');  
?>
<section class="section top-section bg-gradient--blue home">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <? $a = new Area('Section Features');$a->display($c); ?>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-featured -->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <? $a = new Area('Section Our Mission');$a->display($c); ?>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .wrapper -->
<section id="home-product">
    <div class="wrapper text-center backstretch-contain">
        <div class="container">
            <? $a = new Area('Section Our Product');$a->display($c); ?>
        </div>
    </div>
</section> 
<section class="section section-home-readmore">
    <?php $view->inc('elements/txt-left-img-right.php'); ?>
</section>
<div class="wrapper">
    <div class="container">
        <? $a = new Area('Section Our Mission 2');$a->display($c); ?>
    </div>
</div>    
<div class="wrapper">
    <div class="container">   
        <? $a = new Area('Section Featured On');$a->display($c); ?>
    </div>
</div>  
<section class="section section-join-team join-team">
    <?php $view->inc('elements/txt-left-img-right-2.php'); ?>
</section>

<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>