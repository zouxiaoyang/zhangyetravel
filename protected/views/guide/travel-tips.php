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
    <h3>Zhangye Travel Tips</h3>
   
    <h5>Travel Time</h5>
    <span>The climate in Zhangye is dry with less rain. The coldest month is January and the hottest month is July. From June to September every year is the best tourist season in Zhangye. The winter is not very cold because the indoor temperature is high and the outside is sunny. If you go to Zhangye in winter, you need to bring extra batteries for the reason that the cold air will shorten their usage time. And the summer is not very hot because there is breeze outside and the temperature is greatly different in the morning and evening. So you should take enough clothes to keep warm. In addition, as the ultraviolet is strong in summer, you’d better make a good preparation to avoid sunburn in advance. The daytime in Zhangye is dry, so you should take enough water with you, drink more and eat more fruits.</span>
    <br />
    <h5>Taboo</h5>
    <span>Zhangye City is a multi-national zone so the visitors should pay more attention to local people’s life taboos and don’t argue with others just for some trifles. When you are in Tibetan zone, it is not allowed to take photos in the Temple of Tibetan Buddhism. Please keep this in mind to avoid some unnecessary troubles.</span>
    <br />
    <h5>Travel Essential </h5>
    <span>Identification: Passport</span><br />
<span>Daily Necessities: Skin care products, tissues (most toilets will not provide tissues, please prepare them in advance)</span><br />
<span>Ultraviolet Protection: Hat, sunscreen and sunglasses</span><br />
<span>Medicine: Common cold medicine, carsick medicine and band-aids.</span><br />
<span>Travel Insurance: Strengthen the awareness of self-protection and buy yourself a travel accident insurance.</span>
    <br />
    <h5>Emergency Call</h5>
    <span>Police Station: 110</span><br />
    <span>Fire Department: 119</span><br />
    <span>Emergency Phone: 120</span><br />
    <span>Traffic Accidents: 122</span><br />
   <span> Complaint Phone of Zhangye Travel: 0936-8229595</span><br />
   <span>Complaint Phone of Gansu Province Travel: 0931-8826860</span><br />
   <span>The People’s Hospital of Zhangye: 0936-8212934</span>
    
    
    
    
    
    
    
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