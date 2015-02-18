<?php $view->inc('elements/header.php');  ?>
<?php $view->inc('elements/fixed-contact-us.php'); ?>

<section class="section section-featured bg-gradient--blue">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <?
                        $a = new Area('Featured Text h1');
                        $a->display($c);
                    ?>
                    <!-- <h1 class="text-white">Reach <span class="strong">25 million</span> active and engaged unique users from around the world</h1>-->
                </div>
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <?
                        $a = new Area('Featured Text h3');
                        $a->display($c);
                    ?>
                    <!-- <h3 class="text-white">Reach mobile and PC users who care about their privacy, love to access content online, travel frequently and love their gadgets.</h3>-->
                </div>
                <div class="col-sm-12 col-md-8 col-md-offset-2 section-featured-img">
                    <?
                        $a = new Area('Advertise Featured Image');
                        $a->display($c);
                    ?>
                    <!--<img src="<?php echo $view->getThemePath()?>/images/composition@2x.png" class="full-width section-featured-img">-->
                </div>
                
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-featured -->

<section class="section section-target">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?
                        $a = new Area('Advertise User Affinity');
                        $a->display($c);
                    ?>
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
                        <?
                            $a = new Area('advertise Who');
                            $a->display($c);
                        ?>
                    </div>

                </div>

                <div class="col-sm-12 col-md-8 col-md-offset-2">

                </div>

                <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <?
                        $a = new Area('Target Text');
                        $a->display($c);
                    ?>
                    <!--
                    <p class="text-center">The AnchorFree Platform can put your brand in front of 25 million active monthly users on the Web and mobile devices. Almost every person with a computer or a mobile phone uses a Wi-Fi network. Hotspot Shield, the most popular privacy app in the world, reaches virtually every demographic segment of a technically savvy/content hungry population.</p>
                    <p class="text-center">Whether you are trying to reach expats or travelers, The AnchorFree Platform is your ideal destination.</p>-->
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-who -->

<section class="section section-counter bg-gradient--grey">
    <div class="wrapper wrapper-border">
        <div class="container">
            <div class="row">
                <div class="col-md-12 relative">
                    <h2>
                        <?
                            $a = new Area('Advertise Users in Common Title');
                            $a->display($c);
                        ?>
                    </h2>
                    <!--<h2>What do our users have in common?</h2>-->

                    <div class="global-usage">
                        <span class="global-usage-title"><? $a = new Area('Global Usage');$a->display($c); ?><!-- Global Usage in over--></span>
                        <span class="global-usage-number"><? $a = new Area('Number of countries');$a->display($c); ?><!--190 countries--></span>
                    </div>
                    <div class="wrapper-counters">
                        <?
                            $a = new Area('Advertise Counters');
                            $a->display($c);
                        ?>
                        <!--
                        <ul class="counters">
                            <li id="counter1" class="counter">
                                <span class="counter-title">Unique active users</span>
                                <span class="counter-number"><span id="counter-data1"></span><span class="counter-unit">M</span></span>
                                <span class="counter-subtitle">Per month</span>
                            </li>
                            <li id="counter2" class="counter">
                                <span class="counter-title">User sessions</span>
                                <span class="counter-number"><span id="counter-data2"></span><span class="counter-unit">M</span></span>
                                <span class="counter-subtitle">Per month</span>
                            </li>
                            <li id="counter3" class="counter">
                                <span class="counter-title">Page views/ad views</span>
                                <span class="counter-number"><span id="counter-data3"></span><span class="counter-unit">B</span></span>
                                <span class="counter-subtitle">Per month</span>
                            </li>
                            <li id="counter4" class="counter">
                                <span class="counter-title">New downloads</span>
                                <span class="counter-number"><span id="counter-data4"></span><span class="counter-unit">M</span></span>
                                <span class="counter-subtitle">Per month</span>
                            </li>
                            <li id="counter5" class="counter">
                                <span class="counter-title">Video views</span>
                                <span class="counter-number"><span id="counter-data5"></span><span class="counter-unit">M</span></span>
                                <span class="counter-subtitle">Per month</span>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-counter -->

<section class="section section-howitworks">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <?
                        $a = new Area('How it Works Text');
                        $a->display($c);
                    ?>
                    <!--<h2>How it works</h2>
                    <p class="text-center">Hotspot Shield allows users to access and consume content securely and privately. Each user session spans approximately <span class="italic strong text-dark">148 page views</span>  and all advertising can be contextually targeted.</p>-->
                </div>
                <div class="col-md-4 product">
                    <h5 class="product-type product-type--landing"><? $a = new Area('how works 1');$a->display($c); ?><!--User is directed to a landing page--></h5>
                    <img id="img-product1" src="<?php echo $view->getThemePath()?>/images/browser_single_page.png" class="full-width">
                </div>
                <div class="col-md-4 product">
                    <h5 class="product-type product-type--content"><? $a = new Area('how works 2');$a->display($c); ?><!--Your content appears above all domains--></h5>
                    <img id="img-product2" src="<?php echo $view->getThemePath()?>/images/browser_content_frame.png" class="full-width">
                </div>
                <div class="col-md-4 product">
                    <h5 class="product-type product-type--adv"><? $a = new Area('how works 3');$a->display($c); ?><!--Your adv appears above all domains--></h5>
                    <img id="img-product3" src="<?php echo $view->getThemePath()?>/images/browser_adv_frame.png" class="full-width">
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-howitworks -->

