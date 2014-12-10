<?php include 'header.php'; ?>



<div class="row">

	<div class="large-9 columns signup-container">

		<h1>Sign up Today!</h1>
		<h2>For your first free Awareness Treatment Session</h2>
		<p>We have revolutionized the field of neural bio-logistics and you can reap the rewards of the latest advances and research of mind / body connection. Sign up today for a one time offer, free session and "Become Aware" Today!</p>

		<form method="POST" class="signup-form" action="submit_signup.php">

			<div class="row">

				<div class="large-6 columns">

					<label for="fname" class="visuallyhidden">First Name</label>
					<input type="text" id="fname" name="fname" placeholder="First Name" class="signup-fname" required>

				</div>

				<div class="large-6 columns">

					<label for="lname" class="visuallyhidden">Last Name</label>
					<input type="text" id="lname" name="lname" placeholder="Last Name" class="signup-lname" required>

				</div>

			</div>

			<p>Do you consider yourself loyal?</p>

			<div class="row">

				<div class="large-6 columns">

			<label style="float:left;" for="loyal-yes">Yes</label>
			<input style="float:left; margin-left: 15px;" class="signup-loyal" type="radio" id="loyal-yes" name="signup-loyal" value="yes" required><br>

				</div>

				<div class="large-6 columns">

			<label style="float:left;" for="loyal-no">No</label>
			<input style="float:left; margin-left: 15px;" class="signup-loyal" type="radio" id="loyal-no" name="signup-loyal" value="no" required>

				</div>


			</div>

			<div class="row">

				<div class="large-6 columns">

					<label for="difname" class="visuallyhidden">What name do others mistakenly call you?</label>
					<input type="text" id="difname" name="difname" placeholder="What name do others mistakenly call you?" class="signup-difname" required>

				</div>

				<div class="large-6 columns">

					<label for="email" class="visuallyhidden">Email</label>
					<input type="email" id="email" name="email" placeholder="Your@email.com" class="signup-email" required>

				</div>

			</div>

			<label for="why" class="visuallyhidden">Why do you want your free Awareness Session?</label>
			<textarea id="why" name="why" placeholder="Why do you want your free Awareness Session?" class="signup-why" class="signup-why" required></textarea>

			<div class="row">

				<div class="large-8 columns">

					<h3>You agree to:</h3>

					<p class="disclaimer">Participate and cooperate fully in the session until the full extent of the session is complete.</p>
					<p class="disclaimer">Under no circumstances are you allowed to terminate any and all awareness sessions even under the observation to be counter-intuitive, pleasurable, offensive, confusing, disorientating or otherwise off-putting. </p>
					<p class="disclaimer">Keep everything you experience in the awareness sessions confidential and agree to not disclose any information about the session to close friends, family and loved ones.</p>
					<p class="disclaimer">Avoid bringing any type or appearance of recording equipment or devices that may capture video, audio or any other information during the session</p>
					<p class="disclaimer">Keep a clean, happy, and positive attitude!</p>

					<input id="agreed" type="checkbox" value="agreed">
					<label for="agreed">I have read the terms and agree completely without question.</label><br>

					<input type="submit" class="button signup-button" value="Sign up!">

				</div>

			</div>

		</form>

	</div>

</div>

<?php include 'footer.php'; ?>