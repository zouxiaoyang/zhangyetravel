<?php
class TransportController extends Controller{


	public function actionTrainToZhangye(){

		$file = file(Yii::app()->basePath.'/../data/transport/zhangyetrainarrived.csv');
		$fixid = array(1,3,4,5);
		$res = $this->rightMenu($fixid);
		$this->render('train-to-zhangye',array('res'=>$res,'transinfo'=>$file));

	}

	public function actionTrainFromZhangye(){

		$file = file(Yii::app()->basePath.'/../data/transport/zhangyetrainfrom.csv');
		$fixid = array(1,3,4,5);
		$res = $this->rightMenu($fixid);
		$this->render('train-from-zhangye',array('res'=>$res,'transinfo'=>$file));

	}

	public function actionFlight(){

		$fixid = array(1,3,4,5);

		$res = $this->rightMenu($fixid);

		$this->render('flight',array('res'=>$res));
	}

	 protected function rightMenu($arr){
		
		$fixid = $arr;
		$str_id  = '('.implode(',',$fixid).')';

		$sql ="select * from jos_cos_tours_package  where id in ".$str_id."";
		$res = Yii::app()->db->createCommand($sql)->queryAll();

		return $res;
	}
	
}