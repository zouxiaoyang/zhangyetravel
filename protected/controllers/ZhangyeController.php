<?php
class ZhangyeController extends Controller{
	
	public function actionIndex(){
		
		// 3 is zhangye tours categortry id.
		
		$this->setPageHeader();

		$sql="select jctp.id,jctp.name,jctp.filedir,jctp.pic,jctp.attractions,jctp.recommand_reason,jctp.tour_intro,jctp.days,jctp.price_serialize from jos_cos_tours_package as jctp left join jos_categories as jc on jctp.category_parentid=jc.id where jc.id=3";
			
		$res = Yii::app()->db->createCommand($sql)->queryAll();
		

		$this->render('index',array('res'=>$res));
	}


	//set pagehead;
protected function setPageHeader(){

    $this->setPageTitle("Zhangye Tours: Private Package to Zhangye Danxia Landform China");
    Yii::app()->clientScript->registerMetaTag('keywords','zhangye danxia landform china, zhangye danxia mountains');
    Yii::app()->clientScript->registerMetaTag('description','Private tour packages to Zhangye Danxia Mountains & Binggou Danxia Park with high quality and low price.');

  }
}