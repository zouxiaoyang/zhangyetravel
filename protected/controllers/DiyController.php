<?php
class DiyController extends Controller{
	private $orderModel;
	private $error=array();
	private $data = array();
 	public function actionIndex(){
		// $this->order()
		// var_dump($_POST);exit;
	if(!Yii::app()->request->isPostRequest){
		 $this->setPageHeader();
	}
// 记录数据;
		// $sql ="";

		$this->addCustomerDiyOrder();

		$this->render('index');
	}
	public function actionOrder(){ // 正常下单页面.
	

		$packageid = (int)$_GET['packageid'];

		$res = Yii::app()->db->createCommand("select `id`,`package_code`,`days`,`route`,`name` from `jos_cos_tours_package` where `id`=".$packageid."")->queryRow();
		
		$this->setPageTitle($res['name']);

		Yii::app()->clientScript->registerMetaTag('description','A tour expert will contact you shortly through the email address to further discuss your trip and coordinate all the tour details with you.');

		$this->addOrder();

		$this->render('order',array('res'=>$res));
	
	}
// add the diy order;
  protected function addCustomerDiyOrder(){ // add customer diy order;
	 if(isset($_POST['Order']) && !empty($_POST['Order'])){ 
		$ip = Yii::app()->request->userHostAddress;
		 if($_POST['Order']['full_name']) { // name;
			$this->data['full_name'] = $_POST['Order']['full_name'];
            $_POST['Order']['full_name'] = addslashes(trim($_POST['Order']['gender'].$_POST['Order']['full_name']));
          }
          $_POST['Order']['url_referer'] = $_POST['url_refer']; // 获获取前一个页面的url;
          $_POST['Order']['submit_source'] = $_SERVER['HTTP_HOST']; //主机名;
          $_POST['Order']['dateline'] = time();// 下单时间;
		 // 新增字段;
		 $this->data['age'] =$_POST['age'] = addslashes(trim($_POST['Age']));
		 $this->data['moblie'] = $_POST['moblie'] = addslashes(trim($_POST['Order']['phone']));
		 $this->data['traveltime'] =$_POST['traveltime']  = $_POST['Order']['travel_date'];
		 $this->data['duration'] =$_POST['duration'] = addslashes(trim($_POST['Order']['duration']));
		 $this->data['adults'] =$_POST['adults']=(int)$_POST['Adults'];
		 $this->data['children'] =$_POST['children'] = (int)$_POST['Children'];
		 $this->data['infant'] =$_POST['infant']	= (int)$_POST['Babies'];
		 $this->data['hotelinfo'] =$_POST['hotelinfo']	= addslashes(trim($_POST['HotelClass']));
		 $this->data['restaurant'] =$_POST['restaurant']	= addslashes(trim($_POST['MealPlan']));
		 $this->data['startcity'] =$_POST['startcity'] = addslashes(trim($_POST['StartCity']));
		 $this->data['specialrequest'] =$_POST['specialrequest'] = addslashes(trim($_POST['Request']));
		 if($_POST['other_city']){
			 $this->data['city'] =$_POST['city'] = addslashes(implode(',',$_POST['other_city']));
		 }
		 $this->data['email'] = addslashes(trim($_POST['Order']['email']));
		 $this->data['backupemail'] = addslashes(trim($_POST['Order']['backupemail']));
		 $this->data['nationality'] = addslashes(trim($_POST['Order']['nationality']));
		// 获取最大的订单号;
		$sql = "select max(`id`) as `max_id` from `jos_cos_customize`";
		$res = Yii::app()->db->createCommand($sql)->queryRow();
		if(!empty($res) && $res['max_id']){
			$insertId = ($res['max_id']+1);
		}else{
			$insertId = 1;
		}
		$order_str = 'ZY'.date("ymdhms").$insertId.rand(0,9);
		// sync order to total order.
		$gender = 0;
		if($post['Gender']=='Mr.'){
			$gender=1;
		}elseif($post['Gender']=='Ms.'){
			$gender=0;
		}
		$server_source=$_SERVER['HTTP_HOST'];

// 对other message 进行拼接处理.
		$other_message = '';
		$other_message .= '<b>Adults: </b>'.$this->data['adults'];
		$other_message .='<br />';
		$other_message .=($this->data['children']>0)?'<b>Children: </b>'.$this->data['children']:'';
		$other_message .='<br />';
		$other_message .=($this->data['infant']>0)?'<b>Infant: </b>'.$this->data['infant']:'';
		$other_message .='<br />';
		$other_message .=!empty($this->data['age'])?'<b>Age: </b>'.$this->data['age']:'';
		$other_message .='<br />';
		$other_message .=!empty($this->data['hotelinfo'])?'<b>Hotel Info: </b>'.$this->data['hotelinfo']:'';
		$other_message .='<br />';
		$other_message .=!empty($this->data['restaurant'])?'<b>Meal Plan: </b>'.$this->data['restaurant']:'';
		$other_message .='<br />';
		$other_message .=!empty($this->data['startcity'])?'<b>Start City: </b>'.$this->data['startcity']:'';
		$other_message .='<br />';
		$other_message .=!empty($this->data['specialrequest'])?'<b>Special Request: </b>'.$this->data['specialrequest']:'';
		$other_message .='<br />';
		$other_message .=!empty($this->data['city'])?'<b>Destinations :</b>'.$this->data['city']:'';
// 同步订单的数组.
		$arr_sync_data = array(
			'orderNO'	=> $order_str,
			'full_name'	=>$_POST['Order']['full_name'],
			'gender'	=>$gender,
			'nationality'	=>$this->data['nationality'],
			'packagecode'	=>'',
			'email'	=>$this->data['email'],
			'other_email'	=>$this->data['backupemail'],
			'phone'	=>$this->data['moblie'],
			'addr'	=>'',
			'adults'	=>$this->data['adults'],
			'children'	=>$this->data['children'],
			'infant'	=>$this->data['infant'],
			'age'	=>$this->data['age'],
			'entry_city'	=>$this->data['startcity'],
			'entry_date'	=>$this->data['traveltime'],
			'duration'	=>$this->data['duration'],
			'exit_city'	=>'',
			'other_travelinfo'	=>$other_message,
			'url_referer'	=>$_POST['Order']['url_referer'],
			'submit_source'	=>$server_source,
			'user_ip'	=>$ip,
			'dateline'	=>$_POST['Order']['dateline'],
			'ordertype'	=>(int)$_POST['ordertype'],
			'end_date'	=>'',
			'payment_method'	=>'',
			'passenger_info'	=>'',
			'discount_type'	=>'',
			'order_purpose'	=>'',
			'total_price'=>'',
			'final_price'	=>'',
			'is_activity'	=>'',
			'destination'	=>'',
			'other_message'	=>$other_message
		);
		
	 }
	if(Yii::app()->request->isPostRequest && $this->validate()){
		// add to database;
		$gender = trim($_POST['Order']['gender']);
		if($gender=='Mr.'){
			$gender = 1;
		}else if($gender=='Mrs.'){
			$gender = 0;
		}else{
			$gender = 2;
		}
		$city_info='start: '.$this->data['startcity'].', to: '.$this->data['city'];

		 if((int)$_POST['ordertype']==3){ // 3为定制订单.

			$sql="insert into `jos_cos_customize` set `orderNO`='{$order_str}',`hotelinfo`='{$this->data['hotelinfo']}',`restaurant`='{$this->data['restaurant']}',`cityinfo`='{$city_info}',`startcity`='{$this->data['startcity']}',`traveltime`='{$this->data['traveltime']}',`duration`='{$this->data['duration']}',`full_name`='{$_POST['Order']['full_name']}',`adults`={$this->data['adults']},`children`={$this->data['children']},`infant`={$this->data['infant']},`nationality`='{$this->data['nationality']}',`email`='{$this->data['email']}',`remail`='{$this->data['backupemail']}',`moblie`='{$this->data['moblie']}',`user_ip`='{$ip}',`specialrequest`='{$this->data['specialrequest']}',`gender`={$gender},`dateline`='{$_POST['Order']['dateline']}',`order_state`=0";

			$this->syncOrder($arr_sync_data); // sync order.

		 }else{ // 其它类型的订单接口.
			
		 }
		 Yii::app()->db->createCommand($sql)->query();
		$this->redirect('/message/'); // 跳转到成功的页面;
	 }else if(Yii::app()->request->isPostRequest){
		if(!empty($this->error)){ // 
			$this->render('index',array(
				'error'=>$this->error,
				'data' =>$this->data	
				)
			);
		}
	 }
  }
// add the diy order;
  protected function addOrder(){ // add customer diy order;
	 if(isset($_POST['Order']) && !empty($_POST['Order'])){ 
		$ip = Yii::app()->request->userHostAddress;
		 if($_POST['Order']['full_name']) { // name;
			$this->data['full_name'] = $_POST['Order']['full_name'];
            $_POST['Order']['full_name'] = addslashes(trim($_POST['Order']['gender'].$_POST['Order']['full_name']));
          }
		if($_POST['new_com_order']){
	  		$room_type_info="<b>ROOM INFO :</b>".$_POST['king_bed']." ,".$_POST['twin_beds'].",".$_POST['one_bed']."<br/>";
	    }
          $_POST['Order']['url_referer'] = $_POST['url_refer']; // 获获取前一个页面的url;
          $_POST['Order']['submit_source'] = $_SERVER['HTTP_HOST']; //主机名;
          $_POST['Order']['dateline'] = time();// 下单时间;
		 // 新增字段;
		 $this->data['moblie'] = $_POST['moblie'] = addslashes(trim($_POST['Order']['phone']));
		 $this->data['traveltime'] =$_POST['traveltime']  = $_POST['Order']['travel_date'];
		 $this->data['duration'] =$_POST['duration'] = addslashes(trim($_POST['Order']['duration']));
		 $this->data['adults'] =$_POST['adults']	=(int)$_POST['adults'];
		 $this->data['children'] =$_POST['children'] = (int)$_POST['children'];
		 $this->data['infant'] =$_POST['infant']	= (int)$_POST['infant'];

		 $this->data['hotelinfo'] =$_POST['hotelinfo']	= addslashes(trim($_POST['hotel_class']));

		 $this->data['specialrequest'] =$_POST['specialrequest'] = addslashes(trim($_POST['specialrequest']));
		 $this->data['email'] = addslashes(trim($_POST['Order']['email']));
		// 获取最大的订单号;
		$sql = "select max(`id`) as `max_id` from `jos_cos_tours_order`";
		$res = Yii::app()->db->createCommand($sql)->queryRow();
		if(!empty($res) && $res['max_id']){
			$insertId = ($res['max_id']+1);
		}else{
			$insertId = 1;
		}
		$order_str = 'ZY'.date("ymdhms").$insertId.rand(0,9);
		// sync order to total order.
		$gender = 0;
		if($post['Gender']=='Mr.'){
			$gender=1;
		}elseif($post['Gender']=='Ms.'){
			$gender=0;
		}
		$server_source=$_SERVER['HTTP_HOST'];

// 对other message 进行拼接处理.
		$other_message = '';
		$other_message .= '<b>Adults: </b>'.$this->data['adults'];
		$other_message .='<br />';
		$other_message .=($this->data['children']>0)?'<b>Children: </b>'.$this->data['children']:'';
		$other_message .='<br />';
		$other_message .=($this->data['infant']>0)?'<b>Infant: </b>'.$this->data['infant']:'';
		$other_message .='<br />';
		$other_message .=!empty($this->data['age'])?'<b>Age: </b>'.$this->data['age']:'';
		$other_message .='<br />';
		$other_message .=!empty($this->data['hotelinfo'])?'<b>Hotel Info: </b>'.$this->data['hotelinfo']:'';
		$other_message .='<br />';
		$other_message.=$room_type_info;
		$other_message .='<br />';
		$other_message .=!empty($_POST['destinations'])?'<b>Destinations :</b>'.$_POST['destinations']:'';
		$other_message .='<br />';
		$other_message .="<b>IN YOUR TEAM :</b>".$_POST['your_team']."<br/>";
		$other_message .='<br />';
		$other_message .=!empty($this->data['specialrequest'])?'<b>Special Request: </b>'.$this->data['specialrequest']:'';
		
// 同步订单的数组.
		$arr_sync_data = array(
			'orderNO'	=> $order_str,
			'full_name'	=>$_POST['Order']['full_name'],
			'gender'	=>$gender,
			'packagecode'	=>$_POST['packagecode'],
			'email'	=>$this->data['email'],
			'phone'	=>$this->data['moblie'],
			'addr'	=>'',
			'adults'	=>$this->data['adults'],
			'children'	=>$this->data['children'],
			'infant'	=>$this->data['infant'],
			'entry_date'	=>$this->data['traveltime'],
			'duration'	=>$this->data['duration'],
			'other_travelinfo'	=>$other_message,
			'url_referer'	=>$_POST['referer_url'],
			'submit_source'	=>$server_source,
			'user_ip'	=>$ip,
			'dateline'	=>$_POST['Order']['dateline'],
			'ordertype'	=>(int)$_POST['ordertype'],
			'end_date'	=>'',
			'payment_method'	=>'',
			'passenger_info'	=>'',
			'discount_type'	=>'',
			'order_purpose'	=>'',
			'total_price'=>'',
			'final_price'	=>'',
			'is_activity'	=>'',
			'destination'	=>'',
			'other_message'	=>$other_message
		);
		
	 }
	if(Yii::app()->request->isPostRequest && $this->validate()){
		// add to database;
		$gender = trim($_POST['Order']['gender']);
		if($gender=='Mr.'){
			$gender = 1;
		}else if($gender=='Mrs.'){
			$gender = 0;
		}else{
			$gender = 2;
		}

		$package_id = (int)$_POST['package_id'];

		$city_info='start: '.$this->data['startcity'].', to: '.$this->data['city'];

		 if((int)$_POST['ordertype']==1){ // 3为定制订单.

			$sql="insert into `jos_cos_tours_order` set `orderNO`='{$order_str}',`hotel`='{$this->data['hotelinfo']}',`order_user`='{$_POST['Order']['full_name']}',`tour_code`='{$_POST['packagecode']}',`entry_date`='{$this->data['traveltime']}',`duration`='{$this->data['duration']}',`destinations`='{$_POST['destinations']}',`adults`={$this->data['adults']},`children`={$this->data['children']},`infant`={$this->data['infant']},`url_referer`='{$_POST['referer_url']}',`usr_ip`='{$ip}',`other_mes`='{$other_messages}',`order_purpose`={$_POST['order_purpose']},`dateline`='{$_POST['Order']['dateline']}',`order_state`=0";

		    Yii::app()->db->createCommand($sql)->query();

		   $last_order_id = Yii::app()->db->getLastInsertID(); // 获取新插入的order id。

			/** contact table.**/ 

			$sql_contact = "insert into	`jos_cos_user_contact` set `orderid`={$last_order_id},`full_name`='{$_POST['Order']['full_name']}',`gender`={$gender},`email`='{$this->data['email']}',`phone`='{$this->data['moblie']}'";

			Yii::app()->db->createCommand($sql_contact)->query();

			$insertid1 = Yii::app()->db->getLastInsertID(); //获取contact表的id.
// 写入插入的id.

			Yii::app()->db->createCommand("UPDATE `jos_cos_tours_order` SET `contactid`={$insertid1} WHERE `id`={$last_order_id}")->query(); //table 2 again.

			$this->syncOrder($arr_sync_data);// sync order end;

		 }else{ // 其它类型的订单接口.
			
		 }
		$this->redirect('/message/'); // 跳转到成功的页面;
	 }
  }

