<?php
class RainbowMountainController extends Controller{
	public function actionIndex(){	
		
		$this->setPageHeader();

		$menu_left = $this->getRainbowLeftMenu();
		$above_info = $this->getAboveInfo();
		$this->render('index',array('menu_left'=>$menu_left,'above_info'=>$above_info));
	}
	
  public function  actionBestTimeToVisit(){


	  	$this->setPageTitle("Best Time and Season to Visit Zhangye Danxia Landform");
		Yii::app()->clientScript->registerMetaTag('keywords','best time to visit danxia landform, best time to visit zhangye danxia, best season to visit rainbow mountains');
		Yii::app()->clientScript->registerMetaTag('description','When to visit the Zhangye Danxia? Find the answer of Best Time & Season to Visit Zhangye Danxia Landform here.');


	  	$menu_left = $this->getRainbowLeftMenu();
		$above_info = $this->getAboveInfo();
		$this->render('best-time-to-visit',array('menu_left'=>$menu_left,'above_info'=>$above_info));
  }

   public function  actionEntrances(){

	    $this->setPageTitle("West Entrance of Danxia in Linze County, East Entrance of Danxia in Sunan County");
		Yii::app()->clientScript->registerMetaTag('keywords','linze danxia, sunan danxia, entrance of zhangye danxia');
		Yii::app()->clientScript->registerMetaTag('description','Full guide about the two Zhangye Danxia Entrances: West Entrance of Danxia in Linze County, East Entrance of Danxia in Sunan County');

	   	$menu_left = $this->getRainbowLeftMenu();
		$above_info = $this->getAboveInfo();
		$this->render('entrances',array('menu_left'=>$menu_left,'above_info'=>$above_info));
  }

   public function  actionOverview(){

	   $this->setPageHeader();
		
		$menu_left = $this->getRainbowLeftMenu();
		$above_info = $this->getAboveInfo();
		$this->render('overview',array('menu_left'=>$menu_left,'above_info'=>$above_info));
  }

   public function  actionTransportation(){

	   	$this->setPageTitle("Rainbow Muntains China Transportation: How to Get to Zhangye Danxia Landform ?");
		Yii::app()->clientScript->registerMetaTag('keywords','zhangye danxia how to get there, how to get to zhangye danxia landform');
		Yii::app()->clientScript->registerMetaTag('description','Here we offer you the transoprtation information about how to get to Zhangye Danxia Landform?');

		$menu_left = $this->getRainbowLeftMenu();
		$above_info = $this->getAboveInfo();
		$this->render('transportation',array('menu_left'=>$menu_left,'above_info'=>$above_info));
  }

  public function  actionMaps(){

	  	
		$this->setPageTitle("Zhangye Danxia Landform Map, Rainbow Mountains China Map");
		Yii::app()->clientScript->registerMetaTag('keywords','zhangye danxia map, danxia landform map, rainbow mountains china map, danxia rainbow mountains map');
		Yii::app()->clientScript->registerMetaTag('description','Zhangye Danxia Landform Map include Rainbow Mountains China, Binggo Danxia Park, Linze Danxia, Sunan Danxia and etc. Click to know more about the map of Zhangye danxia in English here.');

		$menu_left = $this->getRainbowLeftMenu();
		$above_info = $this->getAboveInfo();
		$this->render('maps',array('menu_left'=>$menu_left,'above_info'=>$above_info));
  }

  public function  actionPlatforms(){


		$this->setPageTitle("No.1,2,3,4,5,6 Platform Guide of Zhangye Danxia Geopark");
		Yii::app()->clientScript->registerMetaTag('keywords','platforms of rainbow mountains, platform guide of zhangye danxia geopark, zhangye danxia platforms');
		Yii::app()->clientScript->registerMetaTag('description','Platforms of Rainbow Mountains China: No.1,2,3,4,5,6 Platform Guide of Zhangye Danxia Geopark');
	  	
		$menu_left = $this->getRainbowLeftMenu();
		$above_info = $this->getAboveInfo();
		$this->render('platforms',array('menu_left'=>$menu_left,'above_info'=>$above_info));
  }

  public function  actionSightseeingBus(){
		

		$this->setPageTitle("Sightseeing cars & Buses in Zhangye Danxia Geopark");
		Yii::app()->clientScript->registerMetaTag('keywords','danxia sightseeing cars, zhangye danxia sightseeing bus');
		Yii::app()->clientScript->registerMetaTag('description','There are sightseeing buses in Zhangye Danxia Geopark. The ticket for sightseeing bus is 20 Yuan. It runs from 06:00 in the morning and 20:40 in the evening.');


	  	$menu_left = $this->getRainbowLeftMenu();
		$above_info = $this->getAboveInfo();
		$this->render('sightseeing-bus',array('menu_left'=>$menu_left,'above_info'=>$above_info));
  }

  public function  actionTravelTips(){
		
		$this->setPageTitle("Travel Tips on Coloured Mountains China");
		Yii::app()->clientScript->registerMetaTag('keywords','zhangye travel tips, danxia travel tips');
		Yii::app()->clientScript->registerMetaTag('description','Tour Zhangye Danxia like an expert with our travel tips, here you will find information to help you prepare for a safe and enjoyable journey to the Rainbow Mountains in China.');

	  	$menu_left = $this->getRainbowLeftMenu();
		$above_info = $this->getAboveInfo();
		$this->render('travel-tips',array('menu_left'=>$menu_left,'above_info'=>$above_info));
  }

/******************************content of fixed***********************************************/

