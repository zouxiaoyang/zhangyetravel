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
    <div class="hidden-xs"><img src="/images/index/zytg_banner.jpg" alt="" class="img-responsive"/></div>
    <div class="zyt_mtext"> 
    <h3>Zhangye Overview</h3>
    <p>Located in the middle of Hexi Corridor, Zhangye City dominates one area and five counties: Ganzhou Area, Linze, Gaotai, Shandan, Minle and Su’nan counties. The total area is 42 thousand square kilometers and the total population is 1.28 million people. There are Han, Hui, Tibetan, Mongolian, Yugu and other 33 nationalities, among which Yugu Nationality is the minority only inhabited in Gansu. It’s an Excellent Tourism City of China and national historical and cultural city now.</p>
    <p>Zhangye was called as Ganzhou in ancient time. As the “arm” in Zhang Period to the communication with western regions in Western Han Dynasty, Zhangye got its name and has always been praised as “the Yangtze River Region in the frontier” and ‘the golden Zhangye”. Zhangye is long in history, splendid in culture, beautiful in landscape and honest in social mood. There is the wetland park nearest to city—Zhangye National Wetland Park; the biggest indoor wood stuffed and clay sculptured lying Buddha of the world, rare treasure – Zhangye Golden Sutra, treasure of cave art – grotto group in Mati Temple of Su’nan, Jinta Temple and Manjushree Temple, the most beautiful colorful Danxia of China, the best preserved and ancient capital of Northern Liang of China – ancient ruins of Camel City, and the largest royal stud farm of the world – Shandan Horse Farm. Zhangye is a high integrated tourism – rich region in West China, and is an important tourist destination of the Silk Road golden tourist route.</p>
    <h5>Things to Do in Zhangye</h5>
    <p>Zhangye Danxia Geopark, enjoys he honors of " The world's top ten magical geographical wonders, is the best place for photography. The best time to see it is in the late afternoon / evening as the sun is setting. Blues, reds and golds are among the colours visible in the breathtaking rock formations. It is a glorious view!</p>
    <p>Binggou Danxia Park has totally different landscape and absolutely worth a visit. It is about an hour from Zhangye and the formations are quite interesting. These formations really do look like ice sculptures melting, which rings true to its name bing which means ice in Chinese.</p>
    <p>Mati Temple is well-known as the deity horse footprints. It is a tourist destination integrating grotto art, Buddhist culture, natural scenery, Yugurs and Tibetan style.</p>
    <p>Giant Buddha Temple in Zhangye is the largest architectural relic in Gansu Province of the Western Xia (1038-1227) period. China's largest reclining Buddha is well preserved in this temple.</p>
    <h5>Car Rental Service</h5>
    <p>Zhangyetravel.com provides buses with 4-55 seats to meet the demand of private and team car-rental. We assure you all the buses are very clean with licensed driver in good condition. As June to September is the peak season of Zhangye tourism, the price will rise highly. If you need to rent a car, you’d better ask this from our travel consultant ahead of time to get the best price as possible.</p>
    <h5>English-speaking Guide Service</h5>
    <p>Zhangye tourism is developed very late, so the English-speaking guides are deficient. The service here will not always meet the standards of other similar tourist cities in China. And the local guides are not professional English-speaking guides. They are students or teachers from universities with some tour experiences and they can help you organize your whole itinerary well. Zhangye’s tourism administration concerns this problem particularly and now is actively recruiting and training some professional English-speaking guides. We believe that in the next 3-5 years the service level of English-speaking guides in Zhangye will be improved comprehensively.</p>
   </div>
   </div>
   <div class="col-md-4 col-sm-4 col-xs-12 zyt_right hidden-xs">
    <p class="zyt_right_tit">BEST ZHANGYE TOUR PACKAGES</p>
	<?php foreach($res as $v){ ?>
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