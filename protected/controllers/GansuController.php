<?php
class GansuController extends Controller{
	
	public function actionIndex(){
		
		// 3 is zhangye tours categortry id.
		
		//
		$this->setPageHeader();

		$sql="select jctp.id,jctp.name,jctp.filedir,jctp.pic,jctp.attractions,jctp.recommand_reason,jctp.tour_intro,jctp.days,jctp.price_serialize from jos_cos_tours_package as jctp left join jos_categories as jc on jctp.category_parentid=jc.id where jc.id=4";
			
		$res = Yii::app()->db->createCommand($sql)->queryAll();
		

		$this->render('index',array('res'=>$res));
	}


		//set pagehead;
protected function setPageHeader(){

    $this->setPageTitle("Private China Gansu Tours to Zhangye Danxia, Dunhuang, Jiayuguan");
    Yii::app()->clientScript->registerMetaTag('keywords','gansu travel, zhangye gansu, gansu china tours');
    Yii::app()->clientScript->registerMetaTag('description','Private Gansu travel packages to Zhangye Danxia, Dunhuang, Jiayuguan with high quality and low price.');

  }

}