<div class="breadcrumb">
 <div class="container"><a href="">Home</a> » Silkroad Tours</div>
</div>
<div class="container rm_text" style="border:none">
 <h1>China Silk Road Tours</h1>
 <h6 style=" padding-bottom:0">The Silk Road was the most important commercial trade route in ancient China and the main road in political, economic and cultural exchanges between the east and west. 
In June 2014, the Silk Road has been listed as a UNESCO World Cultural Heritage site.
There are 22 Chinese scenic spots in the list and they are distributed in Shaanxi, Gansu, Xinjiang and Henan province. The Silk Road tours we designed carefully cover most of important scenic spots like Xi’an Terra Cotta Warriors, Dunhuang Mogao Grottoes, Jiayuguan Great Wall, Turpan Bezeklik Thousand-Buddha Caves, Xinjiang Museum and etc. In these routes, you can not only experience distinctive culture, natural spots but also see the prosperity and development of modern civilization. Beyond that, you can also customize your own Silk Road trip with our help.</h6>
</div>
<div class="zyt_bg">
 <div class="container">
 <?php foreach($res as $v){ ?>
	  <div class="row zyt_itnbg">
	   <div class="col-md-4 col-sm-4 col-xs-12 zyt_itnimg" style="padding:0;">
		<a href="<?php echo Yii::app()->createUrl('packageList/index',array('packageid'=>$v['id'],'title'=>strtolower(str_replace(' ','-',$v['name']))));?>"><img alt="<?php echo $v['name'];?>" src="<?php echo '/'.$v['filedir'].$v['pic'];?>" class="img-responsive"></a>
	   </div>
	   <div class="col-md-6 col-sm-6 zyt_itnmid">
		<h3><a href="<?php echo Yii::app()->createUrl('packageList/index',array('packageid'=>$v['id'],'title'=>strtolower(str_replace(' ','-',$v['name']))));?>"><?php echo $v['name'];?></a></h3>
		<div class="hidden-xs ">
		<?php 
			$arr_attractions_first_part = explode('***',trim($v['attractions']));
			$attractions_first_part = $arr_attractions_first_part[0];
			$arr_recomend_reason = explode('***',trim($v['recommand_reason']));
			$arr_recomend_reason = array_filter($arr_recomend_reason);
		?>
		<p><?php echo $attractions_first_part;?></p>
		<ul>
			<?php foreach($arr_recomend_reason as $v1){ ?>
					<li><?php echo $v1;?></li>
			<?php } ?>
		</ul>
		</div>
	   </div>
	   <div class="col-md-2 col-sm-2 col-xs-12 zyt_price hidden-xs">
		<p class="zyt_price3"><?php echo $v['days'];?> Days from <span>$<?php $arr_price_serialize = unserialize($v['price_serialize']);echo $arr_price_serialize['0']; ?>pp</span></p>
		<p class="zyt_price1"><?php echo $v['tour_intro']; ?></p>
		<p class="zyt_price2"><a href="<?php echo Yii::app()->createUrl('packageList/index',array('packageid'=>$v['id'],'title'=>strtolower(str_replace(' ','-',$v['name']))));?>">View this itinerary<span></span></a></p>
	   </div>
	  </div>
 <?php }  ?>
 </div>
</div>