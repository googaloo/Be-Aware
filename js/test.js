(function() {

	var hackerMessage = new (function() {

		this.init = init,
		this.message1 = 'Stop',
		this.message2 = 'NOW',
		this.message3 = 'Do NOT submit this test',
		this.message4 = 'THEY will find you',
		this.msgNum = 0;

	});

	// Saving minds
	$('.trig').on('click.betrayers', function(e) {

		e.preventDefault();
		hackerMessage.init();

	});

	function sendMessage(type, newMessage, timeDelay, typeSpeed) {

		var messageClass = 'hmsg' + hackerMessage.msgNum;

		var im = '<div class="hack-msg">';
		im += '<h3>rE4LI7y</h3>';
		im += '<p class="' + messageClass + '"></p>';
		im += '</div>';

		setTimeout(function() {

			$('.h-messages').append(im);
			$('.' + messageClass).on('typed', function() {

				$(this).typed({

					strings:[newMessage],
					typeSpeed: typeSpeed

				});

			});
			$('.' + messageClass).on('yup', function() {

				console.log('yo mama');
			});

			$('.' + messageClass).trigger('typed');

		}, timeDelay);

	}

	function init() {

		$('.h-im').slideDown(250);
		sendMessage('hacker', hackerMessage.message1, 1000, 100);

	}

})();