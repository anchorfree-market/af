<?php 
$first = $GLOBALS['topFirstEle'];
$second = $GLOBALS['topSecondEle'];
?>
<div class="col-sm-12 col-md-10 col-md-offset-1">
    <? $a = new Area('Featured Text ' . $first);$a->display($c); ?>
</div>
<div class="col-sm-12 col-md-6 col-md-offset-3">
    <? $a = new Area('Featured Text ' . $second);$a->display($c); ?>
</div>