<script language="javascript" type="text/javascript" src="/js/bootstrap/jqueryUi/jquery.ui.core.js"></script>
<script language="javascript" type="text/javascript" src="/js/bootstrap/jqueryUi/jquery.ui.datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/js/bootstrap/jqueryUi/jquery.ui.core.css" />
<div class="breadcrumb1">
 <div class="container"><a href="">Home</a> » Create My Trip</div>
</div>
<div class="diy_bg">
 <div class="container diy_top">
  <h1>Tailor-Made Tours </h1>
  <p class="diy_top_txt1">Unable to find a package to meet your specific requirements? From an existing itinerary that interests you but needs a few extra nights, to a change in accommodation, or a food preference, let us design your travel experience to meet your schedule, budget and particular interests. Our specialists are extremely well-traveled and have visited the destinations and accommodations we use. 
We believe that this first-hand experience is vital when planning your itinerary. 
</p>
  <p class="diy_top_txt1">This short inquiry is FREE and NOT a commitment for booking. Start your journey now !</p>
 </div>
 <div class="container">
 <div class="row">
  <form id="tours-package-form" method="post" action="<?php echo Yii::app()->createUrl('diy/index');?>" onsubmit="return validate();">
  <div class="col-md-8 col-sm-10 col-xs-12">
	   <div class="diy_form">
		<p class="diy_form_tit1">Contact Information</p>
		<div class="row" style="padding:0; margin:0">
	   <div class="diy_form_top col-md-6 col-sm-6 col-xs-12">
		<label>Email<span class="required">*</span></label>
		<input class="email" name="Order[email]" value="<?php echo $data['email'];?>"  id="Order_email" type="text" maxlength="150" />
		<?php if($error['error_email']){ ?>
			<span class="error" style="color:red;font-size:9px"><?php echo $error['error_email'];?></span>
		<?php }?>
	   </div>
	   <div class="diy_form_top col-md-6 col-sm-6 col-xs-12">
		<label>Backup Email</label>
		<input class="telephone" name="Order[backupemail]" value="<?php echo $data['backupemail'];?>" id="Order_backup_email" type="text" maxlength="50" />
	   </div>
	   </div>
		<div class="row" style="padding:0; margin:0">
		<div class="diy_form_top col-md-6 col-sm-6 col-xs-12">
		 <label> Full Name<span class="required">*</span></label>
		 <div class="row">
		 <div class="col-md-3 col-sm-3 col-xs-5">
		  <select  name="Order[gender]">
			<option value="Mr.">Mr.</option>
			<option value="Mrs.">Mrs.</option>
			<option value="Miss.">Miss.</option>
		  </select>
		 </div>
		 <div class="col-md-9 col-sm-9 col-xs-7 pull-right">
		  <input name="Order[full_name]" id="Order_full_name" value="<?php echo $data['full_name'];?>" type="text" maxlength="50" />
		 <?php if($error['error_fullname']){ ?>
			<span class="error" style="color:red;font-size:9px"><?php echo $error['error_fullname'];?></span>
		<?php }?>
		</div>
		</div>
	   </div>
	   <div class="diy_form_top col-md-6 col-sm-6 col-xs-12">
		<label>Your Age</label>
		<select title="Age" name="Age">
		 <option value="">-- please select --</option>
		 <option value="under 25">under 25</option>
		 <option value="25-34">25-34</option>
		 <option value="35-54">35-54</option>
		 <option value="55-75">55-75</option>
		 <option value="75 above">75 above</option>
		</select>
		</div>
		</div>
	   <div class="row" style="padding:0; margin:0">
	   <div class="diy_form_top col-md-6 col-sm-6 col-xs-12">
		<label>Nationality</label>
		<input class="email" name="Order[nationality]" id="Order_nationality" value="<?php echo $data['nationality'];?>" type="text" maxlength="150" />
	   </div>
	   <div class="diy_form_top col-md-6 col-sm-6 col-xs-12">
		<label>Contact Phone Number</label>
		<input class="telephone" placeholder="+country code and number" name="Order[phone]" value="<?php echo $data['moblie'];?>" id="Order_phone" type="text" maxlength="50" />
	   </div>
	   </div>
	  </div>  
	   <div class="diy_form">
		<p class="diy_form_tit1">Preferences and Other Information</p>
		<div class="row" style="padding:0; margin:0">
	   <div class="diy_form_top col-md-6 col-sm-6 col-xs-12">
		<label>Estimated travel time<span class="required">*</span></label>
		<input class="calendarIcon" name="Order[travel_date]" value="<?php echo $data['traveltime'];?>" id="Order_travel_date" type="text" maxlength="100" />
		<?php
			if($error['error_traveltime']){
		 ?>
			<span class="error" style="color:red;font-size:9px"><?php echo $error['error_traveltime'];?></span>
		 <?php } ?>
	   </div>
	   <div class="diy_form_top col-md-6 col-sm-6 col-xs-12">
		<label>Duration<span class="required">*</span></label>
		<input class="calendarIcon" name="Order[duration]" value="<?php echo $data['duration'];?>" id="Order_duration" type="text" maxlength="100" placeholder="How many days?"/>
		<?php
			if($error['error_duration']){
		 ?>
			<span class="error" style="color:red;font-size:9px"><?php echo $error['error_duration'];?></span>
		 <?php } ?>
	   </div>
	   </div>
		<div class="row" style="padding:0; margin:0">
		<div class="diy_form_top col-md-4 col-sm-4 col-xs-12">
		 <label>Adults(>11 years old)<span class="required">*</span></label>
		 <select id="Adults" name="Adults"  class="diy_select3">
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option>
		  <option value="11">11</option>
		  <option value="12">12</option>
		  <option value="13">13</option>
		  <option value="14">14</option>
		  <option value="15">15</option>
		  <option value="16">16</option>
		  <option value="17">17</option>
		  <option value="18">18</option>
		  <option value="19">19</option>
		 </select>     </div>
	   <div class="diy_form_top col-md-4 col-sm-4 col-xs-12">
		<label>Children(2-11 years old)</label>
		<select id="children" name="Children"  class="diy_select3">
		 <option value="0">0</option>
		 <option value="1">1</option>
		 <option value="2">2</option>
		 <option value="3">3</option>
		 <option value="4">4</option>
		 <option value="5">5</option>
		 <option value="6">6</option>
		 </select>    </div>
	   <div class="diy_form_top col-md-4 col-sm-4 col-xs-12">
		<label>Babies(< 2 years old)</label>
		<select id="Babies" name="Babies"  class="diy_select3">
		 <option value="0">0</option>
		 <option value="1">1</option>
		 <option value="2">2</option>
		 <option value="3">3</option>
		 <option value="4">4</option>
		 <option value="5">5</option>
		 <option value="6">6</option>
		</select>    </div>
		</div>
		<div class="row" style="padding:0; margin:0">
		<div class="diy_form_top col-md-6 col-sm-6 col-xs-12">
		 <label>Hotel Class</label>
		 <select id="HotelClass" name="HotelClass">
		  <option value="">-- please select --</option>
		  <option value="Deluxe 5 star">Deluxe 5 star (Above USD230 per night per room)</option>
		  <option value="Standard 5 star">Standard 5 star (USD160-220 per night per room)</option>
		  <option value="Deluxe 4 star">Deluxe 4 star (USD110-150 per night per room)</option>
		  <option value="Standard 4 star">Standard 4 star (USD90-100 per night per room)</option>
		  <option value="Economic 3 star">Economic 3 star (USD60-70 per night per room)</option>
		  <option value="Book by Myself">Book by Myself </option>
		 </select>     
		 </div>
		</div>    
		<div class="row" style="padding:0; margin:0">
		<div class="diy_form_top col-md-5 col-sm-5 col-xs-12">
		 <label>Meal Plan</label>
		 <select id="MealPlan" name="MealPlan">
		  <option value="">-- please select --</option>
		  <option value="Breakfast only">Breakfast only</option>
		  <option value="Breakfast + Lunch">Breakfast + Lunch</option>
          <option value="Breakfast+ Lunch + Dinner">Breakfast+ Lunch + Dinner</option>
		 </select> 
		 </div>
		</div>   
		<div class="row" style="padding:0; margin:0">
		<div class="diy_form_top col-md-5 col-sm-5 col-xs-12">
		 <label>Start City</label>
         <input class="" name="StartCity" value="<?php echo $data['startcity'];?>" id="StartCity" type="text" maxlength="100"/>
		 </div>
		</div>    
		<div class="row" style="padding:0; margin:0">
		<div class="diy_form_top col-md-9 col-sm-9 col-xs-12">
		 <label>Any specific requests or interests ?</label>
		 <textarea id="Request" class="fe" placeholder="destinations, taboos, food preference, photography tours..." style="height:120px;" title="Other Request" name="Request"><?php echo $data['specialrequest'];?></textarea>
		 <?php
			if($error['error_request']){
		 ?>
			<span class="error" style="color:red;font-size:9px"><?php echo $error['error_request'];?></span>
		 <?php } ?>
		 </div>
		</div>  
		<div class="row diy_checkbox" style="padding:0; margin:0">
		 <p class="diy_checklab">We handle private tours in following areas. Please tick the destinations you like to include in your trip</p>
		 <label class="diy_checkbox1"><input type="checkbox" value="Beijing" name="other_city[]">Beijing</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Xi'an" name="other_city[]">Xi'an</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Shanghai" name="other_city[]">Shanghai</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Guilin" name="other_city[]">Guilin</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Yangshuo" name="other_city[]">Yangshuo</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Huangshan" name="other_city[]">Huangshan</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Zhangjiajie" name="other_city[]">Zhangjiajie</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Chengdu" name="other_city[]">Chengdu</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Hangzhou" name="other_city[]">Hangzhou</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Dunhuang" name="other_city[]">Dunhuang</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Datong" name="other_city[]">Datong</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Xinjiang" name="other_city[]">Xinjiang</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Tibet" name="other_city[]">Tibet</label>
		 <label class="diy_checkbox1"><input type="checkbox" value="Inner Mongolia" name="other_city[]">Inner Mongolia</label>
		 </div>
		<div class="diy_button"><input type="submit" class="diy_button1" value="Submit" /><input type="reset" id="resetform" class="diy_button1" value="Cancel"/>
	</div>
	   </div>
  </div>
  <input type="hidden" value='3' name="ordertype" />
  <input type="hidden" value='<?php echo Yii::app()->request->hostInfo.Yii::app()->request->getUrl();?>' name="url_refer" />
</form>
  </div>
 </div>
</div>

<script type="text/javascript">

	$("#Order_travel_date").datepicker({
	  changeMonth: true,
	  numberOfMonths: 2,
	});

// js validate;
function validate(){

	var reg = /^[^\@]+@.*\.[a-z]{2,6}$/i;

	if(!reg.test($('#Order_email').val())){
		alert('E-Mail Address does not appear to be valid!');
		return false;
	}else if($('#Order_full_name').val()==''){
		alert('Full Name must be between 1 and 32 characters!');
		return false;
	}else if($('#Order_travel_date').val()==''){
		alert(' Travel time can not be empty!');
		return false;
	}else if($('#Order_duration').val()==''){
		alert('Duration can not be empty!');
		return false;
	}else if($('#Request').val()==''){
		alert('Specific requests or interests can not be empty!');
		return false;
	}

}
$('#resetform').click=function(){
	$('#tours-package-form')[0].reset();
}
</script>
