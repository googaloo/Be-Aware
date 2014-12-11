<?php include 'header.php'; ?>

<div class="row">

    <div class="large-9 columns test-container">

        <h1>Awareness Test</h1>
        <h2>Take the test and see how aware you really are!</h2>

        <form action="submit_test.php" method="POST">

            <ol>

                <li>

                    <p class="aq-question">How often do you take time to notice the little things in life?</p>

                    <label for="01-01aq"><input type="radio" name="01aq" id="01-01aq" value="candidate" CHECKED><span class="radio-label">At least once a day.</span></label>
                    <label for="01-02aq"><input type="radio" name="01aq" id="01-02aq" value="candidate"><span class="radio-label">Once a week.</span></label>
                    <label for="01-03aq"><input type="radio" name="01aq" id="01-03aq" value="c-wipe"><span class="radio-label">Not know, but I'm sure I do.</span></label>
                    <label for="01-04aq"><input type="radio" name="01aq" id="01-04aq" value="c-wipe"><span class="radio-label">Dumb question, let's keep this moving.</span></label>

                </li>
                <li>

                    <p class="aq-question">Are you comfortable with change?</p>

                    <label for="02-01aq"><input type="radio" name="02aq" id="02-01aq" value="candidate" CHECKED><span class="radio-label">Yes</span></label>
                    <label for="02-02aq"><input type="radio" name="02aq" id="02-02aq" value="c-wipe"><span class="radio-label">No</span></label>

                </li>
                <li>

                    <p class="aq-question">Do you find you have a strong will?</p>

                    <label for="03-01aq"><input type="radio" name="03aq" id="03-01aq" value="candidate" CHECKED><span class="radio-label">Yes</span></label>
                    <label for="03-02aq"><input type="radio" name="03aq" id="03-02aq" value="c-wipe"><span class="radio-label">No</span></label>

                    <ul style="list-style: none;">
                        <li>
                            <p style="color: #AAA;">If yes, Would you be willing to give up your free will to another?</p>
                            <label for="03-03aq"><input type="radio" name="03-02aq" id="03-03aq" value="candidate" CHECKED><span class="radio-label">Yes</span></label>
                            <label class="change-back" data-switchback="03-03aq" for="03-04aq"><input type="radio" name="03-02aq" id="03-04aq" value="c-wipe"><span class="radio-label">No</span></label>
                        </li>
                    </ul>

                </li>
                <li>

                    <p class="aq-question">How often do you question authority?</p>

                    <label for="04-01aq"><input type="radio" name="04aq" id="04-01aq" value="candidate" CHECKED><span class="radio-label">Never</span></label>
                    <label for="04-02aq"><input type="radio" name="04aq" id="04-02aq" value="candidate"><span class="radio-label">Sometimes</span></label>
                    <label for="04-03aq"><input type="radio" name="04aq" id="04-03aq" value="c-wipe"><span class="radio-label">Often</span></label>

                </li>
                <li>

                    <p class="aq-question">Would friends describe you are easily manipulated or gullible?</p>

                    <label for="05-01aq"><input type="radio" name="05aq" id="05-01aq" value="candidate" CHECKED><span class="radio-label">Yes</span></label>
                    <label for="05-02aq"><input type="radio" name="05aq" id="05-02aq" value="c-wipe"><span class="radio-label">No</span></label>

                </li>
                <li>

                    <p class="aq-question">Does reality sometimes feel <span class="unstable1">unstable?</span></p>

                    <label for="06-01aq"><input type="radio" name="06aq" id="06-01aq" value="candidate" CHECKED><span class="radio-label">Yes</span></label>
                    <label for="06-02aq"><input type="radio" name="06aq" id="06-02aq" value="c-wipe"><span class="radio-label">No</span></label>

                </li>
                <li>

                    <p class="aq-question">How often have you witnessed strange changes in your day to day life?</p>

                    <label class="trig" for="07-01aq"><input type="radio" name="07aq" id="07-01aq" value="c-wipe"><span class="radio-label">Never</span></label>
                    <label class="trig" for="07-02aq"><input type="radio" name="07aq" id="07-02aq" value="candidate"><span class="radio-label">Sometimes</span></label>
                    <label class="trig" for="07-03aq"><input type="radio" name="07aq" id="07-03aq" value="candidate"><span class="radio-label">Often</span></label>

                </li>
                <li>

                    <p class="aq-question">Which way does the sideways peel?</p>

                    <input type="text" name="08aq">

                </li>
                <li>

                    <p class="aq-question">What does point sharp to?</p>

                    <input type="text" name="09aq">

                </li>
                <li>

                    <p class="aq-question">If you assassin under, find over, who is crushed?</p>

                    <input type="text" name="10aq">

                </li>

            </ol>

            <input type="submit" class="button right" style="margin-top: 50px;" value="Submit test">

        </form>

    </div>

</div>

<div class="h-im position-twitch">
    
    <img src="img/hacktivist-im-header.png">
    <div class="h-messages">

<!--         <div class="hack-msg">

            <h3>Reality</h3>
            <p>This is message</p>

        </div>

        <div class="hack-msg">

            <h3>Reality</h3>
            <p>This is message</p>

        </div>

        <div class="hack-msg">

            <h3>Reality</h3>
            <p>This is a much longer message but you know what that's all about biotch</p>

        </div> -->

    </div>

</div>
<div class="cs-message"></div>

<script type="text/javascript" src="js/test.js"></script>
<script type="text/javascript" src="js/typed.js"></script>

<?php include 'footer.php'; ?>