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
    	<h3>Zhangye Maps</h3>
        <p>To help you have a better understanding about Zhangye, we have collected some very useful Zhangye maps, covering the most 
popular attractions in Zhangye, Zhangye Danxia Geopark map, Gansu tour map and a tourist map of China Silk Road. All the maps 
below can be clicked to zoom in.</p>
		<h6>Zhangye Tour Map</h6>
         <a href="/images/index/zhangye02.jpg"><img src="/images/index/zhangye01.jpg" alt="" class="img-responsive" /></a>
        <a href="/images/index/zhangye02.jpg">Click here to enlarge</a>
        
		<h6>Zhangye Danxia Map</h6>
        <img src="/images/index/qicaidanxia01.jpg" alt="" class="img-responsive" />
               
       <!-- <h6>Binggou Danxia Park Map</h6>
        <img src="/images/index/binggoudanxia01.jpg" alt="" class="img-responsive" />-->
        <h6>Gansu Tour Map</h6>
        <img src="/images/index/gansu-map01.jpg" alt="" class="img-responsive" />
        
         <h6>Ghina Silk Road Tourist Map</h6>
        <img src="/images/index/silk-road01.jpg" alt="" class="img-responsive" />
        
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