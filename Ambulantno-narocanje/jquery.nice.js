
jQuery(document).ready(function(){

	$('#nicecontactform').submit(function(){

		var action = $(this).attr('action');

		$("#status").slideUp(500,function() {
		$('#status').hide();

 		$('#contact_btn')
			.after('<img src="Vprasajte-nas/images/ajax-loader.gif" class="loader" />')
			.attr('disabled','disabled');

		$.post(action, {
			izberi: $('#izberi').val(),
			name: $('#username').val(),
			naslov: $('#naslov').val(),
			datum: $('#datum').val(),
			phone: $('#phone').val(),
			email: $('#emailid').val(),
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
			$('#izberi').val('');	
			$('#username').val('');
			$('#naslov').val('');
			$('#datum').val('');
			$('#phone').val('');
			$('#emailid').val('');
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





