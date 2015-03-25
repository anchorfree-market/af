<?php 
$view->inc('elements/header.php');  ?>
<section class="section section-press release">
    <div class="wrapper">
        <div class="container">
            <div class="col-md-7">
                <? $a = new Area('Press Top Text');$a->display($c); ?>
            </div>
            <div class="col-md-5 press-image">
                <? $a = new Area('Press Latest Text');$a->display($c); ?> 
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </section>
<div class="wrapper mid press">
    <div class="container">
        <div class="col-md-7">
            <h2 class="main-title">Press Releases</h2>
            <? $a = new GlobalArea('Press Release Lists');$a->display($c); ?>
        </div>
        <div class="col-md-5 press-feature">
            <? $a = new GlobalArea('Press Featured On');$a->display($c); ?>
        </div>
    </div>
</div>
    
<?php $view->inc('elements/footer.php'); ?>
<script type="text/javascript">
    $('.section-press').backstretch('<?php echo $view->getThemePath()?>/images/press-holding-phone2.png');
    $('.release').css('background','linear-gradient(45deg, #1d2879 0%, #1b87da 100%) repeat');
</script>

