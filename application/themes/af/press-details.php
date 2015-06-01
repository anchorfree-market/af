<?php 
$view->inc('elements/header.php');  ?>
<div class="container-fluid top-section">
    <div class="backstretch-contain-press">
        <div class="container">
            <h1><? $a = new GlobalArea('Press Title Name');$a->display($c); ?></h1>
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="container">
<div class="row">
<div class="wrapper mid press">
    <div class="col-md-8">
        <h2><? $a = new Area('Press Title');$a->display($c); ?></h2>
        <div class="press-date"><? $a = new Area('Press Date');$a->display($c); ?><p>&nbsp;</p></div>
        <div class="press-desc"><? $a = new Area('Press Description');$a->display($c); ?></div>
    </div>
    <div class="col-md-3 col-md-offset-1 press-feature hidden-xs">
        <div>
        <h3><? $a = new GlobalArea('Press Inquiries Title');$a->display($c); ?></h3>
        <p><? $a = new GlobalArea('Press Inquiries');$a->display($c); ?></p>
        <p>&nbsp;</p>
        <h3><? $a = new GlobalArea('Press Featured On');$a->display($c); ?></h3>
        <p><? $a = new GlobalArea('Press Featured Logos');$a->display($c); ?></p>
        </div>
    </div>
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

