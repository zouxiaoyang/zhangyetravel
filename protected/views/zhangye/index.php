<div class="breadcrumb">
 <div class="container"><a href="">Home</a> » Zhangye Tours</div>
</div>
<div class="container rm_text" style="border:none">
 <h1>China Zhangye Tour</h1>
<h6 style="padding-bottom:10px;">Zhangye is located in the border of Gansu, Qinghai and Inner Mongolia. It is the crucial site for the ancient Silk Road. Now, it is famous for Zhangye Danxia Landform. Zhangye is a famous historical and cultural city in China with profound cultural background and many historic sites, like the Big Buddha Temple, Mati Temple, Zhenyuan Tower, the Wood Pagoda and etc. Zhangye owns magnificent natural spots and diverse landforms with the famous Zhangye danxia mountains, glacier snow mountains, forest steppe, wetland desert and etc.
Zhangye tour develops very late but grows rapidly. There is one 5-star, seven 4-star and many 3-star hotels in the city. You can travel to Zhangye mainly by train or flight as it is truly convenient.</h6>
<h6 style=" padding:0 0 10px 0; margin:0;">
	We are offering various Zhangye city & side tour packages with best price.
These trip ideas are designed by our specialists, who’ve travelled the routes themselves and have a guidebook-like knowledge of Zhangye. Use these ideas to give you a starting point, some inspiration, as you decide what you want to do on your trip to China. Then speak to us and we’ll start to bring your trip to life to suit your tastes. Do not leave Zhangye without visiting here! 
</h6>
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