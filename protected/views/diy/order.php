<script src="/js/bootstrap/jqueryUi/jquery.ui.core.js" type="text/javascript" language="javascript"></script>
<script src="/js/bootstrap/jqueryUi/jquery.ui.datepicker.js" type="text/javascript" language="javascript"></script>
<link href="/js/bootstrap/jqueryUi/jquery.ui.core.css" type="text/css" rel="stylesheet">

<div id="content" class="content-order-bg">
<div class=""><img class="img-responsive" src="/images/staticpage/contact_banner.jpg" alt="" /></div>
  
  <div class="container mb30 container-order">
    <div class="row">
      <div class="col-md-9 col-sm-9 col-xs-12 create-order-left">
        <div class="tourSelected">
          <ul>
            <li class="first">You are inquiring on:</li>
            <li><strong>Tour Code:</strong> <?php echo $res['package_code'];?></li>
            <li><strong>Length:</strong> <?php echo $res['days']; ?> Days</li>
            <li><strong>Destinations:</strong> <?php echo $res['route'];?></li>
          </ul>
        </div>
        <form action="<?php echo Yii::app()->createUrl('diy/order',array('packageid'=>$res['id']));?>" method="POST" id="order_form" onsubmit="return validate()">
          <h3>
            <label>1</label>
            Your idea about this tour </h3>
          <div class="field-group-row">
            <div class="field-group">
              <div class="field">
                <label for="Title" class="required" aria-required="true">Adults (>12)</label>
                <select onchange="if(this.value=='');else style='color:#000;width:165px;'" style="width:195px;" class="passeng" name="adults" id="adult_num">
				<?php 
					for($i=1;$i<=30;$i++){ ?>
					
					<option <?php echo ($i==2)?'selected="selected"':'';?> value="<?php echo $i;?>"><?php echo $i; ?></option>
						
				<?php } ?>

                </select>
              </div>
            </div>
            <div class="field-group">
              <div class="field">
                <label for="Title" aria-required="true">Children(2-12) </label>
                <select onchange="if(this.value=='');else style='color:#000;width:165px; '" style="width:195px; " name="children" class="passeng" id="children_num">
				<?php 
					for($i=0;$i<=30;$i++){ ?>
					
					<option <?php echo ($i==0)?'selected="selected"':'';?> value="<?php echo $i;?>"><?php echo $i; ?></option>
						
				<?php } ?>
                </select>
              </div>
            </div>
            <div class="field-group">
              <div class="field">
                <label for="Title" aria-required="true">Babies (<2)</label>
                <select onchange="if(this.value=='');else style='color:#000;width:165px; margin-right:5px;'" style="width:195px; margin-right:5px;" name="infant" class="passeng" id="infant_num">
				<?php 
					for($i=0;$i<=30;$i++){ ?>
					
					<option <?php echo ($i==0)?'selected="selected"':'';?> value="<?php echo $i;?>"><?php echo $i; ?></option>
						
				<?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="field-group-row">
            <div class="field-group">
              <div class="field">
                <label for="Title" class="required" aria-required="true">Hotel Class</label>
                <select onchange="if(this.value=='');else style='color:#000;width:195px; margin-right:10px;'" style="width:195px; margin-right:10px;" name="hotel_class" id="hotel_class">
                  <option selected="selected" value="3 star"> -----   3 star   ----- </option>
                  <option value="4 star"> -----   4 star   ----- </option>
                  <option value="5 star"> -----   5 star   ----- </option>
                  <option value="No Need"> -----   No Need   ----- </option>
                </select>
                <input type="checkbox" style="margin-left:20px; height:14px;" name="king_bed" value="King Bed" />
                King Bed
                <input type="checkbox" style="margin-left:20px; height:14px;" name="twin_beds" value="Twin Beds" />
                Twin Beds
                <input type="checkbox" style="margin-left:20px; height:14px;" name="one_bed" value="Add One Bed" />
                Add One Bed </div>
            </div>
          </div>
          <div class="field-group-row">
            <div class="field-group">
              <div class="field">
                <label for="Title" class="required" aria-required="true">Approximate Entry Date</label>
                <input type="text" autocomplete="off" name="Order[travel_date]" style="width:195px" placeholder=" mm/dd/yyyy" class="calendarIcon Wdate" id="Order_travel_date" />
              </div>
            </div>
            <div class="field-group">
              <div class="field">
                <label for="Title" aria-required="true">Approximate Duration<span class="required">*</span></label>
                <input type="text" autocomplete="off"  name="Order[duration]" style="width:195px" id="Order_duration" />
                days </div>
            </div>
          </div>
          <h3>
            <label>2</label>
            Your Personal Information </h3>
          <div class="field-group-row">
            <div class="field-group">
              <div class="field">
                <label for="Title" class="required" aria-required="true">Full Name:</label>
                <select onchange="if(this.value=='');else style='color:#000; float:left; margin-right:5px;'" style="float:left; margin-right:5px;" name="Gender" id="sex">
                  <option value="Mr.">Mr.</option>
                  <option value="Mrs.">Mrs.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Miss.">Miss.</option>
                  <option value="Dr.">Dr.</option>
                  <option value="Prof.">Prof.</option>
                  <option value="Lord.">Lord.</option>
                  <option value="Lady.">Lady.</option>
                  <option value="Sir.">Sir.</option>
                </select>
                <input type="text" style="width:200px;float:left;" id="full_name" name="Order[full_name]" />
              </div>
            </div>
            <div class="field-group">
              <div class="field">
                <label for="Title" aria-required="true">In Your Team:</label>
                <select onchange="if(this.value=='');else style='color:#000;width:270px;'" style="width:270px;" name="your_team" id="your_team">
                  <option selected="selected" value="Senior/Elderly">Senior/Elderly</option>
                  <option value="Family with kids">Family with kids</option>
                  <option value="Youth">Youth</option>
                  <option value="Couple">Couple</option>
                  <option value="Teacher/Student">Teacher/Student</option>
                  <option value="Doctor">Doctor</option>
                  <option value="Solo Traveler">Solo Traveler</option>
                  <option value="Golf player">Golf player</option>
                  <option value="Photographer">Photographer</option>
                  <option value="Artist">Artist</option>
                  <option value="Romanticist">Romanticist</option>
                  <option value="Philanthropist">Philanthropist</option>
                </select>
              </div>
            </div>
          </div>
          <div class="field-group-row">
            <div class="field-group">
              <div class="field">
                <label for="Title" class="required" aria-required="true">E-mail Address:</label>
                <input type="text" style="width:270px" id="Order_email" name="Order[email]" />
              </div>
            </div>
            <div class="field-group">
              <div class="field">
                <label for="Title" aria-required="true">Contact Phone Number:</span></label>
                <input type="text" style="width:270px" id="phone3" name="Order[phone]" />
              </div>
            </div>
          </div>
          <div class="field-group">
              <div class="field full-width">
                <label for="OtherComments">Additional Requirements: (Optional)</label>
                <textarea  name="specialrequest" id="OtherComments"  cols="40" rows="8"></textarea>
               </div>
            </div>
            <div class="" style="float:left; margin:20px 0 0 0;" ><img class="img-responsive" src="/images/index/security-img01.gif" alt="" /></div>
			<input type="hidden" value="<?php echo $res['id'];?>" name="package_id" />
			<input type="hidden" value="1" name="ordertype" />
			<input type="hidden" value="0" name="order_purpose">
			<input type="hidden" value="1" name="new_com_order">
			<input type="hidden" value="<?php echo $res['package_code'];?>" name="packagecode">
			<input type="hidden" value="<?php echo $res['route'];?>" name="destinations">
			<input type="hidden" value="0" name="order_purpose">
			<input id="referer_url" type="hidden" value="<?php echo Yii::app()->request->urlReferrer;?>" name="referer_url">
            <input type="submit" class="cta" value="Start my journey" />
            <p class="brand-colour">We promise to keep your personal information safe, and will never pass it on to 3rd parties.</p>
        </form>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 rm_lebut create-order-right">
        <label>SEND AN ENQUIRY</label>
        <p> Please kindly fill out the form to place your entire request. 
          It is <b>FREE</b> and <b>NOT</b> a commitment for booking.</p>
        <p> A tour expert will contact you shortly through the email address to further discuss your trip and coordinate all the tour details with you. We will only call you if you ask, or for email issues.For urgent booking, </p>
        call us at<br />
        <span>0086 551 65355416.</span> </div>
    </div>
  </div>
</div>

<script>
	
	$("#Order_travel_date").datepicker({
	  changeMonth: true,
	  numberOfMonths: 2,
	});

// js validate;
function validate(){

	var reg = /^[^\@]+@.*\.[a-z]{2,6}$/i;

	if($('#Order_travel_date').val()==''){
		alert(' Travel time can not be empty!');
		return false;
	}else if($('#Order_duration').val()==''){
		alert('Duration can not be empty!');
		return false;
	}else if($('#Order_full_name').val()==''){
		alert('Full Name must be between 1 and 32 characters!');
		return false;
	}else if(!reg.test($('#Order_email').val())){
		alert('E-Mail Address does not appear to be valid!');
		return false;
	}
}

</script>