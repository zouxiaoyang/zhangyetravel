<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- blueprint CSS framework -->
<?php   
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap/bootstrap.css');
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/main.css');
		Yii::app()->clientScript->registerCoreScript('jquery');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/bootstrap/bootstrap.min.js');
	?>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<?php 
	$current_url  = Yii::app()->request->getUrl();
?>
<body>
<div id="page">
  <div id="header">
    <div id="top_bar" class="hidden-xs">
      <div class="container">
        <div class="row">
          <div class="zy_contacts">
            <ul>
              <li class="phone"><i class="fa fa-phone">&nbsp;</i> +86-551-65355416</li>
              <li class="email"><i class="fa fa-email">&nbsp;</i> <a href="mailto:service@leadtochina.com">Service@leadtochina.com</a></li>
              <li class="chat"><i class="fa fa-chat">&nbsp;</i> <a href="javascript:void(0)" onClick="window.open('http://messenger.providesupport.com/messenger/travelthing.html',  '_blank','menubar=0,location=0,scrollbars=auto,resizable=1,status=0,width=650,height=680')">Live Chat</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="top_nav">
      <div class="container" style="padding:0">
        <div class="row">
          <div class="col-md-2 col-sm-3 hidden-xs logo"><a href="/"><img src="/images/index/zy_logo.png" alt="logo" class="img-responsive"></a></div>
          <div class="col-md-10 col-sm-9 col-xs-12 pull-right">
            <nav class="navbar navbar-default navbg" role="navigation" style="z-index:99999">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                 <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <div class="navbar-brand visible-xs">                       
                 <a rel="nofollow" href="/">Home</a> | 
                 <a rel="nofollow" href="">Creat My Trip</a>
               </div>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav chNav">
                  <li <?php if($current_url=='/'){?> class="zy_bobt" <?php } ?>><a rel="nofollow" href="/">Home</a></li>
                  <li <?php if($current_url=='/rainbow-mountain-china/'){?> class="zy_bobt" <?php } ?>><a href="/rainbow-mountain-china/">Rainbow Mountains</a></li>
                  <li <?php if($current_url=='/tours/zhangye.htm'){?> class="zy_bobt" <?php } ?>><a rel="nofollow" href="/tours/zhangye.htm">Zhangye Tours</a></li>
                  <li <?php if($current_url=='/tours/gansu.htm'){?> class="zy_bobt" <?php } ?>><a rel="nofollow" href="/tours/gansu.htm">Gansu Tours</a></li>
                  <li <?php if($current_url=='/tours/silk-road.htm'){?> class="zy_bobt" <?php } ?>><a rel="nofollow" href="/tours/silk-road.htm">Silk Road Tours</a></li>
                  <li <?php if($current_url=='/zhangye-travel-guide/'){?> class="zy_bobt" <?php } ?>><a rel="nofollow" href="/zhangye-travel-guide/">Zhangye Travel Guide</a></li>
                </ul>
              </div>
            </nav>
          </div>
          </div>
        </div>
    </div>
  </div>
  <!-- header -->
  <!-- mainmenu -->
  <?php if(isset($this->breadcrumbs)):?>
  <?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
  <!-- breadcrumbs -->
  <?php endif?>
  <?php echo $content; ?>
  <div class="clear"></div>
  <div id="footer">
   <div class="hidden-xs container" style="padding:0">
    <div class="row">
     <div class="col-md-3 col-sm-3 zy_foottext">
      <p>Company</p>
      <ul>
       <li><a href="/aboutus.htm">About Us</a></li>
       <li><a href="/contactus.htm">Contact Us</a></li>
       <li><a href="/paymentguide.htm">Payment Guide</a></li>
       <li><a href="/termsofuse.htm">Terms of Use</a></li>
       <li><a target="_blank" href="http://www.leadtochina.com">Lead to China</a></li>
      </ul>
     </div>
     <div class="col-md-3 col-sm-3 zy_foottext">
      <p>Popular Vacations</p>
      <ul>
       <li><a href="/rainbow-mountain-china/">Rainbow Mountains</a></li>
       <li><a href="/tours/zhangye.htm">Zhangye Tours</a></li>
       <li><a href="/tours/gansu.htm">Gansu Tours</a></li>
       <li><a href="/tours/silk-road.htm">Silk Road Tours</a></li>
       <li><a href="/tours/create-my-trip.htm">Customize China Tour</a></li>
      </ul>
     </div>
     <div class="col-md-6 col-sm-6 zy_footimg"><a href="http://www.leadtochina.com/" target="_blank"><img src="/images/index/zy_lead.png" alt=""></a><a href="http://www.tripadvisor.com/Attraction_Review-g294212-d7081825-Reviews-Lead_to_China_Beijing_Private_One_day_Tour-Beijing.html" target="_blank"><img src="/images/index/zy_trip2014.png" alt=""></a><a href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_Tours_Day_Tour-Hefei_Anhui.html" target="_blank"><img src="/images/index/zy_trip2015.png" alt=""></a></div>
    </div>
   </div>
   
   <div class="hidden-xs container zy_footbot">
    <div class="row">
     <div class="col-md-9 col-sm-9">
      <p>Copyright@2015 Zhangye Travel. All Rights Reserved.</p>
      <p>Main Office: 9#504, Xinhua, Shitai Road, Hefei City, Anhui, China</p>
      <p>Zhangye Office: No.79, the South Street, Zhangye City, China</p>
     </div>
     <div class="col-md-3 col-sm-3" style="text-align:right">
      <ul class="list-inline">
       <li><a href="/privacypolicy.htm">Privacy Policy</a></li>
       <li><a href="/sitemap.htm">Sitemap</a></li>
       <li><a href="/links.htm">Useful Links</a></li>
      </ul>
     </div>
    </div>
   </div> 
    <div class="visible-xs">
     <p class="zy_foottext2">Copyright@2015 Zhangye Travel. All Rights Reserved.</p>
      </div>

  </div>
  <!-- footer -->
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61919467-2', 'auto');
  ga('send', 'pageview');

</script>

<!-- Google Code for zhangye travel -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_label = "RATnCKu1v18Q3o7h3QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=1.00&amp;currency_code=CNY&amp;label=RATnCKu1v18Q3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- page -->
<!-- BEGIN ProvideSupport.com Visitor Monitoring Code -->
<div id="ci9hyy" style="z-index:100;position:absolute"></div><div id="sd9hyy" style="display:none"></div><script type="text/javascript">var se9hyy=document.createElement("script");se9hyy.type="text/javascript";var se9hyys=(location.protocol.indexOf("https")==0?"https":"http")+"://image.providesupport.com/js/1jwneyoxwtzi519cii2ipjulsv/safe-monitor.js?ps_h=9hyy&ps_t="+new Date().getTime();setTimeout("se9hyy.src=se9hyys;document.getElementById('sd9hyy').appendChild(se9hyy)",1)</script><noscript><div style="display:inline"><a href="http://www.providesupport.com?monitor=1jwneyoxwtzi519cii2ipjulsv"><img src="http://image.providesupport.com/image/1jwneyoxwtzi519cii2ipjulsv.gif" style="border:0px" alt=""/></a></div></noscript>
<!-- END ProvideSupport.com Visitor Monitoring Code -->
</body>
</html>
