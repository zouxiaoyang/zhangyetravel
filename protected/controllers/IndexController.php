<?php
class IndexController extends Controller
{
	public function actionIndex()
	{	
		$this->setPageHeader();

		$this->render('index');
	}
	
	//set pagehead;
	protected function setPageHeader(){

    $this->setPageTitle("China Rainbow Mountains Tours, Zhangye Danxia Landform Geopark Travel Guide");

    Yii::app()->clientScript->registerMetaTag('keywords','zhangye danxia,rainbow mountains china,zhangye danxia landform,zhangye danxia geopark');

    Yii::app()->clientScript->registerMetaTag('description','Zhangyetravel specializes in operating private tours to the Rainbow Mountains China. Comprehensive travel information about Zhangye & Danxia Landform Geopark are collected here.');

  }

// get the featured tours;
  protected function getFeaturedTours(){
		
		$sql ="select * from `jos_cos_tours_package` limit 1";

		$res = Yii::app()->db->createCommand($sql)->queryAll();
  }
}