<?php 
$view->inc('elements/header.php');  ?>
<div class="wrapper">
    <div class="container">
        <div class="col-md-12 marginbot15"><h2><? $a = new Area('Address Title');$a->display($c);?></h2></div>
        <div class="row">
            <div class="col-md-2 col-md-offset-1 col-xs-12"><h4><? $a = new Area('US Headquarter Address Title');$a->display($c);?></h4></div>
            <div class="col-md-3 col-xs-12"><h4 class="align-left-imp"><? $a = new Area('US Headquarter Address');$a->display($c);?></h4></div>
            <div class="col-md-2 col-md-offset-1 col-xs-12"><h4><? $a = new Area('Swiss Address Title');$a->display($c);?></h4></div>
            <div class="col-md-3 col-xs-12"><h4 class="align-left-imp"><? $a = new Area('Swiss Address');$a->display($c);?></h4></div>
    	</div>
        <div class="row contact-info">
            <div class="col-md-4">
                <div class="contact-block">
                    <img src="<?php echo $view->getThemePath()?>/images/icn_user_bug@2x.png" />
                    <h5>For Advertising Inquiries</h5>
                    <a href="mailto:advertise@anchorfree.com">advertise@anchorfree.com</a>
                </div>
                <div class="contact-block">
                    <img src="<?php echo $view->getThemePath()?>/images/icn_user_bug@2x.png" />
                    <h5>For Advertising Inquiries</h5>
                    <a href="mailto:advertise@anchorfree.com">advertise@anchorfree.com</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-block">
                    <img src="<?php echo $view->getThemePath()?>/images/icn_user_bug@2x.png" />
                    <h5>For Advertising Inquiries</h5>
                    <a href="mailto:advertise@anchorfree.com">advertise@anchorfree.com</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-block">
                    <img src="<?php echo $view->getThemePath()?>/images/icn_user_bug@2x.png" />
                    <h5>For Advertising Inquiries</h5>
                    <a href="mailto:advertise@anchorfree.com">advertise@anchorfree.com</a>
                </div>
                <div class="contact-block">
                    <img src="<?php echo $view->getThemePath()?>/images/icn_user_bug@2x.png" />
                    <h5>For Advertising Inquiries</h5>
                    <a href="mailto:advertise@anchorfree.com">advertise@anchorfree.com</a>
                </div>

            </div>
        </div>
    </div> 
</div>
<?php $view->inc('elements/footer.php'); ?>
<? $a = new Area('Backstretch Script');$a->display($c); ?>


