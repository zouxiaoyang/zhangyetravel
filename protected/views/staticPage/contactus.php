<div class=""><img alt="" src="/images/staticpage/contact_banner.jpg" class="img-responsive"></div>
<div class="breadcrumb1">
  <div class="container"><a href="">Home</a> » Contact Us</div>
</div>
<div class="contact_main">
 <div class="container">
   <div style="padding:20px 0 0 0;">Please fill in the form below. We will reply you within 1 working day! Your privacy is highly 
        valued with Lead To China! You are always welcome to visit our office.</div>
   <div class="contact_form">
        <form id="message-form" action="/message/doask" method="post" onsubmit="return valiate();">
          <div class="row pt10">
            <div class="col-lg-2 col-sm-2 col-xs-12">
              <label for="name">Your Name <span class="required">*</span></label>
            </div>
            <div class="col-lg-5 col-sm-5 col-xs-12 contact_input">
              <input size="30" style="text-transform:capitalize" name="Message[username]" id="Message_username" type="text" maxlength="70" />
            </div>
          </div>
          <div class="row pt10">
            <div class="col-lg-2 col-sm-2 col-xs-12">
              <label for="email">Your E-mail <span class="required">*</span></label>
            </div>
            <div class="col-lg-5 col-sm-5 col-xs-12 contact_input">
              <input size="30" class="safyemail autoemail" style="margin-bottom:0" name="Message[email]" id="Message_email" type="text" />
            </div>
          </div>
          <div class="row pt10">
            <div class="col-lg-2 col-sm-2 col-xs-12">
              <label for="name">Category: <span class="required">*</span></label>
            </div>
            <div class="col-lg-5 col-sm-5 col-xs-12 contact_input">
              <select name="message_type" id="selectcantact">
                <option value="Travel Enquiries" selected="selected">Travel Enquiries</option>
                <option value="Website Feedbacks">Website Feedbacks</option>
                <option value="Partnerships">Partnerships</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>
          <div class="row pt10">
            <div class="col-lg-2 col-sm-2 col-xs-12">
              <label for="comments">Your Message <span class="required">*</span> </label>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12 contact_rig1">
              <textarea rows="4" cols="40" name="Message[message]" id="Message_message"></textarea>
            </div>
            <div class="col-lg-4 col-sm-4 hidden-xs contact_txt1">
             <ul>
              <li>Number of people in your group including yourself</li>
              <li>Length of stay in China</li>
              <li>City or cities of entry/exit</li>
              <li>Start date of Tour</li>
              <li>Places or attraction that you want to visit</li>
              <li>Class of Hotel: tourist/deluxe/superior</li>
              <li>Estimative total budget per person</li>
              </ul>
            </div>
          </div>
          <div class="row pt10">
            <div class="col-lg-2 col-sm-2 col-xs-12">
              <label for="comments"></label>
            </div>
            <div class="col-lg-6 col-sm-6 contact_but">
             <input type="submit" class="diy_button1" value="Send My Message" />
            </div>
          </div>
        </form>
      </div>

    </div>
</div>
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