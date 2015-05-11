<?php $view->inc('elements/header.php');  ?>
<section class="careers-video top-section">
   <? $a = new Area('Top Video');$a->display($c); ?>
</section>
   <? $a = new Area('Open Position');$a->display($c); ?>
   <? $a = new Area('Our Values');$a->display($c); ?>
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


<?php if (!empty($_REQUEST['gh_jid'])) :?>
  <div id="grnhse_app"></div>
	<script src='https://app.greenhouse.io/embed/job_board/js?for=anchorfree'></script>

<?php else:?>
    <?php if (!empty($jobs)) :?>

      <?php $department = $jobs['departments']; ?>
      <div class="textBox_t1">
            <h3><?php echo $department[2]['name']?></h3>
            <?php foreach ($department[2]['jobs'] as $job): ?>
                    <p><strong><?php echo $job['title']?></strong><br />
                    <a href="<?php echo $job['absolute_url']?>">Full job description</a></p>
            <?php endforeach;?>
      </div>

            <div class="textBox_t1" style="margin-left: 40px;">
              <h3><?php echo $department[1]['name']?></h3>
              <?php foreach ($department[1]['jobs'] as $job): ?>
                      <p><strong><?php echo $job['title']?></strong><br />
                      <a href="<?php echo $job['absolute_url']?>">Full job description</a></p>
              <?php endforeach;?>
              <br />
              <h3><?php echo $department[0]['name']?></h3>
              <?php foreach ($department[0]['jobs'] as $job): ?>
                      <p><strong><?php echo $job['title']?></strong><br />
                      <a href="<?php echo $job['absolute_url']?>">Full job description</a></p>
              <?php endforeach;?>
            </div>
    <?php else:?>
      <h4>There are no open positions for now</h4>
    <?php endif;?>
<?php endif;?>


<?php $view->inc('elements/footer.php'); ?>
            <script>
$(document).ready(function() {
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
        
    /* ie8 only -- fix video full width and height */
   <!--[if lt IE 9]>
   <script>
   $(document).ready(function() {
        var videoRatio = 1.778;
        var objectEleWidth = $('#videoObject').innerWidth();
        var objectEleHeight = objectEleWidth / videoRatio;
        $('#videoObject').css('height', objectEleHeight);

         $(window).resize(function() {
            objectEleWidth = $('#videoObject').innerWidth();
             objectEleHeight = objectEleWidth / videoRatio;
             $('#videoObject').css('height', objectEleHeight);
         });
   }); // end of document ready
   </script>
    <![endif]-->
      
      
<? $a = new Area('javascript');$a->display($c); ?>

