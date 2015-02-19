<?php $view->inc('elements/header.php');  ?>

<h1>Welcome to AnchorFree</h1>
<?
    $a = new Area('Home Test');
    $a->display($c);
?>

 <?php $view->inc('elements/footer.php'); ?>