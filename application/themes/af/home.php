<?php 
$view->inc('elements/header.php');  
?>
<section class="section top-section bg-gradient--blue home">
    <div class="wrapper backstretch-contain">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <? $a = new Area('Home Section Title');$a->display($c); ?>
                </div>
                <div class="col-sm-12 col-md-12 align-center">
                    <? $a = new Area('Section Features');$a->display($c); ?>
                </div>
                <div class="col-sm-12 col-md-8 col-md-offset-2 section-featured-img">
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-featured -->
<!--
<div class="wrapper">
    <div class="container">
        <div class="row">
            <? $a = new Area('Section Our Mission');$a->display($c); ?>
        </div> 
    </div> 
</div> 
-->
<section id="home-product">
    <div class="wrapper text-center backstretch-contain">
        <div class="container">
            <div class='col-sm-5 col-md-5'></div>
            <div class="col-sm-7 col-md-7 home-product">
                <? $a = new Area('Section Our Product');$a->display($c); ?>
            </div>
            <div class="clearfix"></div>
            
            
        </div>
    </div>
</section>

<section class="section product-home-back">
    <?php $view->inc('elements/txt-right-img-left.php'); ?>
</section>
 
<section class="section press-home-back">
    <?php $view->inc('elements/press-text-left-img-right.php'); ?>
</section>

<div class="wrapper"><!-- video -->
    <div class="container">
        <div class="col-md-12 marginbot30"><h2><? $a = new Area('Section Our Mission 2 Video');$a->display($c); ?></h2></div>
        <div class="col-md-8">
            <div class="home-video-container">
            <? $a = new Area('Section Our Mission 2 Video');$a->display($c); ?>
            </div>
        </div>
        <div class="col-sm-5 col-md-4 quote">
            <? $a = new Area('Section Our Mission 2');$a->display($c); ?>
        </div>
        <div class="clearfix"></div>   
    </div>
</div>    
<div class="wrapper">
    <div class="container">   
        <div class="col-md-12">
        <div><? $a = new GlobalArea('Featured On');$a->display($c); ?></div>
        <div id="greyscale"><? $a = new GlobalArea('Featured Logos');$a->display($c); ?></div>
        </div>
        <div class="clearfix"></div>
        
    </div>
</div>  
<section class="section section-join-team">
    <?php $view->inc('elements/joinaf-text-left-img-right.php'); ?>
</section>

<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>