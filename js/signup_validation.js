$(document).ready(function() {
  var username_state =  true;
  
  //to validate sign-up form data
  $('#btn_submit').click(function(e) {
  
    e.preventDefault();
	$("#uname_error").show();
	$('#fname_error').text("");
	$('#lname_error').text("");
	$('#email_error').text("");
	$('#uname_error').text("");
	$('#pwd_error').text("");
	$('#confirmpwd_error').text("");
	$('#notmatch_error').text("");
	$("#message").text("");
	var required_msg = "*Required"
	var fname = $("input[name=fname]").val();
	var lname = $("input[name=lname]").val();
	var email = $("input[name=email]").val();
    var user_name = $("input[name=uname]").val();
    var password = $("input[name=password]").val();
	var confpwd = $("input[name=confpwd]").val();
	if (fname.length < 1) {
      $('#fname_error').text(required_msg);
    }
    if (lname.length < 1) {
      $('#lname_error').text(required_msg);
    }
	if (email.length < 1) {
      $('#email_error').text(required_msg);
    }
    if (user_name.length < 1) {
      $('#uname_error').text(required_msg);
    }
    if (password.length < 8) {
      $('#pwd_error').text("*Password must be atleast 8 characters long");
    }
	if (confpwd.length < 1) {
      $('#confirmpwd_error').text(required_msg);
    }
	if(confpwd.length > 1 && password.length >=8)
	{
		if(confpwd != password)
		{
			$('#confirmpwd_error').hide();
			$('#notmatch_error').text("Please make sure your passwords match");
		}
		else
		{	
			$('#confirmpwd_error').show();
		}
	}
	if( fname != "" && lname != "" && email != "" && user_name != "" && username_state==true && password.length > 8 && confpwd.length > 8 && confpwd == password)
	{
            $.ajax({
                url:'checkRegistration.php',
                type:'post',
                data:{
					save:1,
					uname:user_name,
					fname:fname,
					lname:lname,
					email:email,
					password:password
				},
                success:function(response){
                    var msg = "";
                    if(response == 1){
                        window.location = "login.php";
                    }  
					else 
					{
						msg = "Something went wrong";
						$("#message").text(msg);
					}
                },
				error: function (jqXHR, exception) {
			        var msg = '';
			        if (jqXHR.status === 0) {
			            msg = 'Not connect.\n Verify Network.';
			        } else if (jqXHR.status == 404) {
			            msg = 'Requested page not found. [404]';
			        } else if (jqXHR.status == 500) {
			            msg = 'Internal Server Error [500].';
			        } else if (exception === 'parsererror') {
			            msg = 'Requested JSON parse failed.';
			        } else if (exception === 'timeout') {
			            msg = 'Time out error.';
			        } else if (exception === 'abort') {
			            msg = 'Ajax request aborted.';
			        } else {
			            msg = 'Uncaught Error.\n' + jqXHR.responseText;
			        }
			        $('#message').html(msg);
				},
            });
    }
	
  });
  
  //checks if username already exists through onblur event
  $('#checkusername').on('blur', function(){
		$('#alreadytaken_error').text('');
		var username = $("input[name=uname]").val();
		if (username == '') {
			return;
		}
		$.ajax({
			url: 'checkRegistration.php',
			type: 'post',
			data: {
				'username_check' : 1,
				'uname' : username,
			},
			success: function(response){
			if (response == 'taken' ) {
				username_state = false;
				$("#uname_error").hide();
				$('#alreadytaken_error').text('Username already taken');
			}else if (response == 'not_taken') {
				username_state = true;
			}
		}
  });
  });
  
  
  
  $('#login-btn').click(function(e) {
	   window.location = "login.php";

  });

});