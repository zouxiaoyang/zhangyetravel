<?php
/**
*	底部固定链接
**/
class StaticPageController extends Controller{
	
	public function actionAboutus(){

		$title='Zhangye Travel Agency, Zhangye Tour Operator, About Zhangye Travel';
		$des  = 'Zhangye Travel is a leading online tour operator, specialized in operating Zhangye danxia tours, rainbow mountain tours, Zhangye side trips and China tours.';
		$keywords = 'zhangye travel company, zhangye tour operator, zhangye travel agency';


		$this->setPageHeader($title,$keywords,$des);
	
		$this->render('aboutus');
	}

	public function actionContactus(){

		$title='Contact Zhangye Travel - The Leading Online Tour Operator';
		$des  = 'Contact Zhangye Travel: our professional travel consultants will get back to you within 24hrs. The most prompt response and responsible service.';
		$keywords = '';

		$this->setPageHeader($title,$keywords,$des);
	
		$this->render('contactus');
	}

	public function actionPaymentguide(){


		$title='Payment Guide, Methods of Payment, How to Pay - zhangyetravel.com';
		$des  = 'Payment guide at Zhangyetravel: we accept PayPal, Wire Transfer, Visa and Western Union Transfer.';
		$keywords = '';

		$this->setPageHeader($title,$keywords,$des);
	
		$this->render('paymentguide');
	}

	public function actionTermsofuse(){

		$title='Terms and Conditions - zhangyetravel.com';
		$des  = 'Thanks for visiting zhangyetravel.com, we acknowledge that you read and understand the terms and conditions of this web site. We have provided terms and condition in other to keep this web site working well for everyone.';
		$keywords = '';

		$this->setPageHeader($title,$keywords,$des);
	
		$this->render('termsofuse');
	}

	public function actionPrivacypolicy(){

		$title='Privacy and Security Policy -  zhangyetravel.com';
		$des  = 'zhangyetravel.com is committed to your privacy. We will not sell, rent, share or otherwise reveal personal information. ';
		$keywords = '';

		$this->setPageHeader($title,$keywords,$des);
	
		$this->render('privacypolicy');
	}

	public function actionSitemap(){
	
		$this->render('sitemap');
	}
	public function actionLinks(){
	
		$this->render('links');
	}

//set pagehead;
protected function setPageHeader($title,$keywords,$des){

    $this->setPageTitle($title);

    Yii::app()->clientScript->registerMetaTag('keywords',$keywords);

    Yii::app()->clientScript->registerMetaTag('description',$des);

  }

}
