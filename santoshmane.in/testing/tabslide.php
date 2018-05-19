<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Floating Ajax Contact Form</title>
<link href="css/tabslide.css" rel="stylesheet" type="text/css" />


<script type="text/javascript">
$(document).ready(function(){ 

	var _scroll = true, _timer = false, _floatbox = $("#contact_form"), _floatbox_opener = $(".contact-opener") ;
	_floatbox.css("right", "-300px"); //initial contact form position
	
	//Contact form Opener button
	_floatbox_opener.click(function(){
		if (_floatbox.hasClass('visiable')){
            _floatbox.animate({"right":"-300px"}, {duration: 300}).removeClass('visiable');
        }else{
           _floatbox.animate({"right":"0px"},  {duration: 300}).addClass('visiable');
        }
	});
	
	//Effect on Scroll
	$(window).scroll(function(){
		if(_scroll){
			_floatbox.animate({"top": "150px"},{duration: 300});
			_scroll = false;
		}
		if(_timer !== false){ clearTimeout(_timer); }           
			_timer = setTimeout(function(){_scroll = true; 
			_floatbox.animate({"top": "10px"},{easing: "linear"}, {duration: 500});}, 400); 
	});
	
	
	//Ajax form submit
    $("#submit_btn").click(function() { 
        var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields       
        $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
            $(this).css('border-color',''); 
            if(!$.trim($(this).val())){ //if this field is empty 
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag
            }
            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag              
            }   
        });
    /*   
        if(proceed) //everything looks good! proceed...
        {
            //get input field values data to be sent to server
            post_data = {
                'user_name'     : $('input[name=name]').val(), 
                'user_email'    : $('input[name=email]').val(), 
                'country_code'  : $('input[name=phone1]').val(), 
                'phone_number'  : $('input[name=phone2]').val(), 
                'subject'       : $('select[name=subject]').val(), 
                'msg'           : $('textarea[name=message]').val()
            };
            
            //Ajax post data to server
            $.post('contact_me.php', post_data, function(response){  
                if(response.type == 'error'){ //load json data from server and output message     
                    output = '<div class="error">'+response.text+'</div>';
                }else{
                    output = '<div class="success">'+response.text+'</div>';
                    //reset values in all input fields
                    $("#contact_form  input[required=true], #contact_form textarea[required=true]").val(''); 
                }
                $("#contact_form #contact_results").hide().html(output).slideDown();
            }, 'json');
        }
		*/
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
        $("#result").slideUp();
    });
	
});
function isNumberKey(evt)
       {
          var chCode = (evt.which) ? evt.which : event.keyCode
          if (chCode != 46 && chCode > 31 
            && (chCode < 48 || chCode > 57))
             return false;
          else
          return true;
       }
       
       function isAlpha(keyCode)
        {
            return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
        }
</script>
</head>
<body>

<!-- contact form start -->
<div class="floating-form" id="contact_form">
<form name="ajax-form" id="ajax-form" action="enq.php" method="post">
<div class="contact-opener">Quick Enquiry</div>
    <div class="floating-form-heading">Please Contact Us</div>
    <div id="contact_results"></div>
   <div id="contact_body">
		<input type="hidden" name="action" value="enquiry">
        <label><span>Name <span class="required">*</span></span>
        	<input type="text" name="name" id="name" required="true" class="input-field" onkeydown= "return isAlpha(event.keyCode);">
        </label>
        <label><span>Email <span class="required">*</span></span>
        	<input type="email" name="email" required="true" class="input-field">
        </label>
        <label><span>Phone <span class="required">*</span></span>
        	<input type="text" name="contact" maxlength="10" required="true" class="tel-number-field long" onkeypress="return isNumberKey(event)">
        </label>

        	<label for="field5"><span>Message <span class="required">*</span></span>
        	<textarea name="message" id="message" class="textarea-field" required="true"></textarea>
        </label>
        <label>
        	<span>&nbsp;</span><input type="submit" id="submit_btn" value="Submit" name="submit_btn">
        </label>
    </div>
</form>	
</div>
<!-- contact form end -->


</body>
</html>
