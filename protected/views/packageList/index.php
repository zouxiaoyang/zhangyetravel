<div class="breadcrumb">
 <div class="container"><a href="">Home</a> » <a href="">Zhangye Tours</a> » Classic Tours To Rainbow Mountains China</div>
</div>
<div class="container">
 <div class="row itin_top">
  <div class="col-md-6 col-sm-6 col-xs-12">
   <img src="<?php echo '/'.$res['filedir'].$res['pic'];?>" alt="<?php echo $res['name'];?>" class="img-responsive">
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12">
   <p class="itin_text1"><?php echo $res['name'];?> <span class="itin_text1a"><?php echo $res['days']?> days</span></p>
   <p class="itin_text2">From <?php $arr_price_serialize = unserialize($res['price_serialize']);echo $arr_price_serialize['0']; ?> p/p</p>
   <p class="itin_text3"><span>Tour Code: <?php echo $res['package_code']?></span><span>|</span><span>Tour Type: Private Tour</span></p>
   <p class="itin_text4">Destinations: <?php echo $res['route'];?></p>
   <p class="itin_text5"><?php echo str_replace('***','',$res['attractions']);?></p>
   <p class="itin_text6">
   <a href="<?php echo Yii::app()->createUrl('diy/order',array('packageid'=>$res['id']));?>">
    	<img src="/images/index/int_enquiry.png" alt="" />
    </a>
    <a onclick="window.open('http://messenger.providesupport.com/messenger/travelthing.html',  '_blank','menubar=0,location=0,scrollbars=auto,resizable=1,status=0,width=650,height=680')" href="#">
    	<img alt="" src="/images/index/int_chat.png" />
     </a>
    </p>
  </div>
 </div> 
</div>
<div class="container">
 <div class="itinerary">
  <div class="switchTags" id="itin-list">
   <ul>
    <li class="selected" onclick="_tab.change('tab1', this);"><a href="javascript:void(0);">Day By Day Itinerary</a></li>
    <?php 
		if(!IS_MOBILE){
	?>
		<li onclick="_tab.change('tab2', this);"><a href="javascript:void(0);">Price Details</a></li>
	<?php } ?>

	<li class=""><a href="/tours/create-my-trip.htm">customize Tour</a>
	</li>
 
   </ul>
  </div>
  <div id="tab1" >
   <div class="row">
    <div class="col-md-9 col-sm-9 col-xs-12 itin_day">
	<?php
		$specific_day=1;
		foreach($res_des as $v){
	?>
     <div class="itin_day1">
      <p class="itin_day1_tit">Day <?php echo $specific_day;?> – <?php echo $v['today_route'];?></p>
		<?php 
			// remove the extra marks;
			$arr_activities = explode('***',str_replace(array('<p>','<P>','</P>','</p>','<p></p>','<P></P>','<div><br></div>'),array('','','','','',''),trim($v['activities'])));
			$arr_activities = array_filter($arr_activities);
			foreach($arr_activities as $activity){
					if(!strstr($activity,'<p')&&!strstr($activity,'<P')){
						echo  '<p class="itin_day1_txt1">',str_replace(array('<p>','<p','<P','</p>'),array('','<p class="itin_day1_txt1" ','<p class="itin_day1_txt1" ',''),$activity),'</p>';
					}else{
						echo  str_replace(array('<p>','<p','<P','</p>'),array('','<p class="itin_day1_txt1" ','<p class="itin_day1_txt1" ',''),$activity);
					}
			}
		?>
	  <?php if($v['hotel_name']){?>
		 <p class="itin_day1_txt3"><i class="fa fa-cloud">&nbsp;</i><?php echo $v['hotel_name'];?></p>
	  <?php }?>
	  <?php if($v['eat_standard']){ ?>
		 <p class="itin_day1_txt2"><i class="fa fa-meals">&nbsp;</i>Meals: <?php echo $v['eat_standard'];?></p>
	  <?php } ?>
	   <ul class="list-inline hidden-xs">
		  <?php 
				$sql_image = "select * from jos_cos_tours_des_image where packageid=".(int)$v['packageid']." and cid=".(int)$v['id']." order by id asc limit 3";
				$res_image = Yii::app()->db->createCommand($sql_image)->queryAll();	
				foreach($res_image as $val){
			?>
			 <li><p class="itin_day1_img2"><img src="<?php echo $val['image_path'];?>" alt="<?php echo $val['image_alt'];?>"></p><p class="itin_day1_img1"><?php echo !empty($val['image_alt'])?$val['image_alt']:'';?></p></li>
		 <?php } ?>
	  </ul>
     </div>
	<?php $specific_day++; } ?>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
    <form action="/message/" method="post" onsubmit="return valiate();">
     <div class="itin_form">
      <p class="itin_form_tit1">Quick Inquiry</p>
      <p class="itin_form_tit2">Are you interested in this tour?<br /> This tour can be tailored.</p>
      <div class="question_cont">
       <div class="infoRequired">
        <p style="display: block;">
         <input placeholder="Full Name" name="Message[username]" id="Message_username" type="text" maxlength="70" /></p>
        <p style="display: block;">
         <input placeholder="Email" name="Message[email]" id="Message_email" type="text" /></p>
        <p class="des" style="display: block;">
         <textarea placeholder="Requirements: how many people and Departure date? Do you just want a quote? Or shall we tailor this tour? How?" name="Message[message]" id="Message_message"></textarea>        
       </p>
      </div>
     <input class="sendButton"  type="submit" value="Send my inquiry">
     </div>
     </div>
     </form>
   </div>
  </div>
  </div>
  <!-- trip faq -->
  <div id="tab2" style="display:none" class="hidden-xs">
   <div class="row">
    <div class="col-md-9 col-sm-9 col-xs-12 itin_price">
     <div class="itin_price1">
      <p class="itin_price1_tit">This trip from <span>$<?php  $arr_package_price = unserialize($res['price_serialize']);echo $arr_package_price[0]; ?></span> Per Person</p>
	  <p><?php echo strip_tags(trim($res['price_instruction']));?></p>
     </div>
     <div class="itin_price1">
      <p class="itin_price1_tit">Price Inclusions</p>
	  <?php 
		 $arr_price_include  = explode('</p>',trim($res['price_include']));
		 $arr_price_include= array_filter($arr_price_include);
	  ?>
      <ul>
		<?php 
			foreach($arr_price_include as $value){ 
					if(strip_tags($value)){
				?>
			<li><?php echo strip_tags($value);?> </li>
	   <?php } } ?>
      </ul>
     </div>
	<div class="itin_price1">
      <p class="itin_price1_tit">Price Exclusion</p>
	  <?php 
		 $arr_price_include  = explode('</p>',trim($res['price_exclude']));
		 $arr_price_include= array_filter($arr_price_include);
	  ?>
      <ul>
		<?php 
			foreach($arr_price_include as $value){ 
					if(strip_tags($value)){
				?>
			<li><?php echo strip_tags($value);?> </li>
	   <?php } } ?>
      </ul>
     </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
    <form action="" method="post">
     <div class="itin_form">
      <p class="itin_form_tit1">Quick Inquiry</p>
      <p class="itin_form_tit2">Are you interested in this tour?<br /> This tour can be tailored.</p>
      <div class="question_cont">
       <div class="infoRequired">
        <p style="display: block;">
         <input placeholder="Full Name" name="Message[username]" id="Message_username" type="text" maxlength="70" /></p>
        <p style="display: block;">
         <input placeholder="Email" name="Message[email]" id="Message_email" type="text" /></p>
         <p class="des" style="display: block;">
         <textarea placeholder="Requirements: how many people and Departure date? Do you just want a quote? Or shall we tailor this tour? How?" name="Message[message]" id="Message_message"></textarea>
		 <span class="error_message" style="display:none;">Message can not be empty!</span>
       </p>
      </div>
     <input class="sendButton"  type="submit" value="Send my inquiry">
     </div>
     </div>
     </form>
   </div>
  </div>
  </div>
