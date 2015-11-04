<?php 
$view->inc('elements/header.php');  ?>
<?php $view->inc('elements/fixed-contact-us.php'); 
    $GLOBALS['topFirstEle'] = 'h1';
    $GLOBALS['topSecondEle'] = 'h3';
?>
<div class="section section-featured fullfadeblue">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <?php $view->inc('elements/txt-center-blue-bg.php'); ?>
                <div class="col-sm-12 col-md-8 col-md-offset-2 section-featured-img">
                    <? $a = new Area('Advertise Featured Image');$a->display($c); ?>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</div> <!-- .section-featured -->
<section class="section section-target">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <? $a = new Area('Advertise User Affinity');$a->display($c); ?>
                    <!--<h4>User Affinity</h4>-->
                </div>
                <div class="col-sm-4 col-md-4 col-md-offset-4 col-sm-offset-4 relative">
                    <div class="target">
                        <ul class="target-list">
                            <li class="target target--travelers">
                                <? $a = new Area('User Affinity Txt Up Left');$a->display($c); ?><!--Travelers-->
                            </li>
                            <li class="target target--world">
                                <? $a = new Area('User Affinity Txt Up Right');$a->display($c); ?><!--World Citizens -->
                            </li>
                            <li class="target target--privacy">
                                <? $a = new Area('User Affinity Txt Down Left');$a->display($c); ?><!--Privacy-minded individuals-->
                            </li>
                            <li class="target target--content">
                                <? $a = new Area('User Affinity Txt Down Right');$a->display($c); ?><!-- Content Enthusiasts -->
                            </li>
                        </ul>
                        <? $a = new Area('advertise Who');$a->display($c); ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-md-offset-2">
                </div>
                <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <? $a = new Area('Target Text');$a->display($c); ?>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-who -->
<div class="section section-counter bg-gradient--grey">
    <div class="wrapper wrapper-border">
        <div class="container">
            <div class="row">
                <div class="col-md-12 relative">
                    <h2>
                        <? $a = new Area('Advertise Users in Common Title');$a->display($c); ?>
                    </h2>
                    <div class="global-usage">
                        <span class="global-usage-title"><? $a = new Area('Global Usage');$a->display($c); ?><!-- Global Usage in over--></span>
                        <span class="global-usage-number"><? $a = new Area('Number of countries');$a->display($c); ?><!--190 countries--></span>
                    </div>
                    <div class="wrapper-counters">
                        <? $a = new Area('Advertise Counters');$a->display($c); ?>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</div> <!-- .section-counter -->
<section class="section section-howitworks">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <? $a = new Area('How it Works Text');$a->display($c); ?>
               </div>
                <div class="col-md-4 product">
                    <h5 class="product-type product-type--landing"><span class="product-page-thumb product-landing"></span><? $a = new Area('how works 1');$a->display($c); ?><!--User is directed to a landing page--></h5>
                    <img id="img-product1" src="<?php echo $view->getThemePath()?>/images/browser_single_page.png" class="full-width">
                </div>
                <div class="col-md-4 product">
                    <h5 class="product-type product-type--content"><span class="product-page-thumb product-content"></span><? $a = new Area('how works 2');$a->display($c); ?><!--Your content appears above all domains--></h5>
                    <img id="img-product2" src="<?php echo $view->getThemePath()?>/images/browser_content_frame.png" class="full-width">
                </div>
                <div class="col-md-4 product">
                    <h5 class="product-type product-type--adv"><span class="product-page-thumb product-adv"></span><? $a = new Area('how works 3');$a->display($c); ?><!--Your adv appears above all domains--></h5>
                    <img id="img-product3" src="<?php echo $view->getThemePath()?>/images/browser_adv_frame.png" class="full-width">
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-howitworks -->
<div class="section section-mobile fullfadeblue">
    <div class="wrapper relative">
        <div class="circles">
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
            <div class="circle circle-4"></div>
            <div class="circle circle-5"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <? $a = new Area('Mobile Advertising h2');$a->display($c); ?>
                    <? $a = new Area('Mobile Advertising h3');$a->display($c); ?>
                    <div class="androids">
                        <div class="android android-center">
                            <? $a = new Area('Advertise Android Center');$a->display($c); ?>
                        </div>
                        <div class="android android-blur android-blur--left">
                            <? $a = new Area('Advertise Android blur');$a->display($c); ?>
                        </div>
                        <div class="android android-blur android-blur--right">
                            <? $a = new Area('Advertise Android blur');$a->display($c); ?>
                        </div>
                        <span class="android-only italic">* Android only</span>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</div> <!-- .section-mobile -->
<section class="section section-chart bg-gradient--lightgrey">
    <div class="wrapper wrapper-border">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2>
                        <? $a = new Area('comScore Title');$a->display($c); ?>
                    </h2>
                </div>
                <div class="col-md-12">
                    <a href="#" class="link-comscore pull-right">
                        <img src="<?php echo $view->getThemePath()?>/images/logo_comscore@2x.png" alt="ComScore" class="full-width">
                    </a>
                    <h2>
                        <? $a = new Area('comScore Chart');$a->display($c); ?>
                </div>
                <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <? $a = new Area('comScore');$a->display($c); ?>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-chart -->
<!-- CONTACT US -->
<div class="section section-contact-us fullfadeblue">
    <div class="wrapper wrapper--small">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-md-offset-1 relative">
                    <h2 class="text-white" style="padding: 20px 0;">
                        <? $a = new Area('Contact Us Text');$a->display($c);?>
                    </h2>
               </div>
                <div class="col-sm-3 col-md-3">
                    <? $a = new Area('Contact Us Button');$a->display($c);?>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</div> <!-- .section-contactus -->
 <?php $view->inc('elements/footer.php'); ?>