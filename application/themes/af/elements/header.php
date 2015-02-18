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

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $view->getThemePath()?>/css/styles.css"/>
    <script type="text/javascript" src="<?php echo $view->getThemePath()?>/js/modernizr.custom.js"></script>
    
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
                    <a href="/~anchorj6/af/" class="navbar-brand"><img class="full-width" alt="AnchorFree" src="<?php echo $view->getThemePath()?>/images/logo_anchorfree@2x.png"></a>
                </div><!--.navbar-header -->
                <!--
                <?
                    $a = new GlobalArea('Header Nav');
                    $a->display($c);
                ?>
                -->
                <div class="navbar-collapse collapse" style="height: 1px;">
                    
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://www.hotspotshield.com">Products</a></li>
                        <li><a href="/~anchorj6/af/advertise">Advertise</a></li>
                        <li><a title="Carrier" href="/~anchorj6/af/carriers">Carriers</a></li>
                        <li><a href="/~anchorj6/af/press">Press</a></li>
                        <li><a href="/~anchorj6/af/about">About</a></li>
                        <li><a href="/~anchorj6/af/careers">Careers</a></li>
                    </ul>
                </div><!--.nav-collapse -->
            </div><!--.container -->
            
        </div>
        
        </header>