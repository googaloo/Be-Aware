$(document).ready(function() {

	$('.contact-form').on('submit.beaware', function(e) {

		var name = $('.contact-name').val();
		var email = $('.contact-email').val();
		var message = $('.contact-message').val();

		var data = { name:name, email:email, message:message };

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

		$('.contact-container').html('<h2 style="margin-top: 200px;">Thanks for contacting us. We\'ll contact you very soon...</h2>');

	} else if ( data.status == 'fail' ) {

		$('.contact-container').html('<h2 style="margin-top: 200px;">Uh oh. Something went wrong. Please try again later.</h2>');

	} else {

		console.log('Something else went wrong...');

	}

}