 // 验证表单必选项.
  protected function validate(){
		if ((strlen($_POST['Order']['full_name']) < 1) || (strlen($_POST['Order']['full_name']) > 32)) {
				$this->error['error_fullname'] = $json['error']['full_name'] = 'Full Name must be between 1 and 32 characters!';
			}
		if ((strlen($_POST['Order']['email']) > 96) || !preg_match('/^[^\@]+@.*\.[a-z]{2,6}$/i', $_POST['Order']['email'])) {
				$this->error['error_email'] = $json['error']['email'] = 'E-Mail Address does not appear to be valid!';
			}
		if (strlen($_POST['traveltime']) <1) {
				$this->error['error_traveltime'] = $json['error']['traveltime'] = 'Travel time can not be empty!';
			}
			if (strlen($_POST['duration']) <1) {
				$this->error['error_duration'] = $json['error']['duration'] = 'Duration can not be empty!';
			}
			if(isset($json) && !empty($json)){ //	验证不通过; $_POST['traveltime']
				return false;
			}else{
				return true;
			}
  }
// sync order.
private function syncOrder($data){ //  订单同步.
	// 1.对 jos_cos_tours_order 表进行操作.
	Yii::app()->db->createCommand()->insert(
		'joomla.jos_total_order',
		$data
	);
	/*
	// 2. 对 jos_cos_user_contact 表进行操作.
	$arr_contact = array(
		'orderid'=>$data['orderNO'],
		'full_name'	=>$data['full_name'],
		'gender'	=>$data['gender'],
		'addr'	=>$data['addr'],
		'nationality'	=>$data['nationality'],
		'email'	=>$data['email'],
		'other_email'	=>$data['other_email'],
		'phone'	=>$data['phone'],
		'subscribe'	=>'',
		'is_activity'	=>$data['is_activity'],
		Yii::app()->db->createCommand()->insert(
		'joomla.jos_cos_user_contact',
		$arr_contact
		);
	);*/
 }
//set pagehead;
	protected function setPageHeader(){
		$this->setPageTitle("Tailor made Your Own Zhangye Tours, Customize China Tours");
		// Yii::app()->clientScript->registerMetaTag('keywords','gansu travel, zhangye gansu, gansu china tours');
		Yii::app()->clientScript->registerMetaTag('Unable to find a package to meet your specific requirements? Our specialists will help you create your own unique China tour.');
  }
}
