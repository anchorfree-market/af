<!DOCTYPE html>
<html class="no-js">
<head>
    <?=Loader::element('header_required')?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Facebook Open Graph 
<meta property="og:title" content="AnchorFree"/>
<meta property="og:url" content="http://anchorfree.com"/>
<meta property="og:image" content=""/>
<meta property="og:site_name" content="AnchorFree"/>
<meta property="og:description" content="Hotspot Shield VPN secures your browsing session, detects and blocks malware, hides ip address and allows you to access blocked websites."/>
<meta property="og:type" content=""/>
-->

<!-- Bootstrap core CSS 
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" rel="stylesheet">
-->
<!-- CSS 
<link href="source/v.SOURCE_VERSION/css/styles_v2.min.css" rel="stylesheet">

<link href="source/v.1.0/css/carriers.css" rel="stylesheet">-->
<link rel="stylesheet" href="<?php echo $view->getThemePath()?>/css/styles.css"/>
</head>
<body>
    <div class="<?php echo $c->getPageWrapperClass()?>">
        <header class="head-body header">
        <!-- Fixed navbar -->
        <div role="navigation" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/" class="navbar-brand"><img class="full-width" alt="AnchorFree" src="<?php echo $view->getThemePath()?>/images/logo_anchorfree@2x.png"></a>
                </div><!--.navbar-header -->

                <div class="navbar-collapse collapse" style="height: 1px;">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://www.hotspotshield.com">Products</a></li>
                        <li class="active"><a href="/advertise.php">Advertise</a></li>
                        <li><a title="Carrier" href="/carriers.php">Carriers</a></li>
                        <li><a href="/news.php">Press</a></li>
                        <li><a href="/about.php">About</a></li>
                        <li><a href="https://hsselite.zendesk.com/home">Careers</a></li>
                    </ul>
                </div><!--.nav-collapse -->
            </div><!--.container -->
        </div>
        </header>    
        
        

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-justified footer-nav">
                            <li><a title="Privacy" href="/privacy.php">Privacy</a></li>
                            <li><a title="Terms" href="/terms-of-service.php">Terms</a></li>
                            <li><a title="We’are hiring!" href="/jobs/">We’re hiring!</a></li>
                            <li><a title="Help" href="/support.php">Help</a></li>
                            <li><a title="Visit us" href="/contact.php">Visit us</a></li>
                        </ul>
                        <div class="separator saperator-gradient"></div>
                        <p class="footer-copyright">Copyright &copy; 2015 AnchorFree, Inc. All Rights Reserved</p>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </footer>


<!-- JavaScript 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/countupjs/1.1.0/countUp.min.js"></script>
<script type="text/javascript" src="/js/v2/imageLens.min.js"></script>
<script type="text/javascript" src="/js/v2/main-ck.js"></script>
-->
    </div>
    <? Loader::element('footer_required')?>
</body>
</html>