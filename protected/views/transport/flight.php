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
            <h3  style="margin-top:40px;">Flight from Zhangye </h3>
         	<table  class="train-table">
         	<tr>
            	<th>Flight Number</th>
                <th>Departs</th>
                <th>Arrives</th>
                <th>Dept Time</th>
                <th>Arr.Time</th>
                <th>Flight type</th>
                <th>Weekly shift</th>
            </tr>
            <tr>
            	<td>GS7564</td>
                <td>Zhangye</td>
                <td>Xi'an</td>
                <td>15:50:00</td>
                <td>18:40:00</td>
                <td>1 Stop </td>
                <td>Every Day</td>
            </tr>
             <tr>
            	<td>GS7564</td>
                <td>Zhangye</td>
                <td>Lanzhou</td>
                <td>15:50:00</td>
                <td>16:50:00</td>
                <td>Direct Flight </td>
                <td>Every Day</td>
            </tr>
             <tr>
            	<td>MU7332</td>
                <td>Zhangye</td>
                <td>Hefei</td>
                <td>23:40:00</td>
                <td>1:40:00</td>
                <td>Direct Flight </td>
                <td>Every Tue & Sat</td>
            </tr>
            <tr>
            	<td>GS7564</td>
                <td>Zhangye</td>
                <td>Beijing</td>
                <td>15:50:00</td>
                <td>22:50:00</td>
                <td>1 Stop</td>
                <td>Every Day</td>
            </tr>
            <tr>
            	<td>GS7564</td>
                <td>Zhangye</td>
                <td>Shanghai</td>
                <td>15:50:00</td>
                <td>22:50:00</td>
                <td>1 Stop</td>
                <td>Every Day</td>
            </tr>
             <tr>
            	<td>GS7564</td>
                <td>Zhangye</td>
                <td>Chongqing</td>
                <td>15:50:00</td>
                <td>21:20:00</td>
                <td>1 Stop</td>
                <td>Every Day</td>
            </tr>
            <tr>
            	<td>GS7564</td>
                <td>Zhangye</td>
                <td>Chengdu</td>
                <td>15:50:00</td>
                <td>22:25:00</td>
                <td>1 Stop</td>
                <td>Every Day</td>
            </tr>
         </table>
        	<h3>Flight to Zhangye </h3>
            <table  class="train-table">
         	<tr>
            	<th>Flight Number</th>
                <th>Departs</th>
                <th>Arrives</th>
                <th>Dept Time</th>
                <th>Arr.Time</th>
                <th>Flight type</th>
                <th>Weekly shift</th>
           </tr>
            <tr>
            	<td>GS7565</td>
                <td>Lanzhou</td>
              <td>Zhangye</td>
              <td>14:05:00</td>
              <td>15:10:00</td>
              <td>Direct Flight</td>
              <td>Every Day</td>
            </tr>
             <tr>
            	<td>GS7565</td>
                <td>Xi'an</td>
                <td>Zhangye</td>                
                <td>12:20:00</td>
                <td>15:10:00</td>
                <td>1 Stop</td>
                <td>Every Day</td>
            </tr>
             <tr>
            	<td>MU7331</td>
                <td>Hefei</td>
                <td>Zhangye</td>
                <td>19:20:00</td>
                <td>22:00:00</td>
                <td>Direct Flight </td>
                <td>Every Tue & Sat</td>
            </tr>
             <tr>
            	<td>MU2129</td>
                <td>Beijing</td>
                <td>Zhangye</td>
                <td>7:15:00</td>
                <td>15:10:00</td>
                <td>1 Stop</td>
                <td>Every Day</td>
            </tr>
             <tr>
            	<td>MU2335</td>
                <td>Shanghai</td>
                <td>Zhangye</td>
                <td>7:45:00</td>
                <td>15:10:00</td>
                <td>1 Stop</td>
                <td>Every Day</td>
            </tr>
             <tr>
            	<td>3U8513</td>
                <td>Chongqing</td>
                <td>Zhangye</td>
                <td>8:30:00</td>
                <td>15:10:00</td>
                <td>1 Stop</td>
                <td>Every Day</td>
            </tr>
            <tr>
            	<td>MU2741</td>
                <td>Chengdu</td>
                <td>Zhangye</td>
                <td>7:40:00</td>
                <td>15:10:00</td>
                <td>1 Stop</td>
                <td>Every Day</td>
            </tr>
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
