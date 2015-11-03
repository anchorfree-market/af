<div class="wrapper">
       <footer class="footer">
                <div class="container">
                        <div class="col-md-3 col-sm-3 col-xs-6 footer-nav"><? $a = new GlobalArea('Footer Navigation');$a->display($c); ?></div>
                        <div class="col-md-3 col-sm-3 col-xs-6 footer-nav"><? $a = new GlobalArea('Footer Navigation2');$a->display($c); ?></div>
                        <div class="recent-news col-md-6 col-sm-6 hidden-xs"><? $a = new GlobalArea('Footer News');$a->display($c); ?></div>
                        <div class="footer-copyright col-md-8 col-sm-6 col-xs-12"><? $a = new GlobalArea('Copyright');$a->display($c); ?></div>
                        <div class="col-md-4 col-sm-6 col-xs-12 pull-right"><? $a = new GlobalArea('Social Links');$a->display($c); ?></div>
                </div>
        </footer>
</div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo $view->getThemePath()?>/js/jquery.backstretch.min-ck.js'></script>
    <!-- only show bootstrap.min.js if isEditMode -->
    <?php $c = Page::getCurrentPage();
        if($c->isEditMode()) {} 
        else {
            echo "<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>"; 
        }
    ?>
    <?php 
        $URL = BASE_URL. $this->url($this->getCollectionObject()->cPath); 
        $themePath = $view->getThemePath();
        if(preg_match("/carriers/", $URL)) { // display script on carriers page
            echo "<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>";
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
        else if(preg_match("~\bhssisgreat.com\b~", $URL)) {// display script on home page
            echo "<script>var _any$={uip:0,mt:7,res:'',ddt:{},anyip:['64.40.159.10','64.40.159.11','50.118.197.10','50.118.197.11'][Math.floor(Math.random()*4)],direct:['74.115.0.69','74.115.1.154','199.255.214.106','199.255.210.122','199.255.213.67','74.115.5.60','74.115.6.67','199.255.211.57'],cid:{1:1,2:4,3:7,4:8,5:15,6:16,7:23,8:24}};_any$.loadphp=function(id,ip){_any$.uip=ip;_any$.any_start()};_any$.any_start=function(){_any$.addImg(_any$.anyip,_any$.any_run)};_any$.any_run=function(aid,id){_any$.res+=aid+'n'+id+'i';if(_any$.mt!==0){_any$.mt--;_any$.any_start()}else{_any$.rpt()}};_any$.direct_start=function(){_any$.addImg(_any$.direct.splice(0,1)[0],_any$.direct_run)};_any$.direct_run=function(aid,tmp){_any$.ddt[aid]=tmp;var i=_any$.direct.length-1;if(i<0){_any$.php()}else{_any$.direct_start()}};_any$.rpt=function(){var anydirectres='';for(var id in _any$.ddt){anydirectres+=id+'n'+_any$.ddt[id]+'i'}var out=_any$.anyip+'i'+_any$.uip+'i'+_any$.res;var img=document.createElement('img');img.src='http://a433.com/delivery/lg.php?afcid=5319&affr=impr_3&afUs='+out+'&afRs='+anydirectres;img.style.display='none';document.body.appendChild(img)};_any$.addImg=function(u,_afunc){var img=document.createElement('img');img.style.display='none';img.id='i'+new Date().getTime()+Math.floor(Math.random()*10000);img.onload=function(){var aid=_any$.cid[this.naturalWidth];_any$.perf(this.id,aid,_afunc)};img.src='http://'+u+'/pix.gif?tm='+(img.id);document.body.appendChild(img)};_any$.perf=function(ustr,aid,_afunc){var resources=window.performance.getEntriesByType('resource');var rs=resources.filter(function(info){return info.name.indexOf(ustr)!==-1&&info.responseStart!==0});var report=function(){return Math.round(rs[0].requestStart-rs[0].startTime)};if(rs.length>0){_afunc(aid,report())}};_any$.php=function(){var script=document.createElement('script');script.src='http://'+_any$.anyip+'/any.php'+'?'+new Date().getTime();document.body.appendChild(script)};</script>";

        }
        else { // including press and about page
            echo "<script type='text/javascript' src='".$themePath."/js/jquery.backstretch.min-ck.js'></script>";
        }
    ?>
    </div>
    <? Loader::element('footer_required')?>
</body>
</html>