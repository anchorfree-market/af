<?php 
$view->inc('elements/header.php');  ?>
<section class="section section-about-us about-us">
    <?php $view->inc('elements/txt-right-img-left.php'); ?>
</section>
<div class="wrapper mid press">
    <div class="container">
        <div class="col-md-12">
            <h2 class="main-title">
                <? $a = new Area('About Title');$a->display($c);?>
            </h2>
            <p><? $a = new Area('About Content');$a->display($c);?></p>
        </div>
        <hr>
        <div class="col-md-12">
            <h2>Contact AnchorFree Inc.</h2>
        </div>
        <div class="col-md-6">
            <h4>US. Headquarters</h4>
        </div>
        <div class="col-md-6">
            <h4>Swiss Location</h4>
        </div>

    </div>
</div>
<section class="section section-join-team join-team">
    <?php $view->inc('elements/txt-left-img-right.php'); ?>
</section>
    
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>