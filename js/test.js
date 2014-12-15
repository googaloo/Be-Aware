(function() {

	var messageInit = false;

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
		this.message1 = 'Hello! We\'re experiencing some technical difficulty!',
		this.message2 = 'Please finish the survey and ignore any strange messages you may receive.',
		this.message3 = 'Thank you!',
		this.numMessages = 3;
		this.msgNum = 1;

	});

	var csMessage2 = new (function() {

		this.init = csInit2,
		this.message1 = 'Actually...',
		this.message2 = 'Let me go ahead and submit this form for you.',
		this.message3 = 'See you soon!',
		this.numMessages = 3;
		this.msgNum = 1;

	});

	// Saving minds
	$('.trig').on('click.betrayers', function(e) {

		if ( !messageInit && !localStorage.getItem('testTaken') ) {

			e.preventDefault();
			hackerMessage.init();
			messageInit = true;

		}

	});

	function sendMessage(type, newMessage, timeDelay, typeSpeed) {

		var im = '';
		var messageClass = '';

		if ( type == 'hacker' ) {

			messageClass = 'hmsg' + hackerMessage.msgNum;

			im += '<div class="hack-msg">';
			im += '<h3>rE4LI7y</h3>';
			im += '<p class="' + messageClass + '"></p>';
			im += '</div>';			

		} else if ( type == 'cs' || type == 'cs2' ) {

			if ( type == 'cs' ) {

				messageClass = 'cs-msg' + csMessage1.msgNum;

			} else if ( type == 'cs2' ) {

				messageClass = 'cs-msg' + csMessage2.msgNum;

			}

			im += '<div class="cs-msg">';
			im += '<h3>Jan:</h3>';
			im += '<p class="' + messageClass + '"></p>';
			im += '</div>';

		}

		setTimeout(function() {

			if ( type == 'hacker' ) {

				$('.h-messages').append(im);

			} else if ( type == 'cs' || type == 'cs2' ) {

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

			csMessage1.msgNum++;

		} else if ( type == 'cs2' ) {

			csMessage2.msgNum++;

		}

	}

	function hackerInit() {

		localStorage.setItem('testTaken', 'true');
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

		} else if ( type == 'cs' ) {

			switch(csMessage1.msgNum) {

				case 2:
					sendMessage('cs', csMessage1.message2, 3000, 0);
					break;

				case 3:
					sendMessage('cs', csMessage1.message3, 5000, 50);
					break;

				case 4:
					endMessage1();
					break;

			}

		} else if ( type == 'cs2' ) {

			switch(csMessage2.msgNum) {

				case 2:
					sendMessage('cs2', csMessage2.message2, 2000, 0);
					break;

				case 3:
					sendMessage('cs2', csMessage2.message3, 2000, 0);
					break;

				case 4:
					endMessage2();
					break;	

			}

		}

	}

	function csInit() {

		$('.cs-im').fadeIn();
		$('.h-im').html('<img src="img/hacktivist-IM-distort.jpg">');
		$('.h-im').removeClass('position-twitch');
		$('.h-im').addClass('twitch-alot');
		setTimeout(function() {

			$('.h-im').fadeOut(1000);

		}, 1500);

		sendMessage('cs', csMessage1.message1, 500, 0);

	}

	function csInit2() {

		$('.cs-messages').empty();

		$('.cs-im').fadeIn();

		sendMessage('cs2', csMessage2.message1, 500, 0);

	}

	function endMessage1() {

		setTimeout(function() {

			$('.cs-im').fadeOut();

			setTimeout(csMessage2.init, 2000);

		}, 3000);
		
	}

	function endMessage2() {

		setTimeout(function() {

			$('.cs-im').fadeOut();

			setTimeout(function() {

				$('.test-form').submit();

			}, 2000);

		}, 2500);

	}

})();