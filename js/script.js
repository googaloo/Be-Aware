$(document).ready(function() {

	$('.contact-form').on('submit.beaware', function(e) {

		var name = $('.contact-name').val();
		var email = $('.contact-email').val();
		var message = $('.contact-message').val();

		var data = { name: name, email:email, message:message };
		console.log(data);

		if ( name !== '' || email !== '' || message !== '' ) {

			e.preventDefault();

		$.ajax({

			url: 'submit_contact.php',
			type: 'POST',
			data: data,
			success: handleSubmission

		});

		} else {

			console.log('nope!');
			return false;

		}

	});

});

function handleSubmission(response) {

	var data = JSON.parse(response);

	if ( data.status == 'success' ) {

		$('.contact-container').html('Thanks for contacting us. We\'ll contact you very soon...');

	}

}