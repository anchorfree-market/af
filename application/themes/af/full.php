<?php $view->inc('elements/header.php');  ?>
        <?
            $a = new Area('Sticky Contact Us');
            $a->display($c);
        ?>

<section class="section section-contact-sticky bg--green hidden-xs">
        <div class="container relative">
            <div class="row">
                <div class="col-md-12">
                    <a href="mailto:advertise@anchorfree.com" title="advertise@anchorfree.com">For more information about advertising, <span class="strong">contact us.</span></a>
                    <a href="#" class="close-sticky"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
</section> <!-- .section-featured -->

<section class="section section-target">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>User Affinity</h4>
                </div>

                <div class="col-sm-4 col-md-4 col-md-offset-4 col-sm-offset-4 relative">
                    <div class="target">
                        <ul class="target-list">
                            <li class="target target--travelers">
                                Travelers
                            </li>
                            <li class="target target--world">
                                World Citizens
                            </li>
                            <li class="target target--privacy">
                                Privacy-minded individuals
                            </li>
                            <li class="target target--content">
                                Content Enthusiasts
                            </li>
                        </ul>
                        
                    </div>

                </div>

                <div class="col-sm-12 col-md-8 col-md-offset-2">

                </div>

                <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <p class="text-center">The AnchorFree Platform can put your brand in front of 25 million active monthly users on the Web and mobile devices. Almost every person with a computer or a mobile phone uses a Wi-Fi network. Hotspot Shield, the most popular privacy app in the world, reaches virtually every demographic segment of a technically savvy/content hungry population.</p>
                    <p class="text-center">Whether you are trying to reach expats or travelers, The AnchorFree Platform is your ideal destination.</p>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .wrapper -->
</section> <!-- .section-who -->

 <?php $view->inc('elements/footer.php'); ?>