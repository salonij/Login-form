$(document).ready(function() {

//to validate login form data .
  $('#btn_submit').click(function(e) {
  
    e.preventDefault();
	$('#uname_error').text("");
	$('#pwd_error').text("");
	$("#message").text("");
    var user_name = $("input[name=uname]").val();
    var password = $("input[name=password]").val();

    if (user_name.length < 1) {
      $('#uname_error').text('*Required');
    }
    if (password.length < 1) {
      $('#pwd_error').text('*Required');
    }
	if( user_name != "" && password.length > 0 )
	{
            $.ajax({
                url:'checkLogin.php',
                type:'post',
                data:{uname:user_name,password:password},
                success:function(response){
                    var msg = "";
                    if(response == 0){
                        msg = "*Invalid username or password!";
						$("#message").text(msg);
                    }  
					else if(response == 1)
					{
						window.location = "index.php";
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
	
  })

});