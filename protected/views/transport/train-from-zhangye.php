<div class="breadcrumb1">
  <div class="container"><a href="">Home</a> » <a href="">Zhangye Travel Guide</a> » Transport</div>
</div>
<div class="zyt_overview">
  <div class="container">
    <h1>Zhangye Travel Guide</h1>
    <?php echo $nav;?> </div>
  <div class="container">
    <div class="row zyt_main">
      <div class="col-md-8 col-sm-8 col-xs-12 zyt_left">
        <div class="hidden-xs"><img src="/images/index/zytg_banner.jpg" alt="" class="img-responsive"/></div>
        <h3 style="margin-top:30px;">Train from Zhangye</h3>
        <table  class="train-table">
          <tr>
            <th scope="col">Train Number</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Dept Time</th>
            <th scope="col">Arr.Time</th>
            <th scope="col">Travel Time </th>
            <th scope="col">Soft<br />
              Sleeper</th>
            <th scope="col">Hard<br />
              Sleeper </th>
            <th scope="col">First/Second<br />
              Class Seat</th>
          </tr>
		  <?php for($i=1;$i<count($transinfo);$i++){
				 list($train_no,$from,$to,$dept,$arrive_time,$travel_time,$soft,$hard,$first_second) = explode(',',$transinfo[$i]);
			?>
			  <tr>
				<td><?php echo $train_no;?></td>
				<td><?php echo $from;?></td>
				<td><?php echo $to;?></td>
				<td><?php echo $dept;?></td>
				<td><?php echo $arrive_time;?></td>
				<td><?php echo $travel_time;?></td>
				<td class="soft"><?php echo $soft;?></td>
				<td class="soft"><?php echo $hard;?></td>
				<td class="soft"><?php echo $first_second;?></td>
			  </tr>
		<?php } ?>
        </table>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 zyt_right hidden-xs">
        <p class="zyt_right_tit">BEST ZHANGYE TOUR PACKAGES</p>
        <?php foreach($res as $v){ ?>
        <div class="zyt_right_top1">
          <p class="zyt_right_top1img"><img src="<?php echo '/'.$v['filedir'].$v['pic'];?>" alt="<?php echo $v['name'];?>"  width="300" height="180" class="img-responsive"/></p>
          <div class="zyt_right_top2">
            <p class="zyt_right_txt1"><a href="<?php echo Yii::app()->createUrl('packageList/index', array('packageid'=>$v['id'],'title'=>strtolower(str_replace(' ','-',$v['name']))));?>"><?php echo $v['name'];?></a></p>
            <p class="zyt_right_but1"><a href="<?php echo Yii::app()->createUrl('packageList/index', array('packageid'=>$v['id'],'title'=>strtolower(str_replace(' ','-',$v['name']))));?>"><img src="/images/index/zty_ovbut1.jpg" alt=""/></a></p>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
