<?php 
class PackageListController extends Controller{

	public function actionIndex(){

		$packageid  = isset($_GET['packageid'])?$_GET['packageid']:0;

		$sql = "select * from jos_cos_tours_package as jctp where jctp.id=".(int)$packageid."";
		$res = Yii::app()->db->createCommand($sql)->queryRow();


		$sql_des = "select * from jos_cos_tours_des where packageid=".(int)$packageid." order by id asc";
		$res_des = Yii::app()->db->createCommand($sql_des)->queryAll();
		
		$random_image = $this->getRandomPackage($packageid);

		$this->setPageHeader($res['seo_title'],$res['seo_key'],$res['seo_description']);// for seo;

		$this->render('index',
			array(
			'res'=>$res,
			'res_des'=>$res_des,
			 'random_image'=>$random_image
			)
		);
	}
	 protected function getRandomPackage($packageid){
	
		if(!Yii::app()->cache->get('res')){
				$sql = "select `id`,`filedir`,`pic`,`name` from `jos_cos_tours_package` where `category_parentid`=(select distinct `category_parentid` from `jos_cos_tours_package` where `id`=".(int)$packageid.") order by RAND() limit 4";
				$res = Yii::app()->db->createCommand($sql)->queryAll();
				Yii::app()->cache->set('res',$res,10*60);
				return $res;
			}else{
				return 	Yii::app()->cache->get('res');
			}
	}

	// set seo
	protected function setPageHeader($seo_title,$seo_keywords,$seo_description){

		$this->setPageTitle($seo_title);
		Yii::app()->clientScript->registerMetaTag('keywords',$seo_keywords);
		Yii::app()->clientScript->registerMetaTag('description',$seo_description);

  }

}