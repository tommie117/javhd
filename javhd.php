<?php

//
$link = $_POST['link'];
if (preg_match('#http://javhd.com/en/id/(.*)/(.*)#', $link, $IDJav)) {
    $content = $curl->get($IDJav[0]);
if (preg_match('#Unlock this scene#', $content)) {
    $html = $curl->post('https://secure.javhd.com/login/?back=javhd.com&path=&lang=en&nats=', 'login=#&password=123xxx&back=javhd.com&path=');
}
preg_match_all('#<a onclick="(.*)" href="(.*)"><span>(.*)</span>(.*)</a>#', $content, $download);

$data['like'] = $like;
$data['title'] = $title[1];

$HD = $curl->get($download[2][0]);
$HQ = $curl->get($download[2][1]);
$LOW = $curl->get($download[2][1]);
preg_match('#<a href="(.*)">(.*)</a>#',$HD,$linkHD);
preg_match('#<a href="(.*)">(.*)</a>#',$HQ,$linkHQ);
preg_match('#<a href="(.*)">(.*)</a>#',$HQ,$linkLOW);

$video['hd'] = $linkHD[1];
$video['hq'] = $linkHQ[1];
$video['low'] = $linkLOW[1];

echo $echodata = ' 


    <dl class="dl-horizontal">

        <dt>Watch Online</dt>
       <dd><!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Open</button><small> (Video Quality 720p)</small>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <center> <video id="video" width="100%" height="100%" preload="none" controls autoplay >
            <source src="' . $video['hq'] . '" >
        </video>
        <p class="text-center">Bạn đang xem video chất lượng 720p HQ. Click Download để coi video chất lượng cao hơn(Không cần tải về). </p>
          <p class="text-center">Hướng dẫn bỏ qua <strong>quảng cáo</strong> <a href="'.LOCALHOST.'guide#collapseTwo" target="_blank">ouo.io </a></p>
</center>
    </div>
    </div>
  </div>
  </dd>
  
<hr>
     <h4><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</h4>
<div id="download-buttons" class="btn-group btn-group-justified" role="group" aria-label="...">
                <div class="btn-group" role="group">
                  <a href="http://sh.st/st/1b8cb2e099a5380ebaceb17038152f6a/'.$video['hd'].'" target="_blank" id="download-720" class="btn btn-default"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> 1080p HD</a>
                </div>
                <div class="btn-group" role="group">
                  <a href="http://sh.st/st/1b8cb2e099a5380ebaceb17038152f6a/'.$video['hq'].'" target="_blank" id="download-480" class="btn btn-default"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> 720 HQ</a>
                </div>
                <div class="btn-group" role="group">
                  <a href="http://sh.st/st/1b8cb2e099a5380ebaceb17038152f6a/'.$video['low'].'" target="_blank" id="download-240" class="btn btn-default"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> 480p MED</a>
                </div>
              </div>
       ';
}
