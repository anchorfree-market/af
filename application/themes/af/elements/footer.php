       <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--
                        <ul class="nav footer-nav col-md-3">
                            <li><a title="Privacy" href="/~anchorj6/af/privacy">Product</a></li>
                            <li><a title="Terms" href="/~anchorj6/af/terms-of-service.php">Advertise</a></li>
                            <li><a title="We’are hiring!" href="/~anchorj6/af/jobs/">Carriers</a></li>
                            <li><a title="Help" href="/support.php">Press</a></li>
                        </ul>
                        <ul class="nav footer-nav col-md-3">
                            <li><a title="Privacy" href="/~anchorj6/af/privacy">About</a></li>
                            <li><a title="Terms" href="/~anchorj6/af/terms-of-service.php">We're Hiring</a></li>
                            <li><a title="We’are hiring!" href="/~anchorj6/af/jobs/">Learn More</a></li>
                            <li><a title="Help" href="/support.php">Contact Us</a></li>
                        </ul>
                        <div class="recent-news col-md-6">
                            <h5>Recent News</h5>
                            <ul>
                                <li>Nov 18, 2013<a href="#">Four in Five Travelers Fear Mobile Use of Unsecured Public Wi-Fi Exposes Their Personal Data to Cyberthreats, AnchorFree Survey Finds</a></li>
                                <li>Oct 29, 2013</li>
                            </ul>
                        </div>
                        -->  
                        <? $a = new GlobalArea('Footer Navigation');$a->display($c); ?>
                        <div class="recent-news col-md-6">
                            <? $a = new GlobalArea('Footer News');$a->display($c); ?>
                        </div>
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