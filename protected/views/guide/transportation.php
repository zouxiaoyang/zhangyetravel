<div class="breadcrumb1">
 <div class="container"><a href="">Home</a> » <a href="">Zhangye Travel Guide</a> » Transport</div>
</div>
<div class="zyt_overview">
 <div class="container">
  <h1>Zhangye Travel Guide</h1> 
  <?php echo $nav;?>
 </div>
 <div class="container">
  <div class="row zyt_main">
   <div class="col-md-8 col-sm-8 col-xs-12 zyt_left">
    <div class="hidden-xs"><img src="/images/index/zytg_banner.jpg" alt="" class="img-responsive"/></div>
    <div class="zyt_mtext">
    <h3>Transport to/from Zhangye</h3>
    <p>Zhangye city is in Gansu province and it is convenient to arrive here. You can take the train, flight or bus. Zhangye owns only one train station, Zhangye train station, which is in the northeast of Zhangye city. You can take the direct plane to Zhangye airport which is near the city and very convenient. There are three bus stations in Zhangye and you can choose to arrive here by coach. The main transportation here is buses and taxies, but you can also take a chartered car.</p>
    <h6>By Train</h6>
    <p>The ticket total price includes net price, service fee, credit card processing fee, and the delivery fee (it depends on your requirement).<br />
The service fee is varies from $5 to $15, which depends on the different net price. Some train ticket is in a shortage and very difficult to purchase.<br />Our quotation is based on the updated exchange rate between US Dollar and CN Yuan.</p>
    <p>You can get to Zhangye train station directly by train. It is near the city and very convenient. The train station is in the northeast of the city, 8 kilometers from the urban area. If you take a taxi, you will spend about 10 yuan from Zhangye train station to the city.<br />
Address: West Road, Dongyuan Town, Ganzhou District, Zhangye City in Gansu Province.<br />
Tel: 0936-8431804<br />
Zhangyetravel.com provides train ticket booking service to and from Zhangye.</p>
 <p><span>The main train number schedule in Zhangye</span></p>
<a href="/transport/train-to-zhangye.htm">Train to Zhangye </a><br />
<a href="/transport/train-from-zhangye.htm">Train from Zhangye</a>

    <h6>By Flight</h6>
    <p>You can arrive in Zhangye airport directly by flight but the flights are few here. Besides, these flights are also used as military airport.</p>
    <p><span>1. Zhangye Arport</span><br />
Zhangye airport is in the southeast of the city, 24 kilometers from the urban area. It is used both as military and civil airports. There are few flights in the airport with only the airlines of Lanzhou, Xi’an and Chongqing.<br />
Address: Shigang Mound, Ganzgou District, Zhangye City in Gansu Province.</p>
    <p><span>2. Airport Bus</span><br />
Price: 20 yuan per person<br />
Tip: The flights in Zhangye are few, so there are airport buses for all flights to Zhangye city directly. If you buy the ticket at Zhangye booking center in the Electric Power Mansion or Gansu Airport Group of Civil Aviation, you can take the bus for free with the travel itinerary.</p>
    <p><span>3. Zhangye flights schedule</span></p>
<a href="/transport/flight.htm">Flight to Zhangye </a><br />
<a href="/transport/flight.htm">Flight from Zhangye</a>

    <h6>By Bus</h6>
    <p>There are three bus stations in Zhangye: Zhangye bus station, the east bus station and the south bus station, among which Zhangye bus station and the east bus station is bigger with more passengers.</p>
    <p><span>1.Zhangye bus station</span><br />
Zhangye bus station is also called as Xiguan bus station. It is the most important bus station in Zhangye with the main buses from Yinchuan, Xining and Wulumuqi.<br />
Address: No.128 West Ring Road in Zhangye<br />
Tel: 0936-8210597</p>
    <p><span>2.The east bus station in Zhangye</span><br />
The buses start from the west bus station, quite near Zhangye city.<br />
Address: No.1 East Ring South Road in Zhangye<br />
Tel: 0936-8214073</p>
    <p><span>3.The south bus station in Zhangye</span><br />
The buses mainly start to the south of Zhangye or as the shuttle buses to Xining.<br />
Address: No. 35 South Ring Road in Zhangye.<br />
Tel: 0936-8240019</p>

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