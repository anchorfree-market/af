<?php 
$view->inc('elements/header.php');  ?>
<div class="container-fluid top-section">
<div class="row">
	<div class="container">
<div class="wrapper mid press">
    <div class="col-md-8">
        <h2>
            <? $a = new Area('Press Title');$a->display($c); ?>
        </h2>
        <div class="press-date"><? $a = new Area('Press Date');$a->display($c); ?></div>
        <div class="press-desc"><? $a = new Area('Press Description');$a->display($c); ?></div>
    </div>
    <div class="col-md-4 press-feature hidden-xs">
        <? $a = new GlobalArea('Press Featured On');$a->display($c); ?>
    </div>
</div>
</div></div></div>
<?php
if ($redirectURL = $c->getCollectionAttributeValue('redirect_to_url')) {
   if ($redirectURL != '') {   
      Header( "HTTP/1.1 301 Moved Permanently" ); 
      Header( "Location: " . $redirectURL ); 
   }
}
?>
<?php $view->inc('elements/footer.php'); ?>

