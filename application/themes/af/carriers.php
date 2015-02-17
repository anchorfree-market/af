<?php $view->inc('elements/header.php');  ?>
<?php $view->inc('elements/fixed-contact-us.php'); ?>

<section class="section section-featured-carrier bg-gradient--blue" style="position-relative;">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 col-lg-6">
                    <h1 class="text-white align-left">
                        <?
                            $a = new Area('Carrier Feature H1');
                            $a->display($c);
                        ?>
                    </h1>
                    <a class="btn btn-lg btn--green js-scroll-to howitw" href="#" data-scroll="#howitworks-carrier" title="How it works">How it works</a>
                    <!--<h1 class="text-white align-left">Our <span class="strong">Wi-Fi Security</span> product provides security to your customers when using public Wi-Fi.</h1>-->
                    <p class="available-on">Available on</p>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-featured -->

<!-- ATTACKS -->
<section class="section section-attacks">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h2-carrier">
                        <?
                            $a = new Area('Carrier Wifi not Safe Title');
                            $a->display($c);
                        ?>
                    </h2>
                    <!--<h2 class="h2-carrier">Public Wi-Fi is not safe</h2>-->
                </div>

                <div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                        <?
                            $a = new Area('Carrier Wifi not Safe Text');
                            $a->display($c);
                        ?> 
                    <!--<p class="text-center">According to a product manager at a Brazilian carrier, 40% of all subscribers have suffered a form of identity theft from hacking.<span class="divider-blue"></span>According to a Director at Chinese carrier, 10-20% of their 750M subscribers have experienced Apps being hijacked by hackers.</p>-->  
                </div>
            </div> <!-- .row -->

            <ul class="attacks-list row">
                <li class="col-sm-12 col-lg-6 attack-list-type animate">
                    <div class="attack-list-wrapper">
                        <span class="attack-icon attack-icon--sniffers"></span>
                        <h4>Sniffers</h4>
                        <?
                            $a = new Area('Carrier Sniffers');
                            $a->display($c);
                        ?> 
                        <!--<p>Sniffers allow hackers to passively intercept data sent between your mobile app or web browser and Wi-Fi routers and web servers on the Internet. This easy attack allows any hackers to view your credentials, any email, apps, search histories or files you transfer between computers or open from network locations on an unsecured Wi-Fi network.</p>-->    
                    </div>
                </li>
                <li class="col-sm-12 col-lg-6 attack-list-type animate">
                    <div class="attack-list-wrapper">
                        <span class="attack-icon attack-icon--sidejacking"></span>
                        <h4>Sidejacking</h4>
                        <?
                            $a = new Area('Carrier Sidejacking');
                            $a->display($c);
                        ?> 
                        <!--<p>It is a technique to create an alternative path for IP packets to pass through the hacker's computer en route to their destination.</p>-->
                    </div>
                </li>
                <li class="col-sm-12 col-lg-6 attack-list-type animate">
                    <div class="attack-list-wrapper">
                        <span class="attack-icon attack-icon--tools"></span>
                        <h4>Hacking tools</h4>
                        <?
                            $a = new Area('Carrier Hacking Tools');
                            $a->display($c);
                        ?> 
                        <!--<p>Hacking software and Apps are readily available for free on the web and there are >200 videos on YouTube to show hackers how to use them.</p>-->
                    </div>
                </li>
                <li class="col-sm-12 col-lg-6 attack-list-type animate">
                    <div class="attack-list-wrapper">
                        <span class="attack-icon attack-icon--networks"></span>
                        <h4>Rogue Networks</h4>
                        <?
                            $a = new Area('Carrier Rogue Networks');
                            $a->display($c);
                        ?> 
                        <!--<p>There are many fake Wi-Fi hotspots that are setup to deceive Wi-Fi users into believing the hotspots are safe/appropriate. It is often set up to passively gather credentials/logins to real hotspots and apps.</p>-->
                    </div>
                </li>
                <li class="col-sm-12 col-lg-6 attack-list-type animate">
                    <div class="attack-list-wrapper">
                        <span class="attack-icon attack-icon--manmiddle"></span>
                        <h4>Man-in-the-middle Attacks</h4>
                        <?
                            $a = new Area('Carrier Man in the Middle Attacks');
                            $a->display($c);
                        ?> 
                        <!--<p>Hackers under the same Wi-Fi network with your customers can easily eavesdrop to gain credential and information for social engineering/hacking.</p>-->
                    </div>
                </li>
                <li class="col-sm-12 col-lg-6 attack-list-type animate">
                    <div class="attack-list-wrapper">
                        <span class="attack-icon attack-icon--honeypot"></span>
                        <h4>Honeypot Attacks</h4>
                        <?
                            $a = new Area('Carrier Honeypot Attacks');
                            $a->display($c);
                        ?> 
                        <!--<p>Also called "<span class="strong">Evil Twin Attacks</span>" or "<span class="strong">ARP Spoofing</span>," it is a technique for the IP to be rerouted to the hacker’s computer instead of the real destination.</p>-->
                    </div>
                </li>
            </ul>
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-attacks -->

