<?php
class GuideController extends Controller{
	
	public function actionIndex(){
		
		$title = 'Zhangye Travel Guide: Maps, Attractions, Food, Transportations, Hotel';
		$keyword = 'zhangye travel guide';
		$des = 'Zhangye Travel Guide about attractions, accommodation, transportation, food, shopping, climate, and other travel tips.';
		
		$this->setPageHeader($title,$keyword,$des);

		$nav = $this->aboveNav();
		
		$fixid = array(1,3,4,5);

		$res = $this->rightMenu($fixid);

		$this->render('index',array('res'=>$res,'nav'=>$nav));

	}

// overview 
	public function actionOverview(){

		$nav = $this->aboveNav();
		
		$fixid = array(1,3,4,5);

		$res = $this->rightMenu($fixid);

		$this->render('overview',array('res'=>$res,'nav'=>$nav));
	}
// maps
	public function actionMaps(){

		$title = 'English Maps of Zhangye, Zhangye Danxia Map, Gansu & Silk Road Maps';
		$keyword = 'zhangye map, zhangye danxia map, map of zhangye';
		$des = 'Zhangye maps: location of airport, railways, famous tourist attractions, railway stations and hotels.';
		$this->setPageHeader($title,$keyword,$des);


		$nav = $this->aboveNav();
		
		$fixid = array(1,3,4,5);

		$res = $this->rightMenu($fixid);

		$this->render('maps',array('res'=>$res,'nav'=>$nav));

	}
// Transportation 
	public function actionTransportation(){

		$title = 'Zhangye Transportation: How to travel Zhangye by Flight, Train and Bus';
		$keyword = 'zhangye transportations, how to get to zhangye';
		$des = 'Click here to get the latest information on how to travel to/in Zhangye City. You will see the flight, train, the city-bus and taxi details.';
		$this->setPageHeader($title,$keyword,$des);


		 $nav = $this->aboveNav();

		$fixid = array(1,3,4,5);

		$res = $this->rightMenu($fixid);
	
		$this->render('transportation',array('res'=>$res,'nav'=>$nav));
	}
// Accomadation
	public function actionAccomadation(){

		$nav = $this->aboveNav();

		$fixid = array(1,3,4,5);

		$res = $this->rightMenu($fixid);
	
		$this->render('accomadation',array('res'=>$res,'nav'=>$nav));
	}
//attractions
	public function actionAttractions(){

		$title = 'Zhangye Attractions, Must-see Attractions in Zhangye, Things to do in Zhangye';
		$keyword = 'zhangye attractions, zhangye must-see, things to do in zhangye, zhangye things to do';
		$des = 'Zhangye Attractions: Coloured Mountain, Binggo Danxia, Mati Temple, Giant Buddha Temple, Kangle Grassland, Shandan Horse Farm, Pingshanhu Grand Conyon...';
		$this->setPageHeader($title,$keyword,$des);


		$nav = $this->aboveNav();

		$fixid = array(1,3,4,5);

		$res = $this->rightMenu($fixid);
	
		$this->render('attractions',array('res'=>$res,'nav'=>$nav));
	}
	//Weather 
	public function actionWeather(){


		$title = 'Zhangye Weather, Zhangye Climate with Weather Forecast, Best Visit Time';
		$keyword = 'zhangye weather, zhangye climate, best time to visit zhangye, weather in zhangye';
		$des = 'The latest Zhangye weather and climate information in four seasons. Know before you go and find the best time to travel Zhangye.';
		$this->setPageHeader($title,$keyword,$des);


		$nav = $this->aboveNav();

		$fixid = array(1,3,4,5);

		$res = $this->rightMenu($fixid);
	
		$this->render('weather',array('ress'=>$res,'nav'=>$nav));
	}
// Food & Restaurant 
	public function actionFoodRestaurant(){

		$title = 'Zhangye Dining: Signature Food and Restaurants';
		$keyword = 'zhangye food, zhangye restaurants, zhangye dining, what to eat in zhangye';
		$des = 'Gansu Zhangye dining information about representative dishes like Enstwisting Noddles, Small Rice, Sunji Chaopao and so on.';
		$this->setPageHeader($title,$keyword,$des);

		$nav = $this->aboveNav();

		$fixid = array(1,3,4,5);

		$res = $this->rightMenu($fixid);
	
		$this->render('food-restaurant',array('res'=>$res,'nav'=>$nav));
	}
//Travel Tips 
	public function actionTravelTips(){
		
		$title = 'Zhangye Travel Tips: Bank, Hospital, Useful Numbers';
		$keyword = 'zhangye travel tips';
		$des = 'Plan a trip to Zhangye ? Click here to get to know some travel tips of Zhangye City, such as currency, bank, emergency numbers and hospitals before you go.';
		$this->setPageHeader($title,$keyword,$des);

		$nav = $this->aboveNav();

		$fixid = array(1,3,4,5);

		$res = $this->rightMenu($fixid);
	
		$this->render('travel-tips',array('res'=>$res,'nav'=>$nav));
	}
//Zhangye News 
	public function actionNews(){

		$nav = $this->aboveNav();

		$fixid = array(1,3,4,5);

		$res = $this->rightMenu($fixid);
	
		$this->render('news',array('res'=>$res,'nav'=>$nav));
	}

//set pagehead;
protected function setPageHeader($title,$keyword,$des){

    $this->setPageTitle($title);
    Yii::app()->clientScript->registerMetaTag('keywords',$keyword);
    Yii::app()->clientScript->registerMetaTag('description',$des);

  }

