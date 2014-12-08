<?php include 'header.php'; ?>

<div class="row">

	<div class="faq-container large-9 columns" role="content">

		<h1>Frequently Asked Questions</h1>

		<h2>What is AQ?</h2>
		<p>You've heard of IQ, right? It's just like that but instead of measuring your Intelligence, we measure your awareness so you can better judge the steps you need to take</p>

		<h2>Why is <i>Awareness important</i>?</h2>
		<p>Do you want to go through life asleep? Of course not. You want to experience life to it's fullest and not miss a single, blessed thing. Our cutting-edge, neurological semi-invasive technology, along with our revolutionary Awareness Treatment Sessions (ATS) will help spark your brain to new levels of awareness and change your reality forever.</p>

		<h2>What are the <i>Awareness Treatment Sessions</i> (ATS)?</h2>
		<p>Come and find out! Nothing more to be said.</p>
		<p>But first, <a href="test.php">take the test</a>.</p>

		<h2>What are some steps I can take now to start become <i>Aware</i>?</h2>
		<p>Small things help like meditation, recreational pharmaceuticals, but our patented device and step-by-step <i>ATS</i> is your best bet toward <i>Awareness</i> and <i>Enlightenment</i></p>

		<h2>What is your company all about?</h2>
		<p>We're here for you. We want the world to share our same views and reality. Come join us and bring a friend!</p>

		<h2>How can I join your cause?</h2>
		<p><a href="test.php">Take the test</a>.</p>

	</div>

	<div class="large-3 columns">

		<div class="sidebar">

			<a target="_blank" href="http://theindex.tv"><img class="old-machine" src="img/the-old-machine.jpg"><img class="roll-warning visuallyhidden" src="img/do-not-take-this-test.jpg"></a>
			<p class="image-descr">Fun fact: Take a peek at an early protoype!</p>

		</div>

	</div>

</div>

<script type="text/javascript">

	$(document).ready(function() {

		var noTestFired = false;

		$('.old-machine').on('mouseover.beaware', function(e) {

			if ( noTestFired == false ) {

				$('.old-machine').attr('src', 'img/do-not-take-this-test.jpg');
				noTestFired = true;

			} else {

				$('.old-machine').attr('src', 'img/the-old-machine.jpg');

			}

		});

		$('.old-machine').on('mouseout.beaware', function(e) {

			$('.old-machine').attr('src', 'img/the-old-machine.jpg');

		});

	});

</script>

<?php include 'footer.php'; ?>