(function() {

	var hackerMessage = new (function() {

		this.init = hackerInit,
		this.message1 = 'Stop',
		this.message2 = 'NOW',
		this.message3 = 'Do NOT submit this test',
		this.message4 = 'THEY will find you',
		this.numMessages = 4;
		this.msgNum = 1;

	});

	var csMessage1 = new (function() {

		this.init = csInit,
		this.message1 = 'Hello! We’re experiencing some technical difficulty!',
		this.message2 = 'Please finish the survey and ignore any strange messages you may receive.',
		this.message3 = 'Thank you!',
		this.numMessages = 3;
		this.msgNum = 1;

	});

	// Saving minds
	$('.trig').on('click.betrayers', function(e) {

		e.preventDefault();
		hackerMessage.init();

	});

	function sendMessage(type, newMessage, timeDelay, typeSpeed) {

		var im = '';

		if ( type == 'hacker' ) {

			var messageClass = 'hmsg' + hackerMessage.msgNum;

			im += '<div class="hack-msg">';
			im += '<h3>rE4LI7y</h3>';
			im += '<p class="' + messageClass + '"></p>';
			im += '</div>';

			

		} else if ( type == 'cs' ) {

			var messageClass = 'cs-msg' + csMessage1.msgNum;

			im += '<div class="cs-msg">';
			im += '<h3>Jan:</h3>';
			im += '<p class="' + messageClass + '"></p>';
			im += '</div>';

			csMessage1.msgNum++;

		}

		setTimeout(function() {

			if ( type == 'hacker' ) {

				$('.h-messages').append(im);

			} else if ( type == 'cs' ) {

				$('.cs-messages').append(im);

			}
			
			$('.' + messageClass).on('typed', function() {

				$(this).typed({

					strings:[newMessage],
					typeSpeed: typeSpeed

				});

			});

			$('.' + messageClass).trigger('typed');

			nextMessage(type);

		}, timeDelay);

		if ( type == 'hacker' ) {
			hackerMessage.msgNum++;
		} else if ( type == 'cs' ) {
			csMessage.msgNum++;
		}

	}

	function hackerInit() {

		$('.h-im').slideDown(250);
		sendMessage('hacker', hackerMessage.message1, 1000, 100);

	}

	function nextMessage(type) {

		if ( type == 'hacker' ) {

			switch(hackerMessage.msgNum) {

				case 2:
					sendMessage('hacker', hackerMessage.message2, 1000, 50);
					break;

				case 3:
					sendMessage('hacker', hackerMessage.message3, 3000, 50);
					break;

				case 4:
					sendMessage('hacker', hackerMessage.message4, 4000, 50);
					break;

				case 5:
					setTimeout(csMessage1.init, 4000);
					break;

			}

		}

	}

	function csInit() {

		alert('oh snap!');

	}

})();