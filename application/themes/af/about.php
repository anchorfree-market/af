<?php 
$view->inc('elements/header.php');  ?>
<!--<img src="<?php echo $view->getThemePath()?>/images/blue-gradients-transparent-bg-rt.png">-->
<section class="section section-about-us about-us top-section">
    <?php $view->inc('elements/txt-right-img-left.php'); ?>
<a name="about" style="padding-top:100px;"></a>
</section>

<div class="wrapper mid about">
    <div class="container">
        <div class="col-md-12">
            <h2 class="main-title align-center-imp"><? $a = new Area('About Title');$a->display($c);?></h2>
            <p class="marginbot50 align-center-imp"><? $a = new Area('About Content');$a->display($c);?></p>
        </div>
        
        <div class=" col-md-12 separator saperator-gradient marginbot40"></div>
        
        <div class="col-md-12 marginbot15"><h2><? $a = new Area('Address Title');$a->display($c);?></h2></div>
        
        <div class="row">
        <div class="col-md-2 col-md-offset-1"><h4 class="align-right-imp"><? $a = new Area('US Headquarter Address Title');$a->display($c);?></h4></div>
        <div class="col-md-3"><h4 class="align-left-imp"><? $a = new Area('US Headquarter Address');$a->display($c);?></h4></div>
        <div class="col-md-2 col-md-offset-1"><h4 class="align-right-imp"><? $a = new Area('Swiss Address Title');$a->display($c);?></h4></div>
        <div class="col-md-3"><h4 class="align-left-imp"><? $a = new Area('Swiss Address');$a->display($c);?></h4></div>
    	</div>
	</div>
</div>

<div class="map hidden-xs"><? $a = new Area('Map');$a->display($c);?></div>

<div class="wrapper fullfadeblue">
    <div class="container">
        <h2 class="align-left-imp text-white"><? $a = new Area('Form Title');$a->display($c);?></h2>
        <div class="col-md-12"><? $a = new Area('Form');$a->display($c);?></div>
    </div>
</div>
<div class="wrapper meet-visionaries marginbot40">
    <div class="container">
        <div class="col-md-12"><h2><? $a = new Area('Team Title');$a->display($c);?></h2></div>
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
       <div class="col-md-12"><h2><? $a = new Area('Investors Title');$a->display($c);?></h2></div>
       <div class="col-md-4 col-sm-4"><? $a = new Area('Investors Board Advisors Column 1');$a->display($c);?></div>
       <div class="col-md-4 col-sm-4"><? $a = new Area('Investors Board Advisors Column 2');$a->display($c);?></div>
       <div class="col-md-4 col-sm-4"><? $a = new Area('Investors Board Advisors Column 3');$a->display($c);?></div>
    </div> 
</div>

<div class="container-fluid">
	<div class="row"><? $a = new GlobalArea('Join Team');$a->display($c);?></div>
</div>

<div class="marginbot40"></div>
<div class="separator saperator-gradient"></div>
    
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>