 protected function rightMenu($arr){
 
		$fixid = $arr;

		$str_id  = '('.implode(',',$fixid).')';

		$sql ="select * from jos_cos_tours_package  where id in ".$str_id."";

		$res = Yii::app()->db->createCommand($sql)->queryAll();

		return $res;
 }

 protected function  aboveNav(){
 
	$url = Yii::app()->request->getUrl();

	$html='';

	$html.='<div class="zyt_navbg">
	   <ul>
		<li'; 
		$html.=(strstr($url,'overview') || $url=='/zhangye-travel-guide/')?' class="zyt_selected"':' ';
		$html.='style="border-left:1px #ccc solid"><a href="/guide/overview.htm">Overview</a></li>
		<li'; 
		$html.=strstr($url,'maps')?' class="zyt_selected"':' ';
		$html.='>';
		//$html.='<a href="javascript:void(0)">Maps</a></li>
		 $html.='<a href="/guide/maps.htm">Maps</a></li>
		<li'; 
		$html.=strstr($url,'transportation')?' class="zyt_selected"':' ';
		$html.='>';
		$html.='<a href="/guide/transportation.htm">Transport</a></li>
		<li'; 
		$html.=strstr($url,'attractions')?' class="zyt_selected"':' ';
		$html.='>';
		//$html.='<a href="javascript:void(0)">Attractions</a></li>
		$html.='<a href="/guide/attractions.htm">Attractions</a></li>
		<li'; 
		$html.=strstr($url,'accomadation')?' class="zyt_selected"':' ';
				$html.='>';
		//$html.='<a href="javascript:void(0)">Accomadation</a></li>

		$html.='<a href="/guide/accomadation.htm">Accomadation</a></li>
		
		<li'; 
		$html.=strstr($url,'weather')?' class="zyt_selected"':' ';
		$html.='>';
		// $html.='<a href="javascript:void(0)">Weather</a></li>
		$html.='<a href="/guide/weather.htm">Weather</a></li>
		<li';
		$html.=strstr($url,'food-restaurant')?' class="zyt_selected"':' ';
				$html.='>';
		// $html.='<a href="javascript:void(0)">Food & Restaurant</a></li>
		$html.='<a href="/guide/food-restaurant.htm">Food & Restaurant</a></li>
		<li';
		$html.=strstr($url,'travel-tips')?' class="zyt_selected"':' ';
		$html.='>';
		//$html.='<a href="javascript:void(0)">Travel Tips</a></li>
		$html.='<a href="/guide/travel-tips.htm">Travel Tips</a></li>
	   </ul>
	  </div>';
	  return $html;
	}
}