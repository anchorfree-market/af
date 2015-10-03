<?php 
$view->inc('elements/header.php');  ?>
<section class="section section-about-us about-us">
    <?php $view->inc('elements/txt-right-img-left.php'); ?>
</section>
<a name="about" class="top-section"></a>
<div class="wrapper mid about">
    <div class="container">
        <div class="col-md-12">
            <a name="contact" class="top-section"></a>
            <h2 class="main-title align-center-imp"><? $a = new GlobalArea('About Title');$a->display($c);?></h2>
            <p class="marginbot50 align-center-imp"><? $a = new GlobalArea('About Content');$a->display($c);?></p>
        </div>
        <div class=" col-md-12 separator saperator-gradient marginbot40"></div>
        <div class="col-md-12 marginbot15"><h2><? $a = new Area('Address Title');$a->display($c);?></h2></div>
	</div>
</div>
<div class="map hidden-xs"><? $a = new Area('Map');$a->display($c);?></div>
<!--
<div class="wrapper fullfadeblue">
    <div class="container">
        <h2 class="align-left-imp text-white"><? $a = new Area('Form Title');$a->display($c);?></h2>
        
        
        <div class="col-md-12"><? $a = new GlobalArea('Contact Form');$a->display($c);?></div>
    </div>
</div>
-->
<div class="wrapper meet-visionaries marginbot40">
    <div class="container">
        <div class="col-md-12"><h2><? $a = new Area('Team Title');$a->display($c);?></h2></div>
        <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-1');$a->display($c);?><? $a = new Area('vision-desc-1');$a->display($c);?></div>
        <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-2');$a->display($c);?><? $a = new Area('vision-desc-2');$a->display($c);?></div>
        <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-3');$a->display($c);?><? $a = new Area('vision-desc-3');$a->display($c);?></div>
        <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-4');$a->display($c);?><? $a = new Area('vision-desc-4');$a->display($c);?></div>
        <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-5');$a->display($c);?><? $a = new Area('vision-desc-5');$a->display($c);?></div>
        <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-6');$a->display($c);?><? $a = new Area('vision-desc-6');$a->display($c);?></div>
        <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-7');$a->display($c);?><? $a = new Area('vision-desc-7');$a->display($c);?></div>
        <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-8');$a->display($c);?><? $a = new Area('vision-desc-8');$a->display($c);?></div>
        <div class="col-md-4 col-sm-4 col-xs-6"><? $a = new Area('vision-image-9');$a->display($c);?><? $a = new Area('vision-desc-9');$a->display($c);?></div>
	</div>
</div>
<div class="wrapper investors-board-advisors">
    <div class="container">
       <div class="col-md-12"><h2><? $a = new Area('Investors Title');$a->display($c);?></h2></div>
       <div class="col-md-4 col-sm-4"><? $a = new Area('Investors Board Advisors Column 1');$a->display($c);?></div>
       <div class="col-md-4 col-sm-4"><? $a = new Area('Investors Board Advisors Column 2');$a->display($c);?></div>
       <div class="col-md-4 col-sm-4"><? $a = new Area('Investors Board Advisors Column 3');$a->display($c);?></div>
    </div> 
</div>
<section class="section section-join-team">
    <?php $view->inc('elements/joinaf-text-left-img-right.php'); ?>
</section>
<div class="marginbot40"></div>
<div class="separator saperator-gradient"></div>
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>