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
 
<section class="section press-home-back">
    <?php $view->inc('elements/press-text-left-img-right.php'); ?>
</section>

<div class="wrapper"><!-- video -->
    <div class="container">
        <div class="col-md-12 marginbot50"><h2><? $a = new Area('Video Title');$a->display($c); ?></h2></div>
        <div class="col-md-8"><? $a = new Area('Section Our Mission 2 Video');$a->display($c); ?></div>
        <div class="col-md-4 quote"><? $a = new Area('Section Our Mission 2');$a->display($c); ?></div>
        <div class="clearfix"></div>   
    </div>
</div>    

<div class="marginbot40"></div>
<div class="separator saperator-gradient"></div>

<div class="wrapper">
    <div class="container">   
        <div class="col-md-12"><h2><? $a = new GlobalArea('Featured On');$a->display($c); ?></h2></div>
        <div class="col-md-1 col-sm-1 col-xs-1" id="greyscale"><? $a = new GlobalArea('Featured Logo1');$a->display($c); ?></div>
        <div class="col-md-1 col-sm-1 col-xs-1" id="greyscale"><? $a = new GlobalArea('Featured Logo2');$a->display($c); ?></div>
        <div class="col-md-1 col-sm-1 col-xs-1" id="greyscale"><? $a = new GlobalArea('Featured Logo3');$a->display($c); ?></div>
        <div class="col-md-1 col-sm-1 col-xs-1" id="greyscale"><? $a = new GlobalArea('Featured Logo4');$a->display($c); ?></div>
        <div class="col-md-1 col-sm-1 col-xs-1" id="greyscale"><? $a = new GlobalArea('Featured Logo5');$a->display($c); ?></div>
        <div class="col-md-1 col-sm-1 col-xs-1" id="greyscale"><? $a = new GlobalArea('Featured Logo6');$a->display($c); ?></div>
        <div class="col-md-1 col-sm-1 col-xs-1" id="greyscale"><? $a = new GlobalArea('Featured Logo7');$a->display($c); ?></div>
        <div class="col-md-1 col-sm-1 col-xs-1" id="greyscale"><? $a = new GlobalArea('Featured Logo8');$a->display($c); ?></div>
        <div class="col-md-1 col-sm-1 col-xs-1" id="greyscale"><? $a = new GlobalArea('Featured Logo9');$a->display($c); ?></div>
        <div class="col-md-1 col-sm-1 col-xs-1" id="greyscale"><? $a = new GlobalArea('Featured Logo10');$a->display($c); ?></div>
        <div class="col-md-1 col-sm-1 col-xs-1" id="greyscale"><? $a = new GlobalArea('Featured Logo11');$a->display($c); ?></div>
        <div class="col-md-1 col-sm-1 col-xs-1" id="greyscale"><? $a = new GlobalArea('Featured Logo12');$a->display($c); ?></div>
        <div class="clearfix"></div>
        
    </div>
</div>  
<section class="section section-join-team">
    <?php $view->inc('elements/joinaf-text-left-img-right.php'); ?>
</section>

<div class="marginbot40"></div>
<div class="separator saperator-gradient"></div>

<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>