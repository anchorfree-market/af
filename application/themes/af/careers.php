<?php $view->inc('elements/header.php');  ?>
<?php if (empty($_REQUEST['gh_jid'])): ?>
<div class="careers-video fullfadeblue top-section">
    <div id="vi">
        <? $a = new Area('Top Video');$a->display($c); ?>
        <div class="container careers-top">
        <div class="col-md-12">
        <div class='col-sm-6 col-md-6 pull-left'></div>
        <div class="col-sm-6 col-md-6 wrapper txt-white">
            <h1 style="text-align:right;"><? $a = new Area('Top Video Title');$a->display($c); ?></h1>
            <h3 class="hidden-xs" style="text-align:right;"><? $a = new Area('Top Video Description');$a->display($c); ?></h3><br>
            <? $a = new Area('Top Video CTA');$a->display($c); ?>
        </div>
        <div class="clearfix"></div>
        </div>
    </div>
   </div>
</div>
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
        <div class="col-md-4 align-left-imp text-white"><? $a = new Area('Value 4');$a->display($c);?></div>
        <div class="col-md-4 align-left-imp text-white"><? $a = new Area('Value 5');$a->display($c);?></div>
        <div class="col-md-4 align-left-imp text-white"><? $a = new Area('Value 6');$a->display($c);?></div>
        <div class="col-md-12 text-white marginbot40"><? $a = new Area('Value Area');$a->display($c);?></div>
        <div class="col-md-12 align-center-imp marginbot40"><? $a = new Area('Value CTA');$a->display($c);?></div>
    </div>
</div>
<div class="wrapper marginbot40">
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
        <div class="col-md-4 align-left-imp"><? $a = new Area('Perks 7');$a->display($c);?></div>
        <div class="col-md-4 align-left-imp"><? $a = new Area('Perks 8');$a->display($c);?></div>
        <div class="col-md-4 align-left-imp"><? $a = new Area('Perks 9');$a->display($c);?></div>
        <div class="col-md-12 marginbot40"><? $a = new Area('Perks Area');$a->display($c);?></div>
        <div class="col-md-12 align-center-imp marginbot40"><? $a = new Area('Perks CTA');$a->display($c);?></div>
    </div>
</div>
<div class=" wrapper fullfadeblue">
    <div class="container">
        <div class="col-md-12 text-white"><h1 class="align-center-imp text-white"><? $a = new Area('Stats Title');$a->display($c);?></h1></div>
        <div class="col-md-12 align-center-imp marginbot20 text-white"><p class="align-center-imp text-white"><? $a = new Area('Stats Content');$a->display($c);?></p>			</div>
   </div>
</div>
<?php endif; ?>
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
<?php if (empty($_REQUEST['gh_jid'])): ?>
<div class="container">
    <a name="careerslist"></a>
    <div class="col-md-12"><h2 class="align-center-imp"><? $a = new Area('Positions Title');$a->display($c);?></h2></div>
</div>
<?php endif; ?>
<div class="container">
     <?php if (!empty($_REQUEST['gh_jid'])) :?>
        <div class="col-md-5 hidden-xs"><? $a = new Area('Careers Job Listing Side Nav');$a->display($c);?></div>
        <div class="col-md-7 margin-center">
    	<div id="grnhse_app"></div>
        <script src='https://app.greenhouse.io/embed/job_board/js?for=anchorfree'></script>
    <?php else:?>
    <?php if (!empty($jobs)) :?>
        <?php $department = $jobs['departments']; ?>
        <div id="careers-accordion" class="col-md-12">
            <h3><?php echo $department[2]['name']?> <span class="department-jobs-count"><?php echo count($department[2]['jobs']) ?></span>&nbsp;&nbsp;</h3>
            <div class="textBox_t1">
                <div>
                    <?php foreach ($department[2]['jobs'] as $job): ?>
                    <p><a href="<?php echo "/jobs/?gh_jid=" . $job['id']?>"><span><?php echo $job['title']?></span> - <?php echo $job['location']['name']?>
                            <span class="learn-more">LEARN MORE</span></a></p>
                    <?php endforeach;?>
                </div>
            </div>
            <h3><?php echo $department[1]['name']?> <span class="department-jobs-count"><?php echo count($department[1]['jobs']) ?></span>&nbsp;&nbsp;</h3>
            <div class="textBox_t1">
                <div>
                    <?php foreach ($department[1]['jobs'] as $job): ?>
                    <p><a href="<?php echo "/jobs/?gh_jid=" . $job['id']?>"><span><?php echo $job['title']?></span> - <?php echo $job['location']['name']?>
                            <span class="learn-more">LEARN MORE</span></a></p>
                    <?php endforeach;?>
                </div>
            </div>
            
            <h3><?php echo $department[0]['name']?><span class="department-jobs-count"><?php echo count($department[0]['jobs']) ?></span>&nbsp;&nbsp;</h3>
            <div class="textBox_t1">
                <div>
                    <?php foreach ($department[0]['jobs'] as $job): ?>
                    <p><a href="<?php echo "/jobs/?gh_jid=" . $job['id']?>"><span><?php echo $job['title']?></span> - <?php echo $job['location']['name']?>
                            <span class="learn-more">LEARN MORE</span></a></p>
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
<script>
$(document).ready(function() {
    // Multi Accordion
    (function ($) {
        $.fn.multiAccordion = function() {
            $(this).addClass("ui-accordion ui-accordion-icons ui-widget ui-helper-reset")
              .find("h3")
                .addClass("ui-accordion-header ui-helper-reset ui-state-default ui-corner-top ui-corner-bottom")
                .hover(function() { $(this).toggleClass("ui-state-hover"); })
                .click(function() {
                  $(this)
                    .toggleClass("ui-accordion-header-active ui-state-active ui-state-default ui-corner-bottom")
                    .find("> .ui-icon").toggleClass("ui-icon-triangle-1-e ui-icon-triangle-1-s").end()
                    .next().toggleClass("ui-accordion-content-active").slideToggle();
                  return false;
                })
                .next()
                  .addClass("ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom")
                  .css("display", "block")
                  .hide()
                .end().trigger("click");
        };
    })(jQuery);

    $('#careers-accordion').multiAccordion(); // call to mutli accordion
    
    /* Accordion 
    $('#careers-accordion').accordion({
        heightStyle: "content",
        collapsible: true
    });
    */
   
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
    $('#vi-contain').html('<img src="/application/files/9014/3215/3041/Careers-heroposter.jpg" style="width: 100%;">');
}); // end of document ready
</script>
<![endif]-->      
<? $a = new Area('javascript');$a->display($c); ?>