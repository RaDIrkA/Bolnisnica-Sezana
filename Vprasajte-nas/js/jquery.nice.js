
jQuery(document).ready(function(){

	$('#nicecontactform').submit(function(){

		var action = $(this).attr('action');

		$("#status").slideUp(750,function() {
		$('#status').hide();

 		$('#contact_btn')
			.after('<img src="Vprasajte-nas/images/ajax-loader.gif" class="loader" />')
			.attr('disabled','disabled');

		$.post(action, {
			name: $('#username').val(),
			email: $('#emailid').val(),
			phone: $('#phone').val(),
			subject: $('#subject').val(),
			message: $('#message').val(),
			verify: $('#captcha').val()
		},
			function(data){
				$('status').fadeIn(200, function() {$('status').focus();});
				document.getElementById('status').innerHTML = data;
				$('#status').slideDown('slow');
				$('#nicecontactform img.loader').fadeOut('slow',function(){$(this).remove()});
				$('#contact_btn').removeAttr('disabled');
			
			if(data.match('success') != null)
			{
			$('#username').val('');
			$('#emailid').val('');
			$('#phone').val('');
			$('#subject').val('');
			$('#message').val('');
			$('#captcha').val('');
			}
				//if(data.match('success') != null) $('#nicecontactform').slideUp('slow');

			}
		);

		});

		return false;

	});

});




