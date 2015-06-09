       <footer class="footer">
                <div class="container">
                    
                        <div class="col-md-12"><? $a = new GlobalArea('Full Width Area');$a->display($c); ?></div>
                        <div class="col-md-3 col-sm-3 col-xs-6 nav footer-nav"><? $a = new GlobalArea('Footer Navigation');$a->display($c); ?></div>
                        <div class="col-md-3 col-sm-3 col-xs-6 nav footer-nav"><? $a = new GlobalArea('Footer Navigation2');$a->display($c); ?></div>
                        <div class="recent-news col-md-6 col-sm-6 hidden-xs"><? $a = new GlobalArea('Footer News');$a->display($c); ?></div>
                    
                    	<div class="col-md-12"><? $a = new GlobalArea('Full Width Area');$a->display($c); ?></div>
                    
                        <div class="footer-copyright col-md-8 col-sm-6 col-xs-8"><? $a = new GlobalArea('Copyright');$a->display($c); ?></div>
                        <div class="col-md-4 col-sm-6 col-xs-3 pull-right"><? $a = new GlobalArea('Social Links');$a->display($c); ?></div>
                </div>
        </footer>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- only show bootstrap.min.js if isEditMode -->
    <?php $c = Page::getCurrentPage();
        if($c->isEditMode()) {} 
        else {
            echo "<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>"; 
        }
    ?>
    <!--<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>-->
    <?php 
        $URL = BASE_URL. $this->url($this->getCollectionObject()->cPath); 
        $themePath = $view->getThemePath();
        if(preg_match("/carriers/", $URL)) { // display script on carriers page
            echo "<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>";
            echo "<script type='text/javascript' src='".$themePath."/js/jquery.backstretch.min-ck.js'></script>";
            echo "<script type='text/javascript' src='".$themePath."/js/carriers.js'></script>";
            echo "<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js'></script>";
        }
        else if(preg_match("/advertise/", $URL)) { // display script on advertise page
            echo "<script type='text/javascript' src='//cdn.jsdelivr.net/countupjs/1.1.0/countUp.min.js'></script>";
            echo "<script type='text/javascript' src='".$themePath."/js/imageLens.min.js'></script>";
            echo "<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js'></script>";
        }
        else if(preg_match("/careers/", $URL) || preg_match("/jobs/", $URL)) {    // display script on careers page
            echo "<script src='//code.jquery.com/ui/1.11.4/jquery-ui.js'></script>";
        }
        else { // including press and about page
            echo "<script type='text/javascript' src='".$themePath."/js/jquery.backstretch.min-ck.js'></script>";
        }
    ?>
    </div>
    <? Loader::element('footer_required')?>
</body>
</html>