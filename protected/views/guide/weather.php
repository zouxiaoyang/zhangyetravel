<?php include Yii::app()->basePath."/../info.php";?>
<div class="breadcrumb1">
 <div class="container"><a href="">Home</a> » <a href="">Zhangye Travel Guide</a> » Overview</div>
</div>
<div class="zyt_overview">
 <div class="container">
  <h1>Zhangye Travel Guide</h1> 
<?php echo $nav; ?>
 </div>
 <div class="container">
  <div class="row zyt_main">
   <div class="col-md-8 col-sm-8 col-xs-12 zyt_left">
    <div class="hidden-xs"><img src="/images/index/zytg_banner.jpg" alt="" class="img-responsive" /></div>    
    <div class="zyt_mtext">
    	<h3>Zhangye Weather</h3>
        <p>As located in deep hinterland, Zhangye belongs to typical temperate continental climate, with long sunshine time, sufficient light and heat resources. The weather is cold in winter but warm in summer with four distinct seasons. The annual average precipitation is only about 130 mm and the average temperature is around 7℃（44.6℉）. Every year it rains more often in June to September which is the best season to travel in Zhangye and the moist air and cool weather will make your tour more comfortable.</p>
			
<div class="weather-now">
		<?php echo $week['DATE'];?>
		<p><img src="http://l.yimg.com/a/i/us/we/52/<?php echo $week['CODE'];?>.gif"/><br /></p>
		<b>Current Conditions:</b><br />
		<?php echo $week['TEXT'],' ',$week['TEMP']; ?>&nbsp;<?php echo $week_1['TEMPERATURE'];?><br/>

		<?php echo 'sunrise : ',$week_sun['SUNRISE'],'<br/>','sunset : ',$week_sun['SUNSET']; ?>
		<br/>
		<?php echo 'wind speed : ',$week_wind['SPEED'].'km/h','<br/>','humidity : ',$week_humidity['HUMIDITY'].'%'; ?>

</div>

		<table class="weather-block">
        	<tr>
            	<th>Day</th>
                <th>High/Low</th>
                <th>Cond</th>
                <th></th>
            </tr>
			<?php 
				$ii=1;foreach($res as $v){
			?>
				<tr><td><?php echo $v['DAY'];?>, <?php echo $v['DATE'];?></td>
				<td>High: <?php echo $v['HIGH'];?>,Low: <?php echo $v['LOW'];?></td>
				<td><img src="http://l.yimg.com/a/i/us/we/52/<?php echo $v['CODE'];?>.gif"/></td>
				<td><?php echo $v['TEXT'];?></td></tr>
			<?php } ?>
		</table>
        <div class="clear"></div>

        <h5>Historical Monthly Avg of Zhangye Climate (1971-2000)</h5>

		<table class="weather-table train-table">
    <tr>
    	<th></th>
        <th>Jan</th>
        <th>Feb</th>
        <th>Mar</th>
        <th>Apr</th>
        <th>May</th>
        <th>Jun</th>
        <th>Jul</th>
        <th>Aug</th>
        <th>Sep</th>
        <th>Oct</th>
        <th>Nov</th>
        <th>Dec</th>
    </tr>
    <tr>
    	<td>Average Temp(℉)</td>
        <td>15.44</td>
        <td>22.64</td>
        <td>35.6</td>
        <td>49.82</td>
        <td>60.44</td>
        <td>67.1</td>
        <td>70.7</td>
        <td>68.54</td>
        <td>58.28</td>
        <td>44.42</td>
        <td>30.2</td>
        <td>18.68</td>
    </tr>
    <tr>
    	<td>Average High Temp(℉)</td>
        <td>32.18</td>
        <td>38.48</td>
        <td>50</td>
        <td>64.22</td>
        <td>74.3</td>
        <td>80.96</td>
        <td>84.74</td>
        <td>82.76</td>
        <td>73.76</td>
        <td>61.34</td>
        <td>46.4</td>
        <td>35.06</td>
    </tr>
    <tr>
    	<td>Average Low Temp(℉)</td>
        <td>2.84</td>
        <td>10.04</td>
        <td>23.36</td>
        <td>35.96</td>
        <td>46.04</td>
        <td>52.88</td>
        <td>57.56</td>
        <td>55.94</td>
        <td>46.04</td>
        <td>32.18</td>
        <td>19.58</td>
        <td>7.34</td>
    </tr>
    <tr>
    	<td>Average Rainfall(mm)</td>
        <td>1.4</td>
        <td>1.2</td>
        <td>3.8</td>
        <td>4.8</td>
        <td>11.7</td>
        <td>24.1</td>
        <td>29.6</td>
        <td>29.2</td>
        <td>16.6</td>
        <td>4.6</td>
        <td>2.0</td>
        <td>1.4</td>
    </tr>