</div>
</div>
<div class="itin_relate hidden-xs">
 <div class="container">
  <h1>Related Tours</h1>
  <ul>
  <?php 
	foreach($random_image as $val_image){
  ?>
   <li class="itin_relate_ml"><a href="<?php echo Yii::app()->createUrl('packageList/index', array('packageid'=>$val_image['id'],'title'=>strtolower(str_replace(' ','-',$val_image['name']))));?>"><img src="<?php echo '/'.$val_image['filedir'].$val_image['pic'];?>" alt="<?php echo $val_image['name'];?>" height="185" width="275"><p class="glright"><?php echo $val_image['name'];?></p></a></li>
   <?php } ?>
  </ul>
 </div>
</div>
<script type="text/javascript">
  _tab = {
    change:function(tabid, obj){
      if(tabid == 'tab1'){
		 //  alert(tabid);
        $("#tab2").hide();
        $("#tab1").show();
      }if(tabid == 'tab2'){
		  // alert(tabid);
        $("#tab1").hide();
        $("#tab2").show();
      }
      $(obj).parents("ul").find("li").removeClass("selected");
      $(obj).addClass("selected");
    }
  }
</script>
<script type="text/javascript">
	function valiate(){
		// alert('this is a test!');
		var flag=true;
		if($('#Message_email').val()==''){
			$('#Message_email').css('border','1px red dotted');
			flag = false;
		}else{
			$('#Message_email').css('border','');
		}
		if($('#Message_username').val()==''){
			$('#Message_username').css('border','1px red dotted');
			flag = false;
		}else{
			$('#Message_username').css('border','');
		}
		if($('#Message_message').val()==''){
			$('#Message_message').css('border','1px red dotted');
			$('.error_message').show();
			flag = false;
		}else{
			$('#Message_message').css('border','');
		}
		if(!flag){
			return false;
		}
	}
</script>
