<?php include 'header.php'; ?>

<div class="row">
	
	<div class="large-9 columns contact-container">
		
		<h1>Contact us</h1>
		<p>We'd love to hear from you! <span class="twitch">Join us.</span></p>

		<form method="POST" class="contact-form" action="submit_contact.php">
			
			<div class="row">
				
				<div class="large-6 columns">
					
					<label for="name" class="visuallyhidden">Name</label>
					<input type="text" id="name" name="name" placeholder="Name" class="contact-name" required>

				</div>

				<div class="large-6 columns">
					
					<label for="email" class="visuallyhidden">Email</label>
					<input type="email" id="email" name="email" placeholder="Your@email.com" class="contact-email" required>

				</div>

			</div>

			<label for="message" class="visuallyhidden">Your Message</label>
			<textarea id="message" name="message" placeholder="Your Message" class="contact-message" class="contact-message" required></textarea>

			<input type="submit" class="button contact-button" value="Say hi!">

		</form>

	</div>

</div>

<footer class="row">
	<div class="large-12 columns">
		<hr/>
		<div class="row">
			<div class="large-6 columns">
				<p>&copy; Logos. All Rights Reserved.</p>
			</div>
			<div class="large-6 columns">
				<ul class="inline-list right">
				<li><a href="index.php">home</a></li>
					<li><a href="test.php">take the test</a></li>
					<li><a href="signup.php">sign up for FREE</a></li>
					<li><a href="faq.php">faq</a></li>
					<li><a href="contact.php">contact us</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/foundation.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>