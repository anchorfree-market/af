<?php $view->inc('elements/header.php');  ?>
<h1>Jobs</h1>

<div class="marginbot50"></div>
<?php
    function getURL($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $content = curl_exec($ch);
        curl_close($ch);
        return $content;
    }
    $jobs = null;
    
    if (empty($_REQUEST['gh_jid'])) {
	$data = getURL('https://api.greenhouse.io/v1/boards/anchorfree/embed/departments');
	if (!empty($data)) {
		$jobs = json_decode($data, true);
	}
    }
?>

<div class="container">
    <a name="careerslist"></a>
    <div class="col-md-12"><h2 class="align-center-imp"><? $a = new Area('Positions Title');$a->display($c);?></h2></div>
</div>

<div class="container">
    <div class="col-md-12 margin-center">
     <?php if (!empty($_REQUEST['gh_jid'])) :?>
        <div id="grnhse_app"></div>
        <script src='https://app.greenhouse.io/embed/job_board/js?for=anchorfree'></script>
    <?php else:?>
        
    <?php if (!empty($jobs)) :?>
        <?php $department = $jobs['departments']; ?>
        <div id="careers-accordion">
            <h3><?php echo $department[2]['name']?> <span class="department-jobs-count"><?php echo count($department[2]['jobs']) ?></span>&nbsp;&nbsp;</h3>
            <div class="textBox_t1">
                <div>
                    <?php foreach ($department[2]['jobs'] as $job): ?>
                    <p><span><?php echo $job['title']?></span> - <?php echo $job['location']['name']?>
                        <a href="<?php echo $job['absolute_url']?>">LEARN MORE</a></p>
                    <?php endforeach;?>
                </div>
            </div>
            
            <h3><?php echo $department[1]['name']?> <span class="department-jobs-count"><?php echo count($department[1]['jobs']) ?></span>&nbsp;&nbsp;</h3>
            <div class="textBox_t1">
                <div>
                    <?php foreach ($department[1]['jobs'] as $job): ?>
                    <p><span><?php echo $job['title']?></span> - <?php echo $job['location']['name']?>
                        <a href="<?php echo $job['absolute_url']?>">LEARN MORE</a></p>
                    <?php endforeach;?>
                </div>
            </div>
            
            <h3><?php echo $department[0]['name']?><span class="department-jobs-count"><?php echo count($department[0]['jobs']) ?></span>&nbsp;&nbsp;</h3>
            <div class="textBox_t1">
                <div>
                    <?php foreach ($department[0]['jobs'] as $job): ?>
                    <p><span><?php echo $job['title']?></span> - <?php echo $job['location']['name']?>
                        <a href="<?php echo $job['absolute_url']?>">LEARN MORE</a></p>
                    <?php endforeach;?>
                </div>
            </div>
            <?php else:?>
              <h4>There are no open positions for now</h4>
            <?php endif;?>
        </div>
    <?php endif;?>
</div>
</div>

<div class="marginbot40"></div>
<div class="separator saperator-gradient"></div>

<?php $view->inc('elements/footer.php'); ?>

        
<!-- ie8 only -- fix video full width and height -->
<!--[if lt IE 9]>
<script>
$(document).ready(function() {
    $('#vi-contain').html('<img src="<?php echo $view->getThemePath()?>/videos/careers-video.jpg" style="width: 100%;">');
}); // end of document ready
</script>
<![endif]-->
      
      
<? $a = new Area('javascript');$a->display($c); ?>

