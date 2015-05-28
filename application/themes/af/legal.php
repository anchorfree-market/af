<?php 
$view->inc('elements/header.php');  ?>
<section class="top-section">
</section>

<div class="top-section">
</section>
    <? $a = new Area('Section Main Area');$a->display($c); ?>

 <?php $view->inc('elements/footer.php'); ?>
<?php
if ($redirectURL = $c->getCollectionAttributeValue('redirect_to_url')) {
   if ($redirectURL != '') {   
      Header( "HTTP/1.1 301 Moved Permanently" ); 
      Header( "Location: " . $redirectURL ); 
   }
}
?>
<? $a = new Area('php script');$a->display($c); ?>