  protected function getRainbowLeftMenu(){ // the public of the left menu;

		$url = Yii::app()->request->getUrl();
		$menu='';
		$menu .= '  <div class="col-md-3 col-sm-3 col-xs-12 rm_lebut">
		   <ul>';
		   if(strstr($url,'overview') || $url=='/rainbow-mountain-china/'){
				$menu.='<li class="selected2"><a href="/rainbow-mountain-china/overview.htm#showcontent_cc">Overview <span></span></a></li>';
		   }else{
				$menu.='<li class="selected1"><a href="/rainbow-mountain-china/overview.htm#showcontent_cc">Overview <span></span></a></li>';
		   }
		   // $menu.=' <li class="selected1"><a href="javascript:void(0)">Maps <span></span></a></li>';
		  $menu.=' <li class="selected1"><a href="/rainbow-mountain-china/maps.htm#showcontent_cc">Maps <span></span></a></li>';
		  
		   if(strstr($url,'transportation')){
				$menu.='<li class="selected2"><a href="/rainbow-mountain-china/transportation.htm#showcontent_cc">Transport <span></span></a></li>';
		   }else{
				$menu.='<li class="selected1"><a href="/rainbow-mountain-china/transportation.htm#showcontent_cc">Transport <span></span></a></li>';
		   }
		   if(strstr($url,'best-time-to-visit')){
				$menu.='<li class="selected2"><a href="/rainbow-mountain-china/best-time-to-visit.htm#showcontent_cc">Best Time to Visit  <span></span></a></li>';
		   }else{
				$menu.='<li class="selected1"><a href="/rainbow-mountain-china/best-time-to-visit.htm#showcontent_cc">Best Time to Visit  <span></span></a></li>';
		   }
		   if(strstr($url,'entrances')){
				$menu.='<li class="selected2"><a href="/rainbow-mountain-china/entrances.htm#showcontent_cc">Entrance <span></span></a></li>';
		   }else{
				$menu.='<li class="selected1"><a href="/rainbow-mountain-china/entrances.htm#showcontent_cc">Entrance <span></span></a></li>';
		   }
		   if(strstr($url,'platforms')){
				$menu.='<li class="selected2"><a href="/rainbow-mountain-china/platforms.htm#showcontent_cc">Platform <span></span></a></li>';
		   }else{
				$menu.='<li class="selected1"><a href="/rainbow-mountain-china/platforms.htm#showcontent_cc">Platform <span></span></a></li>';
		   }

		   if(strstr($url,'sightseeing-bus')){
				$menu.='<li class="selected2"><a href="/rainbow-mountain-china/sightseeing-bus.htm#showcontent_cc">Sightseeing Bus  <span></span></a></li>';
		   }else{
				$menu.='<li class="selected1"><a href="/rainbow-mountain-china/sightseeing-bus.htm#showcontent_cc">Sightseeing Bus  <span></span></a></li>';
		   }
		   if(strstr($url,'travel-tips')){
				// $menu.='<li class="selected2"><a href="/rainbow-mountain-china/travel-tips.htm#showcontent_cc">Travel Tips <span></span></a></li>';
				$menu.='<li class="selected2"><a href="javascript:void(0);">Travel Tips <span></span></a></li>';
		   }else{
				// $menu.='<li class="selected1"><a href="/rainbow-mountain-china/travel-tips.htm#showcontent_cc">Travel Tips <span></span></a></li>';
				$menu.='<li class="selected1"><a href="javascript:void(0);">Travel Tips <span></span></a></li>';

		   }
				$menu.='<li class="selected1"><a href="/tours/zhangye.htm" target="_blank">Tours <span></span></a></li>
		   </ul>
		  </div>';

		  return $menu;
  }

// above of the page;
protected function getAboveInfo(){

	$above_info  = '<div class="container rm_text">
	 <h1>Rainbow Mountain China</h1>
	 <h6>China Rainbow Mountains are magnificent with gorgeous colors, which developed at about 200 million years ago. Covering an area of over 400 square kilometers, it is composed of lots of smooth and sharp cliffs, most of which are several hundred meters high, and cliffs look very powerful for their neighbors are plains and rivers.
	Zhangye Danxia Geopark, enjoys he honors of "The world\'s top ten magical geographical wonders”, is the best place for photography. The best time to see the rainbow hills is in the late afternoon/evening as the sun is setting. Blues, reds and golds are among the colours visible in the breathtaking rock formations. It is a glorious view! ZhangyeTravel offers the tours to visit the Coloured Mountains China with unbeatable price. We are here to help you design your own unique tour.
	"Nihao and welcome to China!"</h6>
	</div>';
	return $above_info;
}

/**********************************************content of fixed*********************************************/
//set pagehead;
protected function setPageHeader(){

    $this->setPageTitle("Travel Guide of Rainbow Mountain China: Maps, Platforms, Tips, Tours");
    Yii::app()->clientScript->registerMetaTag('keywords','rainbow mountain china, rainbow hills china, coloured mountains china');
    Yii::app()->clientScript->registerMetaTag('description','Rainbow Mountain China travel information: overview, tours, maps, transportation, tips, platforms of the coloured mountains china and best time to visit the rainbow hills china.');

  }

}