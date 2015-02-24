       <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-justified footer-nav">
                            <li><a title="Privacy" href="/~anchorj6/af/privacy">Privacy</a></li>
                            <li><a title="Terms" href="/~anchorj6/af/terms-of-service.php">Terms</a></li>
                            <li><a title="We’are hiring!" href="/~anchorj6/af/jobs/">We’re hiring!</a></li>
                            <li><a title="Help" href="/support.php">Help</a></li>
                            <li><a title="Visit us" href="/~anchorj6/af/contact">Visit us</a></li>
                        </ul>
                        <div class="separator saperator-gradient"></div>
                        <p class="footer-copyright">Copyright &copy; 2015 AnchorFree, Inc. All Rights Reserved</p>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </footer>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- only show bootstrap.min.js if isEditMode -->
    <?php $c = Page::getCurrentPage();
        if($c->isEditMode()) {} 
        else {
            echo "<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>"; 
        }
    ?>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
    <?php 
        $URL = BASE_URL. $this->url($this->getCollectionObject()->cPath); 
        $themePath = $view->getThemePath();
        if(preg_match("/carriers/", $URL)) { // display script on carriers page
            echo "<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>";
            echo "<script type='text/javascript' src='".$themePath."/js/jquery.backstretch.min-ck.js'></script>";
            echo "<script type='text/javascript' src='".$themePath."/js/carriers.js'></script>";
        }
        else if(preg_match("/advertise/", $URL)) { // display script on advertise page
            echo "<script type='text/javascript' src='//cdn.jsdelivr.net/countupjs/1.1.0/countUp.min.js'></script>";
            echo "<script type='text/javascript' src='".$themePath."/js/imageLens.min.js'></script>";
        }
        else {}
    ?>
    </div>
    <? Loader::element('footer_required')?>
</body>
</html>