<!-- VIDEO -->
<section class="section section-video bg-gradient--blue">
    <div class="wrapper">        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="video-container">
                        <div id="video-content" class="pretty-embed play">
                            <div class="fluid-width-video-wrapper" style="padding-top: 56.2162%;"><iframe src="//www.youtube.com/embed/UoZWa62nzaM?autoplay=0&amp;rel=1" width="100%" height="100%" style="border:none;" allowfullscreen="" id="fitvid118984"></iframe></div>                    
                            </div>
                    </div><!--/.video-container-->
                    <!--<p class="copyright-video">© <span class="italic">Men in Grey</span></p>-->
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 col-lg-offset-1">
                    <?
                        $a = new Area('Carrier Customers can be Hacked');
                        $a->display($c);
                    ?>
                    <!--
                       <h2 class="text-white align-left">How your customers can be hacked</h2>
                       <p class="text-white">Public Wi-Fi is unsafe and hackers can gain remarkably detailed information from your users. Hackers can see personally identifiable information, including App usage/passwords, keystrokes, messaging/email and favorites/bookmarks. As this video demonstrates, most Wi-Fi users are unaware of these vulnerabilities. And if the user is hacked, who will they blame for their misfortune?</p>
                        -->
                    </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-video -->

<!-- HOW IT WORKS -->
<section id="howitworks-carrier" class="section section-howitworks-carrier">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <?
                        $a = new Area('Carrier Protect Customers identity');
                        $a->display($c);
                    ?>
                    <!--
                    <h2 class="h2-carrier">Protect your customers' identity and assets</h2> 
                    <p class="text-center">Discover how AnchorFree's Wi-Fi Security works by simply changing the status of the security control below.</p>-->
                </div>
                
                <div class="col-md-12 relative">
                    <div id="switch-js" class="switch switch--off">
                        <span class="switch-title">Wi-Fi SECURITY</span>
                        <span class="switch-cursor"><span class="switch-cursor-inside"></span></span>
                        <span class="switch-bg"></span>
                        <span class="switch-text switch-text--off">Off</span>
                        <span class="switch-text switch-text--on">On</span>
                    </div>
                </div>

                <div class="wrapper-diagram">
                    <div id="security-off" class="col-md-12 relative diagram">
                        <div class="hidden-sm hidden-xs">
                            <div class="diagram-hacker diagram-hacker--off">
                                <img src="<?php echo $view->getThemePath()?>/images/icn_hacker@2x.png" />
                            </div>

                            <div class="diagram-user diagram-user--off">
                                <img src="<?php echo $view->getThemePath()?>/images/icn_user_bug@2x.png" />
                            </div>

                            <div class="circles-user">
                                <div class="circle-user circle-user-1"></div>
                                <div class="circle-user circle-user-2"></div>
                                <div class="circle-user circle-user-3"></div>
                            </div>

                            <div class="diagram-router diagram-router--off">
                                <img src="<?php echo $view->getThemePath()?>/images/icn_router@2x.png" />
                                <span class="diagram-description diagram-description--router">Wi-Fi hotspot</span>
                            </div>

                            <div class="diagram-internet diagram-internet--off">
                                <img src="<?php echo $view->getThemePath()?>/images/icn_internet_bug@2x.png" />
                                <span class="diagram-description diagram-description--internet">Internet</span>
                            </div>
                            
                            <div class="icn-ip-password">
                                <img src="<?php echo $view->getThemePath()?>/images/icn_ip_password@2x.png" />
                                <span class="diagram-description diagram-description--ip">Visible IP and Passwords</span>
                            </div>

                            <!-- Description alone -->
                            <span class="diagram-description diagram-description--holes">A lot of security holes</span>

                            <!-- Connections -->
                            <div class="connection connection-top-sx connection--hor-inverse connection--hacker"></div>
                            <div class="connection connection-top connection--ver connection--hacker"></div>
                            <div class="connection connection-sx connection--hor connection--disable"></div>
                            <div class="connection connection-dx connection--hor connection--disable"></div>
                            </div><!-- .hidden-sm -->

                        <!-- Tooltips -->
                        <a href="#" tabindex="0" class="popover-custom popover-custom--user" data-toggle="popover" data-placement="top" data-trigger="focus" title="CUSTOMERS" data-content="Their privacy and data are at risk.">+</a>

                        <a href="#" tabindex="0" class="popover-custom popover-custom--hackers" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="HACKERS" data-content="Your customers’ sensitive data can easily be stolen.">+</a>

                        <a href="#" tabindex="0" class="popover-custom popover-custom--connections" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="CONNECTIONS" data-content="IP address and browsing data are exposed.">+</a>

                        <div class="placeholder-image visible-sm visible-xs">
                            <img src="<?php echo $view->getThemePath()?>/images/placeholder_wifi_off@2x.png" width="100%" alt="" />
                        </div>
                    </div><!-- #security-off -->

                    <div id="security-on" class="col-md-12 relative diagram">
                        <div class="hidden-sm hidden-xs">                
                            <div class="diagram-hacker diagram-hacker--off">
                                <img src="<?php echo $view->getThemePath()?>/images/icn_hacker@2x.png" />
                            </div>

                            <div class="diagram-user diagram-user--off">
                                <img src="<?php echo $view->getThemePath()?>/images/icn_user_check@2x.png" />
                            </div>

                            <div class="shields-user">
                                <div class="shield-user shield-user-1"></div>
                                <div class="shield-user shield-user-2"></div>
                                <div class="shield-user shield-user-3"></div>
                            </div>

                            <div class="diagram-router diagram-router--on">
                                <img src="<?php echo $view->getThemePath()?>/images/icn_router@2x.png" />
                                <span class="diagram-description diagram-description--router">Wi-Fi hotspot</span>
                            </div>

                            <div class="diagram-internet diagram-internet--on">
                                <img src="<?php echo $view->getThemePath()?>/images/icn_internet_secure@2x.png" />
                                <span class="diagram-description diagram-description--internet">Secure Internet</span>
                            </div>

                            <div class="diagram-shield diagram-shield--on">
                                <img src="<?php echo $view->getThemePath()?>/images/icn_server_shield@2x.png" />
                            </div>
                            
                            <!-- Description alone -->
                            <span class="diagram-description diagram-description--holes">Private and secure tunnel</span>
                            
                            <div class="shield-red"></div><!-- /.shield-red -->

                            <!-- Connections -->
                            <div class="connection connection-top connection--ver connection--ver--short connection--hacker"></div>
                            <div class="connection connection-sx connection--hor connection--enable"></div>
                            <div class="connection connection-dx-left connection--hor connection--enable"></div>

                            <div class="connection connection-dx-right connection--hor connection--enable"></div>
                        </div><!-- .hidden-sm -->

                        <!-- Tooltips -->
                        <a href="#" tabindex="0" class="popover-custom popover-custom--user" data-toggle="popover" data-placement="top" data-trigger="focus" title="CUSTOMERS" data-content="Protected by end-to-end secure connection.">+</a>

                        <a href="#" tabindex="0" class="popover-custom popover-custom--hackers" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="HACKERS" data-content="Can NOT see the data as it’s encrypted.">+</a>

                        <a href="#" tabindex="0" class="popover-custom popover-custom--connections" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="CONNECTIONS" data-content="Highly secure encryption and malware protection to block bad attempts.">+</a>

                        <div class="placeholder-image visible-sm visible-xs">
                            <img src="<?php echo $view->getThemePath()?>/images/placeholder_wifi_on@2x.png" width="100%" alt="" />
                        </div>
                    </div><!-- #security-on -->
                </div><!-- /.wrapper-diagram -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-howitworks -->

