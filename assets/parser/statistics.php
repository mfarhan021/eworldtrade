<style>
    .main-progress{background:#fff;width:48.5%;margin:20px auto;position:relative;padding:30px 35px 40px}.main-progress p{display:inline-block;margin:0;color:#000;font-weight:500}.main-progress p.top-left{float:left}.main-progress p.top-right{float:right;margin-top:0}.main-progress .progress{width:100%;height:35px;background:#a0a7ad;border-radius:50px;box-shadow:inset 0 4px 11px #616568;border:1px solid #65696c;margin-bottom:10px}.main-progress p.bottom-left{float:left;margin-left:15px}.top{display:inline-block;width:100%;padding:0 15px}.main-progress .progress-bar{background-color:#7bd24f!important;width:40%;color:#000;font-weight:600;font-size:15px;line-height:36px;text-align:right;border-radius:50px;padding:0 20px}@media (max-width:767px){.main-progress{width:100%;margin:10px auto;padding:20px 35px 30px}.main-progress p{font-size:11px}.main-progress .progress{height:30px}.main-progress .progress-bar{font-size:12px;line-height:30px}}
</style>



<?php
        $start = 450;
        $end = 500;
        $my_file = 'statistics.txt';
        $data = file_get_contents($my_file);
        if ((0 == filesize( $my_file )) || ($data>=($end-1))  )
        {
            $data = $start;
        }
        else
        { $data = $data+1; }
       
        $handle = fopen($my_file, 'w');
        fwrite($handle, $data);
        $availablecount = file_get_contents($my_file);
      
        $available=($end-$availablecount);
        $watching=rand(100,200);
        $sold=(($availablecount+30)-$start);
        $percent=round(($availablecount/$end)*100);
        fclose($handle);
    ?>
    
    
    
    <div class="main-progress">
          <div class="top">
               <p class="top-left"><?php echo $watching ?> Watching</p>
        <p class="top-right"><?php echo $sold ?> Sold in the Last Hour</p>
          </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $percent ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percent ?>%">
            <?php echo $availablecount;?> of <?php echo $end;?> Sold
        </div>
</div>
<p class="bottom-left"><?php echo $available ?> Available</p>
 </div>