<section class="section section-mobile bg-gradient--blue">
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
                    <?
                        $a = new Area('Mobile Advertising h2');
                        $a->display($c);
                    ?>
                    <!--<h2 class="text-white">Mobile Advertising * <br/> Wi-Fi security and online privacy at the tip of your fingers.</h2>-->
                    <?
                        $a = new Area('Mobile Advertising h3');
                        $a->display($c);
                    ?>
                    <!--<h3 class="text-white">Reach <span class="italic strong">7.2 million</span> monthly active users at first touch in app!</h3>-->

                    <div class="androids">
                        <div class="android android-center">
                            <img src="<?php echo $view->getThemePath()?>/images/android_center@2x.png" class="full-width">
                        </div>
                        <div class="android android-blur android-blur--left">
                            <img src="<?php echo $view->getThemePath()?>/images/android_blur@2x.png" class="full-width">
                        </div>
                        <div class="android android-blur android-blur--right">
                            <img src="<?php echo $view->getThemePath()?>/images/android_blur@2x.png" class="full-width">
                        </div>
                        <span class="android-only italic">* Android only</span>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-mobile -->

<section class="section section-chart bg-gradient--lightgrey">
    <div class="wrapper wrapper-border">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2>
                        <?
                            $a = new Area('comScore Title');
                            $a->display($c);
                        ?>
                    </h2>
                    <!--<h2>Security and privacy-minded World Citizens. Content Enthusiasts.</h2>-->
                </div>

                <div class="col-md-12">
                    <a href="#" class="link-comscore pull-right">
                        <img src="<?php echo $view->getThemePath()?>/images/logo_comscore@2x.png" alt="ComScore" class="full-width">
                    </a>
                    <h2>
                        <?
                            $a = new Area('comScore Chart');
                            $a->display($c);
                        ?>
                        <!--
                    <div class="chart">
                        <div class="label-axis-y">Strengh: Comscore index</div>
                        <ul class="chart-lines">
                            <li><span>180.0</span></li>
                            <li><span>160.0</span></li>
                            <li><span>140.0</span></li>
                            <li><span>120.0</span></li>
                            <li><span>100.0</span></li>
                            <li><span>80.0</span></li>
                            <li><span>60.0</span></li>
                            <li><span>40.0</span></li>
                            <li><span>20.0</span></li>
                            <li><span>0.0</span></li>
                        </ul>
                        <ul class="chart-bars">
                            <li class="chart-bar-autos">
                                <div class="wrapper-bar">
                                    <span class="chart-bar-anchorfree"></span>
                                    <span class="chart-bar-comscore"></span>
                                </div>
                                <span class="chart-bar-label">Autos</span>
                            </li>

                            <li class="chart-bar-retail">
                                <div class="wrapper-bar">
                                    <span class="chart-bar-anchorfree"></span>
                                    <span class="chart-bar-comscore"></span>
                                </div>
                                <span class="chart-bar-label">Retail</span>
                            </li>

                            <li class="chart-bar-entertainment">
                                <div class="wrapper-bar">
                                    <span class="chart-bar-anchorfree"></span>
                                    <span class="chart-bar-comscore"></span>
                                </div>
                                <span class="chart-bar-label">Entertainment</span>
                            </li>

                            <li class="chart-bar-business">
                                <div class="wrapper-bar">
                                    <span class="chart-bar-anchorfree"></span>
                                    <span class="chart-bar-comscore"></span>
                                </div>
                                <span class="chart-bar-label">Business &amp; Finance</span>
                            </li>

                            <li class="chart-bar-travel">
                                <div class="wrapper-bar">
                                    <span class="chart-bar-anchorfree"></span>
                                    <span class="chart-bar-comscore"></span>
                                </div>
                                <span class="chart-bar-label">Travel &amp; information</span>
                            </li>

                            <li class="chart-bar-sports">
                                <div class="wrapper-bar">
                                    <span class="chart-bar-anchorfree"></span>
                                    <span class="chart-bar-comscore"></span>
                                </div>
                                <span class="chart-bar-label">Sports</span>
                            </li>
                        </ul>
                        <ul class="chart-legend">
                            <li class="legend-label legend-label--anchorfree">AncorFree Index</li>
                            <li class="legend-label legend-label--comscore">ComScore base</li>
                        </ul>
                    </div>-->
                </div>

                <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <?
                        $a = new Area('comScore');
                        $a->display($c);
                    ?>
                    <!--
                    <p class="text-center">
                        According to ComScore, AnchorFree users have a much higher propensity to visit travel, retail, business and finance websites than the average Internet user. AnchorFree’s rapidly growing network of U.S. Hotspot Shield users living, traveling, and working abroad puts advertisers in touch with an audience that is practically unreachable by any other means.
                    </p>-->
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-chart -->

<!-- CONTACT US -->
<section class="section section-contact-us bg-gradient--blue">
    <div class="wrapper wrapper--small">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-md-offset-2 relative">
                    <h2 class="text-white" style="padding: 20px 0;">
                        <?
                            $a = new Area('Contact Us Text');
                            $a->display($c);
                        ?>
                    </h2>
                    <?
                        $a = new Area('Contact Us Button');
                        $a->display($c);
                    ?>
                    <!--<h2 class="text-white" style="padding: 20px 0;">For more information about the service</h2>-->
                    <!--<a class="btn btn-lg btn--green" href="mailto:advertise@anchorfree.com" title="advertise@anchorfree.com" style='top: 40px;'>Contact us</a>-->
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-contactus -->

 <?php $view->inc('elements/footer.php'); ?>
<script type="text/javascript" src="<?php echo $view->getThemePath()?>/js/main-ck.js"></script>