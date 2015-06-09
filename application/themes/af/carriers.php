<?php $view->inc('elements/header.php');  ?>
<?php $view->inc('elements/fixed-contact-us.php'); ?>

<section class="section section-featured-carrier fullfadeblue" style="position-relative;">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 col-lg-6">
                    <h1 class="text-white align-left">
                        <?$a = new Area('Carrier Feature H1');$a->display($c);?>
                    </h1>
                    <?$a = new Area('How it Works Button');$a->display($c);?>
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
                        <?$a = new Area('Carrier Wifi not Safe Title');$a->display($c);?>
                    </h2>
               </div>
                <div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                        <? $a = new Area('Carrier Wifi not Safe Text');$a->display($c);?> 
               </div>
            </div> <!-- .row -->
            <ul class="attacks-list row">
                <li class="col-sm-12 col-lg-6 attack-list-type animate">
                    <div class="attack-list-wrapper">
                       <?$a = new Area('Carrier Sniffers');$a->display($c);?> 
                   </div>
                </li>
                <li class="col-sm-12 col-lg-6 attack-list-type animate">
                    <div class="attack-list-wrapper">
                        <?$a = new Area('Carrier Sidejacking');$a->display($c);?> 
                   </div>
                </li>
                <li class="col-sm-12 col-lg-6 attack-list-type animate">
                    <div class="attack-list-wrapper">
                        <?$a = new Area('Carrier Hacking Tools');$a->display($c);?> 
                   </div>
                </li>
                <li class="col-sm-12 col-lg-6 attack-list-type animate">
                    <div class="attack-list-wrapper">
                        <?$a = new Area('Carrier Rogue Networks');$a->display($c);?> 
                   </div>
                </li>
                <li class="col-sm-12 col-lg-6 attack-list-type animate">
                    <div class="attack-list-wrapper">
                        <?$a = new Area('Carrier Man in the Middle Attacks');$a->display($c);?> 
                    </div>
                </li>
                <li class="col-sm-12 col-lg-6 attack-list-type animate">
                    <div class="attack-list-wrapper">
                        <?$a = new Area('Carrier Honeypot Attacks');$a->display($c);?> 
                    </div>
                </li>
            </ul>
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-attacks -->

<!-- VIDEO -->
<section class="section section-video fullfadeblue">
    <div class="wrapper">        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <?$a = new Area('Carrier Video Container');$a->display($c);?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 col-lg-offset-1">
                    <?$a = new Area('Carrier Customers can be Hacked');$a->display($c);?>
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
                    <?$a = new Area('Carrier Protect Customers identity');$a->display($c);?>
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
                    <?$a = new Area('Carrier Wi-Fi Security');$a->display($c);?>
                </div>
            </div> <!-- .row -->
            <ul class="features-list row">
                <li class="feature-type col-md-10 col-md-offset-1 relative animate">
                    <?$a = new Area('Carrier Security List 1');$a->display($c);?>
                </li>
                <li class="feature-type col-md-10 col-md-offset-1 relative animate">
                    <?$a = new Area('Carrier Security List 2');$a->display($c);?>
                </li>
                <li class="feature-type col-md-10 col-md-offset-1 relative animate">
                    <?$a = new Area('Carrier Security List 3');$a->display($c);?>
                </li>
                <li class="feature-type col-md-10 col-md-offset-1 relative animate">
                    <?$a = new Area('Carrier Security List 4');$a->display($c);?>
                </li>
            </ul>
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-features-list -->

<!-- CONTACT US -->
<section class="section section-contact-us-carrier fullfadeblue">
    <div class="wrapper wrapper--small">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1 align-center">
                    <?$a = new Area('Carrier Contact Us'); $a->display($c);?>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-contactus -->
 <?php $view->inc('elements/footer.php'); ?>
<script type="text/javascript">
    $('.section-featured-carrier').backstretch('<?php echo $view->getThemePath()?>/images/bg_hero_carrier@2x.jpg');
    $('.section-video').backstretch('<?php echo $view->getThemePath()?>/images/bg_video_section.png');
</script>