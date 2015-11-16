<!DOCTYPE html>
<html class="no-js">
<head>
    <?=Loader::element('header_required')?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="GgYCYvq0MPlNIjM0Q1FRpoX1JWEKwvaPsIR7BkxxiVE" />
    <link media="all" type="text/css" rel="stylesheet" href="../../../concrete/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo $view->getThemePath()?>/css/bootstrap-custom.min.css">
    <?php
    $URL = BASE_URL. $this->url($this->getCollectionObject()->cPath); 
        $themePath = $view->getThemePath();
        if(preg_match("/carriers/", $URL) || preg_match("/advertise/", $URL)) { // display script on carriers or advertise page
            echo "<link href='//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css' rel='stylesheet'>";
        }
    ?>
    <link rel="stylesheet" href="<?php echo $view->getThemePath()?>/css/styles.css"/>
    <script type="text/javascript" src="<?php echo $view->getThemePath()?>/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo $view->getThemePath()?>/js/jquery.backstretch.min-ck.js'></script>
    <!--[if lt IE 9]>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <link rel="stylesheet" href="<?php echo $view->getThemePath()?>/css/ie.css"/>
    <![endif]-->
</head>
<body>
    <div class="<?php echo $c->getPageWrapperClass()?>">
        <header class="head-body header">
        <!-- Fixed navbar -->
        <div role="navigation" class="navbar navbar-default navbar-fixed-top col-md-12">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/" class="navbar-brand"><img class="full-width" alt="AnchorFree" src="<?php echo BASE_URL ?>/application/files/5314/3458/5627/AF-Horizontal-Color.png"></a>
                </div><!--.navbar-header -->
                <? $a = new GlobalArea('Header Nav');$a->display($c); ?>
            </div><!--.container -->  
        </div>
        </header>