<?php $view->inc('elements/header.php');  ?>
<h1>Careers Page</h1>

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

