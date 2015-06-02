<?php 
$view->inc('elements/header.php');  ?>
<!--<img src="<?php echo $view->getThemePath()?>/images/blue-gradients-transparent-bg-rt.png">-->
<section class="section section-about-us about-us top-section">
    <?php $view->inc('elements/txt-right-img-left.php'); ?>
</section>
<div class="wrapper mid about">
    <div class="container">
        <div class="col-md-12">
            <h2 class="main-title align-center"><? $a = new Area('About Title');$a->display($c);?></h2>
            <p><? $a = new Area('About Content');$a->display($c);?></p>
        </div>
        <div class=" col-md-12 separator saperator-gradient"></div>
        <div class="col-md-12">
            <h2>Contact AnchorFree Inc.</h2>
        </div>
        <div class="col-md-6 col-sm-6 address">
            <h4>US. Headquarters</h4>
            <? $a = new Area('US Headquarter Address');$a->display($c);?>
        </div>
        <div class="col-md-6 col-sm-6 address">
            <h4>Swiss Location</h4>
            <? $a = new Area('Swiss Address');$a->display($c);?>
        </div>
    </div>
</div>
<section class="map">
    <? $a = new Area('Map');$a->display($c);?>
</section>
<div class="wrapper about-form">
    <div class="container">
        <h2>Email Us</h2>
        <? $a = new Area('Form');$a->display($c);?>
    </div>
</div>
<div class="wrapper meet-visionaries">
    <div class="container">
        <h2>Meet the Visionaries</h2>
            <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-1');$a->display($c);?><? $a = new Area('vision-desc-1');$a->display($c);?></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-2');$a->display($c);?><? $a = new Area('vision-desc-2');$a->display($c);?></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-3');$a->display($c);?><? $a = new Area('vision-desc-3');$a->display($c);?></div>


            <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-4');$a->display($c);?><? $a = new Area('vision-desc-4');$a->display($c);?></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-5');$a->display($c);?><? $a = new Area('vision-desc-5');$a->display($c);?></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-6');$a->display($c);?><? $a = new Area('vision-desc-6');$a->display($c);?></div>

    </div>
</div>
<div class="wrapper investors-board-advisors">
    <div class="container">
       <h2>Investors &amp; Board of Advisors</h2>
       <div class="col-md-4 col-sm-4"><? $a = new Area('Investors Board Advisors Column 1');$a->display($c);?></div>
       <div class="col-md-4 col-sm-4"><? $a = new Area('Investors Board Advisors Column 2');$a->display($c);?></div>
       <div class="col-md-4 col-sm-4"><? $a = new Area('Investors Board Advisors Column 3');$a->display($c);?></div>
    </div>
    
    
</div>
<section class="section section-join-team join-team">
    <?php $view->inc('elements/joinaf-text-left-img-right.php'); ?>
</section>
    
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>