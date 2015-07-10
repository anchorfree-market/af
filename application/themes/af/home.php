<?php 
$view->inc('elements/header.php');  
?>
<section>
    <? $a = new Area('Hero Image Area');$a->display($c);?>
</section> <!-- .section-featured -->

<div class="wrapper">
    <div class="container">
        <div class="row">
            <h2 class="main-title align-center-imp"><? $a = new GlobalArea('About Title');$a->display($c);?></h2>
            <p class="marginbot50 align-center-imp"><? $a = new GlobalArea('About Content');$a->display($c);?></p>
        </div> 
    </div> 
</div> 

<section class="section home-product-back">
    <?php $view->inc('elements/home-text-right-img-left.php'); ?>
</section>
 
<section class="section home-back">
    <?php $view->inc('elements/press-text-left-img-right.php'); ?>
</section>

<div class="wrapper"><!-- video -->
    <div class="container">
        <div class="col-md-12 marginbot50"><h2><? $a = new Area('Video Title');$a->display($c); ?></h2></div>
        <div class="col-md-7"><? $a = new Area('Section Our Mission 2 Video');$a->display($c); ?></div>
        <div class="col-md-4 quote pull-right"><? $a = new Area('Section Our Mission 2');$a->display($c); ?></div>
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
<script type="text/javascript">
        // device detection
        window.onload = function() {
                if(navigator.appVersion.indexOf('iPad') > -1 || navigator.appVersion.indexOf('iPhone') > -1) { // iPhone and iPad
                        $(".btn-free").attr("href", "http://ad.apsalar.com/api/v1/ad?re=0&st=484721002049&h=76747007d9cd6f218a89cf72cbd95b9ed71adac9");
                        $(".btn-free").attr("onclick", "ga('send', 'event', { eventCategory: 'AnchorFree Homepage Download', eventAction: 'Button Click', eventLabel: 'iOS'})" ); 
                        //alert('iphone');
                }
                else if(navigator.appVersion.indexOf('Android') > -1) { // Android
                        $(".btn-free").attr("href", "http://ad.apsalar.com/api/v1/ad?re=0&st=484721002049&h=76747007d9cd6f218a89cf72cbd95b9ed71adac9");
                        $(".btn-free").attr("onclick", "ga('send', 'event', { eventCategory: 'AnchorFree Homepage Download', eventAction: 'Button Click', eventLabel: 'Android'})" );
                        //alert('android');
                }
                else if(navigator.appVersion.indexOf("Mac")!=-1){ //Mac 
                        $(".btn-free").attr("href", "http://50.87.248.60/~anchorj6/af/application/files/2014/3648/6677/HSS-3.19.3-444.dmg");
                        $(".btn-free").attr("onclick", "ga('send', 'event', { eventCategory: 'AnchorFree Homepage Download', eventAction: 'Button Click', eventLabel: 'OSX'})" ); 
                        //alert('mac');
                }
                else { //Windows
                        $(".btn-free").attr("onclick", "ga('send', 'event', { eventCategory: 'AnchorFree Homepage Download', eventAction: 'Button Click', eventLabel: 'Windows'})" ); 
                        //alert('other');
                }
            };
        // Redirect user to thank you page on click of buttons
        $(document).ready(function(){
                $(".btn-free").bind('click', function(){
                        setTimeout( function() {
                                window.location = "http://www.hotspotshield.com/thankyou.html";
                        }, 3000 );	
                })	
        });
</script>
<!-- End Button Device Detection -->			
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>