<?php $view->inc('elements/header.php');  ?>
<section class="careers-video top-section">
   <? $a = new Area('Top Video');$a->display($c); ?>
</section>

<div class="wrapper">
    <div class="container">
        <div class="col-md-12 marginbot40">
            <h2 class="main-title align-center-imp"><? $a = new Area('Mission Title');$a->display($c);?></h2>
            <p class="marginbot30 align-center-imp"><? $a = new Area('Mission Content');$a->display($c);?></p>
        </div>
	</div>
</div>

<div class="wrapper fullfadeblue">
    <div class="container">
        <h2 class="align-center-imp text-white"><? $a = new Area('Values Title');$a->display($c);?></h2>
        <p class="marginbot40 align-center-imp text-white"><? $a = new Area('Values Content');$a->display($c);?></p>
        <div class="col-md-4 align-left-imp text-white"><? $a = new Area('Value 1');$a->display($c);?></div>
        <div class="col-md-4 align-left-imp text-white"><? $a = new Area('Value 2');$a->display($c);?></div>
        <div class="col-md-4 align-left-imp text-white"><? $a = new Area('Value 3');$a->display($c);?></div>
        <div class="col-md-12 text-white marginbot40"><? $a = new Area('Value Area');$a->display($c);?></div>
        <div class="col-md-12 align-center-imp marginbot40"><? $a = new Area('Value CTA');$a->display($c);?></div>
    </div>
</div>

<div class="wrapper">
    <div class="container">
        <h2 class="align-center-imp"><? $a = new Area('Perks Title');$a->display($c);?></h2>
        <p class="marginbot40 align-center-imp"><? $a = new Area('Perks Content');$a->display($c);?></p>
        <div class="col-md-4 align-left-imp"><? $a = new Area('Perks 1');$a->display($c);?></div>
        <div class="col-md-4 align-left-imp"><? $a = new Area('Perks 2');$a->display($c);?></div>
        <div class="col-md-4 align-left-imp"><? $a = new Area('Perks 3');$a->display($c);?></div>
        <div class="col-md-12 marginbot20"><? $a = new Area('Perks Area');$a->display($c);?></div>
        <div class="col-md-4 align-left-imp"><? $a = new Area('Perks 4');$a->display($c);?></div>
        <div class="col-md-4 align-left-imp"><? $a = new Area('Perks 5');$a->display($c);?></div>
        <div class="col-md-4 align-left-imp"><? $a = new Area('Perks 6');$a->display($c);?></div>
        <div class="col-md-12 marginbot40"><? $a = new Area('Perks Area');$a->display($c);?></div>
        <div class="col-md-12 align-center-imp marginbot40"><? $a = new Area('Perks CTA');$a->display($c);?></div>
    </div>
</div>

<div class="wrapper fullfadeblue">
    <div class="container">
        <div class="col-md-12 text-white marginbot40"><h2 class="align-center-imp text-white"><? $a = new Area('Stats Title');$a->display($c);?></h2></div>
        <div class="col-md-12 align-center-imp marginbot40"><p class="align-center-imp text-white"><? $a = new Area('Stats Content');$a->display($c);?></p>			</div>
   </div>
</div>

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

<div class="wrapper">
    <div class="container">
    <a name="careerslist"></a>
    <div class="col-md-12 marginbot30"><h2 class="align-center-imp"><? $a = new Area('Positions Title');$a->display($c);?></h2></div>
    </div>
</div>

<div class="wrapper">
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
</div></div></div>

<div class="marginbot40"></div>
<div class="separator saperator-gradient"></div>

<?php $view->inc('elements/footer.php'); ?>
<script>
$(document).ready(function() {
    $('#careers-accordion').accordion({
        heightStyle: "content",
        collapsible: true
    });
    
    /* cover video from the bottom */
    var coverVideo = $('.careers-openings');
    $(window).resize(function() {
            var videoHeight = $('#videoiframe').innerHeight();
            if(videoHeight >= 630) {
                    var minusVideoHeight = videoHeight - 630 + 4;
                    coverVideo.css('marginTop', '-'+minusVideoHeight+'px');
                    console.log(videoHeight + " and " + minusVideoHeight);
            }
            else {
                    coverVideo.css('marginTop', '-4px');
            }

    });

   /* blue gradient background to be same height as video */
   function resizeVideo() {
     setTimeout(function() {
            var videoEleHeight = $('#vi').innerHeight();
            $('.careers-top').css('height', videoEleHeight);
       }, 500);  
   }
   resizeVideo();

   $(window).resize(function() {
        resizeVideo();
   });
}); // end of document ready
</script>
        
<!-- ie8 only -- fix video full width and height -->
<!--[if lt IE 9]>
<script>
$(document).ready(function() {
    $('#vi-contain').html('<img src="<?php echo $view->getThemePath()?>/videos/careers-video.jpg" style="width: 100%;">');
}); // end of document ready
</script>
<![endif]-->
      
      
<? $a = new Area('javascript');$a->display($c); ?>

