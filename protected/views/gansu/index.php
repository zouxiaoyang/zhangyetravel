<div class="breadcrumb">
 <div class="container"><a href="">Home</a> » Gansu Tours</div>
</div>
<div class="container rm_text" style="border:none">
 <h1>China Gansu Tours</h1>
 <h6 style="padding-bottom:0">Gansu Province is located in the northwest of China. With a long history and brilliant cultures, Gansu is abundantly endowed with cultural relics and natural scenery. Gansu Province is a key place and a golden section of the Silk Road. On this patch of land, scatter numerous culture landscapes, such as Mogao Grottoes in Dunhuang, the Jiayuguan Pass, Bingling Thousand Buddha Caves in Lanzhou, etc. If you would like to ramble along the ancient Silk Road and experience the long river of history, Gansu Province is a good choice to travel. There are also many nature scenery scattering in this vast land, such as the Zhangye Danxia Landform, Yadan Landform in Dunhuang, Echoing-Sand Mountain and Crescent Lake etc. Now we are offering the 3-7 days China Gansu tours with best price. If you couldn't find your favorite travel routes in our ready-made itineraries, just tell us and we will customize a unique trip for you.</h6>
</div>
<div class="zyt_bg">
 <div class="container">
 <?php foreach($res as $v){ ?>
	  <div class="row zyt_itnbg">
	   <div class="col-md-4 col-sm-4 col-xs-12 zyt_itnimg" style="padding:0;">
		<a href="<?php echo Yii::app()->createUrl('packageList/index',array('packageid'=>$v['id'],'title'=>strtolower(str_replace(' ','-',$v['name']))));?>"><img alt="<?php echo $v['name'];?>" src="<?php echo '/'.$v['filedir'].$v['pic'];?>"  class="img-responsive"></a>
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