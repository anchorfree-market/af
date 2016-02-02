<?php 
$view->inc('elements/header.php');  
?>
<section class="top-section">
    <? $a = new Area('Hero Image Area');$a->display($c);?>
</section> <!-- .section-featured -->
<div class="wrapper">
    <div class="container">   
        <div class="col-md-12 home-featured-on"><h2><? $a = new GlobalArea('Featured On');$a->display($c); ?></h2></div>
        <div id="greyscale" class="col-md-12 home-featured-companies"><? $a = new GlobalArea('Featured Logos');$a->display($c); ?></div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="separator saperator-gradient">
</div>
<div class="wrapper">
    <div class="container">
            <h2 class="col-md-12 main-title align-center-imp"><? $a = new GlobalArea('About Title');$a->display($c);?></h2>
            <p class="col-md-12 marginbot50 align-center-imp"><? $a = new GlobalArea('About Content');$a->display($c);?></p>
    </div> 
</div>
<div class="wrapper">
    <div class="container">
            <div class="col-md-12 marginbot50 align-center-imp"><? $a = new Area('Home Benefits');$a->display($c);?></div>
    </div> 
</div>
<div class="separator saperator-gradient">
</div>
<section class="home-choose-download" style="background:white;">
    <div class="wrapper">
        <div class="container">
                <div class="col-md-7"><? $a = new Area('Home Levent');$a->display($c);?></div>
                <div class="col-md-5 download-devices-img"><? $a = new Area('Home Levent Right');$a->display($c); ?></div>
                <div class="clearfix"></div>
        </div>
    </div>
</section> <!-- .section-featured -->
<div class="section home-product-back fullfadeblue">
    <?php $view->inc('elements/home-text-right-img-left.php'); ?>
</div>
<div class="section home-back">
    <?php $view->inc('elements/press-text-left-img-right.php'); ?>
</div>
<div class="wrapper"><!-- video -->
    <div class="container">
        <div class="col-md-12 marginbot50"><h2><? $a = new Area('Video Title');$a->display($c); ?></h2></div>
        <div class="col-md-7 home-video"><? $a = new Area('Section Our Mission 2 Video');$a->display($c); ?></div>
        <div class="col-md-4 quote pull-right"><? $a = new Area('Section Our Mission 2');$a->display($c); ?></div>
        <div class="clearfix"></div>   
    </div>
</div>    
<div class="marginbot40"></div>
<div class="separator saperator-gradient"></div>
<div class="section section-join-team">
    <?php $view->inc('elements/joinaf-text-left-img-right.php'); ?>
</div>
<div class="marginbot40"></div>
<div class="separator saperator-gradient"></div>

<script type="text/javascript">
    // device detection
    if(navigator.appVersion.indexOf('iPad') > -1 || navigator.appVersion.indexOf('iPhone') > -1) { // iPhone and iPad
        $(".btn-free").attr({"href": "http://ad.apsalar.com/api/v1/ad?re=0&st=484721002049&h=76747007d9cd6f218a89cf72cbd95b9ed71adac9",
        "onclick": "ga('send', 'event', { eventCategory: 'AnchorFree Homepage Download', eventAction: 'Button Click', eventLabel: 'iOS'})"});
    }
    else if(navigator.appVersion.indexOf('Android') > -1) { // Android
        $(".btn-free").attr({"href": "http://ad.apsalar.com/api/v1/ad?re=0&st=484721002049&h=76747007d9cd6f218a89cf72cbd95b9ed71adac9",
        "onclick": "ga('send', 'event', { eventCategory: 'AnchorFree Homepage Download', eventAction: 'Button Click', eventLabel: 'Android'})"});
    }
    else if(navigator.appVersion.indexOf("Mac")!=-1){ //Mac 
        $(".btn-free").attr({"href": "http://mydati.com//download/hss-mac/553.dmg",
        "onclick": "ga('send', 'event', { eventCategory: 'AnchorFree Homepage Download', eventAction: 'Button Click', eventLabel: 'OSX'})"});
    }
    else { //Windows
        $(".btn-free").attr("onclick", "ga('send', 'event', { eventCategory: 'AnchorFree Homepage Download', eventAction: 'Button Click', eventLabel: 'Windows'})" ); 
    }    
    
    // Redirect user to thank you page on click of buttons
    $(document).ready(function(){
        $(".btn-free").bind('click', function(){
            setTimeout( function() {
                window.location = "http://www.hotspotshield.com/thankyou.html";
            }, 3000 );	
        });	
    });
 
    // check flash version
    function getFlashVersion(){
        // ie
        try {
          try {
            var axo = new ActiveXObject('ShockwaveFlash.ShockwaveFlash.6');
            try { axo.AllowScriptAccess = 'always'; }
            catch(e) { return '6,0,0'; }
          } catch(e) {}
          return new ActiveXObject('ShockwaveFlash.ShockwaveFlash').GetVariable('$version').replace(/\D+/g, ',').match(/^,?(.+),?$/)[1];
        // other browsers
        } catch(e) {
          try {
            if(navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin){
              return (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]).description.replace(/\D+/g, ",").match(/^,?(.+),?$/)[1];
            }
          } catch(e) {}
        }
        return '0,0,0';
    }
</script>
<!--[if lt IE 9]>
<script>
        var version = getFlashVersion().split(',').shift();
        if(version < 10){
          $('.home-video').append('<span>Your Flash Player is outdated. Please update to the latest version.</span>').css({color: '#FF0000', fontWeight: 'bold'});
        }
</script>
<![endif]-->
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>