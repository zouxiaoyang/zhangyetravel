<?php

class CacheController extends Controller{

	public function actionClearCache(){
	
		Yii::app()->cache->flush();

		echo "cache clear success!";

	}
}