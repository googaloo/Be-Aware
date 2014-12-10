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
				success: handleContactSubmission

		});

		} else {

			console.log('nope!');
			return false;

		}

	});

	$('.signup-form').on('submit.beaware', function(e) {

		e.preventDefault();

		var fname = $('.signup-fname').val();
		var lname = $('.signup-lname').val
		var loyal = '';
		$.each($('.signup-loyal'), function(index, item) {

			if ( $(item).prop('checked') ) {

				loyal = $(item).val();

			}

		});
		var difname = $('.signup-difname').val();
		var email = $('.signup-email').val();
		var why = $('.signup-why').val();

		var data = { fname:fname, lname:lname, loyal:loyal, difname:difname, email:email, why:why };

		if ( fname !== '' || email !== '' || why !== '' ) {

			e.preventDefault();

			$.ajax({

				url: 'submit_signup.php',
				type: 'POST',
				data: data,
				success: handleSignupSubmission

			});

		} else {

			console.log('nope!');
			return false;

		}

	});

});

function handleContactSubmission(response) {

	var data = JSON.parse(response);

	if ( data.status == 'success' ) {

		$('.contact-container').html('<h2 style="margin-top: 200px;">Thanks for contacting us. We\'ll contact you very soon...</h2>');

	} else if ( data.status == 'fail' ) {

		$('.contact-container').html('<h2 style="margin-top: 200px;">Uh oh. Something went wrong. Please try again later.</h2>');

	} else {

		console.log('Something else went wrong...');

	}

}

function handleSignupSubmission(response) {

	var data = JSON.parse(response);

	if ( data.status == 'success' ) {

		$('.signup-container').html('<h2 style="margin-top: 200px;">Thanks for signing up! We\'ll contact you very soon...</h2>');

	} else if ( data.status == 'fail' ) {

		$('.signup-container').html('<h2 style="margin-top: 200px;">Uh oh. Something went wrong. Please try again later.</h2>');

	} else {

		console.log('Something else went wrong...');

	}

}

// AQ TEST ///////////////////
// Set up change back
$('.change-back').on('click', function(e) {

	e.preventDefault();

	$('#' + switchback).removeClass('shake');

	var switchback = $(this).data('switchback');

	$('#' + switchback).addClass('shake');

	setTimeout(function(){

		$('#' + switchback).removeClass('shake');

	}, 150);

});