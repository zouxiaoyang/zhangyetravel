<div class="breadcrumb">
 <div class="container"><a href="">Home</a> » Error</div>
</div>
<div class="container error-block">
	<h1>Sorry ! Page Not Found</h1>
    <p>You may have entered a wrong URL or this page has been moved to somewhere else. Need any help? Please leave a message here.</p>
    <div class="error-form">
    	<span>Need Help? Contact Us Now</span>
        <div class="question_cont">
		<form action="<?php echo Yii::app()->createUrl('message/doask');?>" method="POST" onsubmit="return valiate();">
			   <div class="infoRequired">
				<p style="display: block;" class="des">
				 <textarea id="Message_message" name="Message[message]" placeholder=""></textarea>        
			   </p>
				<p style="display: block; text-align:left; width:265px; float:left; margin:0 30px 0 0 ;">
				<label>Name:</label>
				 <input type="text" maxlength="70" id="Message_username" name="Message[username]" placeholder="Full Name" /></p>
				<p style="display: block; text-align:left;width:265px; float:left;">
				<label>Email:</label>
				 <input type="text" id="Message_email" name="Message[email]" placeholder="Email" /></p>
			  </div>
			  <input type="hidden" name="message_type" value="error page" />
			 <input type="submit" value="Submit" class="sendButton" />
			 <div class="clear"></div>
		</form>
     </div>
    </div>
</div>

<script type="text/javascript">
	function valiate(){
		var reg = /^[^\@]+@.*\.[a-z]{2,6}$/i;
		var flag=true;
		if(!reg.test($('#Message_email').val())){
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