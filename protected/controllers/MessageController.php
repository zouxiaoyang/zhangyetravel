<?php

class MessageController extends Controller{

	public function actionIndex(){
		
		$ip  =  Yii::app()->request->userHostAddress;

		 if (filter_var ($_POST['Message']['email'], FILTER_VALIDATE_EMAIL )) {  
				$email = trim($_POST['Message']['email']);
			} else {  
				$error_email = 'Error Email';
			} 
			if(!strstr(strtolower($_POST['Message']['message']),'http:') && !strstr(strtolower($_POST['Message']['message']),'.com') && !strstr(strtolower($_POST['Message']['message']),'www.') &&!strstr(strtolower($_POST['Message']['message']),'<a>')){
				$message = addslashes(trim($_POST['Message']['message'])); 
			}else{
				$error_message ='Error Message';
			}

			if(strlen(trim($_POST['Message']['username']))<20){
				$username  = addslashes(trim($_POST['Message']['username']));
			}else{
				$error_username = 'Error Username';
			}

			if(!isset($error_email)&&!isset($error_message)&&!isset($error_username)){
				// sql
				$addr = $_SERVER['HTTP_REFERER'];
				
				$arr_insert = array(
						'username'=>$username,
						'email'=>$email,
						'message'=>$message,
						'ip'=>$ip,
						'addr'=>$addr,
						'dateline'=>time()
					);

				Yii::app()->db->createCommand()->insert('jos_cos_message',$arr_insert);
			// 同步留言.
				$this->syncMessage($arr_insert);
			}
		$this->render('index');
	}

	public function actionDoask(){

		
	
			
		$ip  =  Yii::app()->request->userHostAddress;

		 if (filter_var ($_POST['Message']['email'], FILTER_VALIDATE_EMAIL )) {  
				$email = trim($_POST['Message']['email']);
			} else {  
				$error_email = 'Error Email';
			} 
			if(!strstr(strtolower($_POST['Message']['message']),'http:') && !strstr(strtolower($_POST['Message']['message']),'.com') && !strstr(strtolower($_POST['Message']['message']),'www.') &&!strstr(strtolower($_POST['Message']['message']),'<a>')){
				$message = addslashes(trim($_POST['Message']['message'])); 
			}else{
				$error_message ='Error Message';
			}

			if(strlen(trim($_POST['Message']['username']))<20){
				$username  = addslashes(trim($_POST['Message']['username']));
			}else{
				$error_username = 'Error Username';
			}

			$message_type = addslashes(trim($_POST['message_type']));
			
		//	echo $error_username,$error_message,$error_email,'<br>';exit;

			if(!isset($error_email)&&!isset($error_message)&&!isset($error_username)){
				// sql
				$addr = $_SERVER['HTTP_REFERER'];
				//echo $sql="insert into `jos_cos_message` set `email`='".$email."',`message`='".$message."',`username`='".$username."',`ip`='".$ip."',`dateline`='".time()."',`addr`='".$addr."',`message_type`='".$message_type."'";exit;
				$arr_insert = array(
						'username'=>$username,
						'email'=>$email,
						'message'=>$message,
						'ip'=>$ip,
						'addr'=>$addr,
						'message_type'=>$message_type,
						'dateline'=>time()
					);
				Yii::app()->db->createCommand()->insert('jos_cos_message',$arr_insert);

			// 同步留言.
				$this->syncMessage($arr_insert);

				$this->redirect('/success.htm');
			}else{
				// 有错误;
			}
		
	}
// 同步留言函数.
	protected function syncMessage($data){
		
		$sync_mess = array(
				'username'=>$data['username'],
				'email'=>$data['email'],
				'message'=>$data['message'],
				'ip'=>$data['ip'],
				'referer_url'=>$data['addr'],
				'message_type'=>isset($data['message_type'])?$data['message_type']:'',
				'dateline'=>time()
		);

		Yii::app()->db->createCommand()->insert('joomla.jos_cos_message',$sync_mess);
	}
}