</table>

		<table class="weather-table train-table">
    <tr>
    	<th></th>
        <th>Jan</th>
        <th>Feb</th>
        <th>Mar</th>
        <th>Apr</th>
        <th>May</th>
        <th>Jun</th>
        <th>Jul</th>
        <th>Aug</th>
        <th>Sep</th>
        <th>Oct</th>
        <th>Nov</th>
        <th>Dec</th>
    </tr>
    <tr>
    	<td>Average Temp(℃)</td>
        <td>-9.2</td>
        <td>-5.2</td>
        <td>2.0</td>
        <td>9.9</td>
        <td>15.8</td>
        <td>19.5</td>
        <td>21.5</td>
        <td>20.3</td>
        <td>14.6</td>
        <td>6.9</td>
        <td>-1.0</td>
        <td>-7.4</td>
    </tr>
    <tr>
    	<td>Average High Temp(℃)</td>
        <td>0.1</td>
        <td>3.6</td>
        <td>10.0</td>
        <td>17.9</td>
        <td>23.5</td>
        <td>27.2</td>
        <td>29.3</td>
        <td>28.2</td>
        <td>23.2</td>
        <td>16.3</td>
        <td>8.0</td>
        <td>1.7</td>
    </tr>
    <tr>
    	<td>Average Low Temp(℃)</td>
        <td>-16.2</td>
        <td>-12.2</td>
        <td>-4.8</td>
        <td>2.2</td>
        <td>7.8</td>
        <td>11.6</td>
        <td>14.2</td>
        <td>13.3</td>
        <td>7.8</td>
        <td>0.1</td>
        <td>-6.9</td>
        <td>-13.7</td>
    </tr>
    <tr>
    	<td>Average Rainfall(mm)</td>
        <td>1.4</td>
        <td>1.2</td>
        <td>3.8</td>
        <td>4.8</td>
        <td>11.7</td>
        <td>24.1</td>
        <td>29.6</td>
        <td>29.2</td>
        <td>16.6</td>
        <td>4.6</td>
        <td>2.0</td>
        <td>1.4</td>
    </tr>
</table>

        
    </div>    
   </div>
   <div class="col-md-4 col-sm-4 col-xs-12 zyt_right hidden-xs">
    <p class="zyt_right_tit">BEST ZHANGYE TOUR PACKAGES</p>
	<?php foreach($ress as $v){ ?>
		<div class="zyt_right_top1">
		 <p class="zyt_right_top1img"><img src="<?php echo '/'.$v['filedir'].$v['pic'];?>" alt="<?php echo $v['name'];?>"  width="300" height="180" class="img-responsive"/></p>
		  <div class="zyt_right_top2">
		  <p class="zyt_right_txt1"><a href="<?php echo Yii::app()->createUrl('packageList/index', array('packageid'=>$v['id'],'title'=>strtolower(str_replace(' ','-',$v['name']))));?>"><?php echo $v['name'];?></a></p>
		  <p class="zyt_right_but1"><a href="<?php echo Yii::app()->createUrl('packageList/index', array('packageid'=>$v['id'],'title'=>strtolower(str_replace(' ','-',$v['name']))));?>"><img src="/images/index/zty_ovbut1.jpg" alt=""/></a></p></div>
		</div>
	<?php } ?>
   </div>
  </div>
 </div>
</div>