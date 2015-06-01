<?php 
$view->inc('elements/header.php');  ?>
<div class="container-fluid top-section press-details-back">
        <div class="container">
        <div><h2 class="text-white align-left"><? $a = new GlobalArea('Press Title Name');$a->display($c); ?></h2></div>
    	</div>
</div>

<div class="container">
<div class="row">
    <div class="col-md-8">
    	<!--Get Page Name--><h2 class="align-left"><?php $page = Page::getCurrentPage(); echo $page->getCollectionName(); ?></h2>
        <div class="horizontalpad"><? $a = new GlobalArea('Social Share Buttons');$a->display($c); ?></div>
        <div><h4 class="text-center lead"><em><? $a = new Area('Press Intro');$a->display($c); ?></em></h4></div>
        <div><p class="align-left">
		<strong><?php $datePublic = date('F j, Y', strtotime($page->getCollectionDatePublic())); echo $datePublic ?> &mdash; 
		<?php $page = Page::getCurrentPage(); echo $page->getCollectionAttributeValue('press_detail_city'); ?></strong><br>
		<? $a = new Area('Press Description');$a->display($c); ?></p></div>
    </div>
    <div class="col-md-3 col-md-offset-1 press-feature hidden-xs">
        <div>
        <h2 class="align-left"><? $a = new GlobalArea('Press Inquiries Title');$a->display($c); ?></h2>
        <p class="align-left"><? $a = new GlobalArea('Press Inquiries');$a->display($c); ?></p>
        <p>&nbsp;</p>
        <h2 class="align-left"><? $a = new GlobalArea('Press Featured On');$a->display($c); ?></h2>
        <p class="align-left"><? $a = new GlobalArea('Press Featured Logos');$a->display($c); ?></p>
        </div>
    </div>
</div>
</div>
<?php
if ($redirectURL = $c->getCollectionAttributeValue('redirect_to_url')) {
   if ($redirectURL != '') {   
      Header( "HTTP/1.1 301 Moved Permanently" ); 
      Header( "Location: " . $redirectURL ); 
   }
}
?>
<?php $view->inc('elements/footer.php'); ?>