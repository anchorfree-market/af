<?php 
$view->inc('elements/header.php');  ?>
<!--<img src="<?php echo $view->getThemePath()?>/images/blue-gradients-transparent-bg-rt.png">-->
<section class="section section-about-us about-us top-section">
    <?php $view->inc('elements/txt-right-img-left.php'); ?>
</section>
<div class="wrapper mid about">
    <div class="container">
        <div class="col-md-12">
            <h2 class="main-title">
                <? $a = new Area('About Title');$a->display($c);?>
            </h2>
            <p><? $a = new Area('About Content');$a->display($c);?></p>
        </div>
        <hr>
        <div class="col-md-12">
            <h2>Contact AnchorFree Inc.</h2>
        </div>
        <div class="col-md-6">
            <h4>US. Headquarters</h4>
        </div>
        <div class="col-md-6">
            <h4>Swiss Location</h4>
        </div>
    </div>
</div>
<section class="map">
    <? $a = new Area('Map');$a->display($c);?>
</section>
<div class="wrapper about-form">
    <div class="container">
        <? $a = new Area('Form');$a->display($c);?>
    </div>
</div>
<section class="section section-join-team join-team">
    <?php $view->inc('elements/txt-left-img-right.php'); ?>
</section>
    
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>