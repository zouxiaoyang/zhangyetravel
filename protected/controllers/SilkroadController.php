<?php
class SilkroadController extends Controller{
	
	public function actionIndex(){
		
		// 3 is zhangye tours categortry id.
		//
		$this->setPageHeader();

		$sql="select jctp.id,jctp.name,jctp.filedir,jctp.pic,jctp.attractions,jctp.recommand_reason,jctp.tour_intro,jctp.days,jctp.price_serialize from jos_cos_tours_package as jctp left join jos_categories as jc on jctp.category_parentid=jc.id where jc.id=5";
			
		$res = Yii::app()->db->createCommand($sql)->queryAll();
		

		$this->render('index',array('res'=>$res));
	}


			//set pagehead;
protected function setPageHeader(){

    $this->setPageTitle("Private China Silk Road Tours to Xian, Xinjiag, Gansu");
    Yii::app()->clientScript->registerMetaTag('keywords','silk road china tour, china silk road tour');
    Yii::app()->clientScript->registerMetaTag('description','China Silk Road Tour: private China silk road tours to Xian, Dunhuang, Jiayuguan, Urumqi, Turpan...with high quality and low price.');

  }

}