<!-- FEATURES LIST -->
<section class="section section-features-list bg-gradient--lightgrey--top">
    <div class="wrapper wrapper-border">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h2-carrier">Wi-Fi Security for mobile carriers</h2>
                </div>
            </div> <!-- .row -->

            <ul class="features-list row">
                <li class="feature-type col-md-10 col-md-offset-1 relative animate">
                    <div class="feature-list-wrapper">
                        <span class="feature-icon feature-icon--wifi"></span>
                        <p>AnchorFree’s Wi-Fi Security product provides carrier/OEM’s customers with security when using public Wi-Fi.</p>
                    </div>
                </li>
                <li class="feature-type col-md-10 col-md-offset-1 relative animate">
                    <div class="feature-list-wrapper">
                        <span class="feature-icon feature-icon--custom"></span>
                        <p>Wi-Fi Security allows carriers to have a control element when its customers leave the licensed-spectrum.</p>
                    </div>
                </li>
                <li class="feature-type col-md-10 col-md-offset-1 relative animate">
                    <div class="feature-list-wrapper">
                        <span class="feature-icon feature-icon--global"></span>
                        <p>Wi-Fi Security can utilize a few different business models based on the needs of the carrier/OEM.</p>
                    </div>
                </li>
                <li class="feature-type col-md-10 col-md-offset-1 relative animate">
                    <div class="feature-list-wrapper">
                        <span class="feature-icon feature-icon--multidevice"></span>
                        <p>Multi-device accounts even when your customer utilizes Wi-Fi on their PC or MAC</p>
                    </div>
                </li>
            </ul>
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-features-list -->




<!-- CONTACT US -->
<section class="section section-contact-us-carrier bg-gradient--blue">
    <div class="wrapper wrapper--small">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1 align-center">
                    <h2 class="text-white h2-carrier">Work with AnchorFree, the pioneer and most trusted Wi-Fi security provider with <span class="strong">over 300 million downloads worldwide</span>.</h2>
                    <a class="btn btn-lg btn--green" href="mailto:bizdev@anchorfree.com" title="bizdev@anchorfree.com">contact us for more information</a>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-contactus -->

 <?php $view->inc('elements/footer.php'); ?>
<script type="text/javascript" src="<?php echo $view->getThemePath()?>/js/jquery.backstretch.min-ck.js"></script>
<script type="text/javascript" src="<?php echo $view->getThemePath()?>/js/carriers.js"></script>
<script type="text/javascript">
    $('.section-featured-carrier').backstretch('<?php echo $view->getThemePath()?>/images/bg_hero_carrier@2x.jpg');
    $('.section-video').backstretch('<?php echo $view->getThemePath()?>/images/bg_video_section.png');
</script>