<?php
$title= 'contact';
$if_contact = 'current';
?>
<?php require_once 'header.php' ?>
	
	<div id="contentWrapper" class="contact">
		<form method="post" action="contact.php" class="personal">
			<h2>Contact Danielle</h2>
			
			<label for="name">Full Name:</label>
			<input type="text" name="name">

			<label for="email">Email:</label>
			<input type="text" name="email">

			<label for="message">Message:</label>
			<textarea name="message" cols="40" rows="10"></textarea>

			<label>*What is 2+2? (Anti-spam)</label>
			<input name="human">

			<div class="g-recaptcha" data-sitekey="6LdpQBEUAAAAAASFfUpc-qzyLFS064ANqseLdlE0"></div>

			<input id="submit" name="submit" type="submit" value="Submit">

			<?php
			    $name = $_POST['name'];
			    $email = $_POST['email'];
			    $message = $_POST['message'];
			    $from = 'From: daniellestewart.com'; 
			    $to = 'authordaniellestewart@gmail.com'; 
			    $subject = 'From daniellestewart.com contact from';
			    $human = $_POST['human'];
          		$captcha= $_POST['g-recaptcha-response'];
			    
			    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
			    
			    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdpQBEUAAAAAC5UfRC8FiJ8ebI5fpi3nQpoUpz7&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
							
			    if ($_POST['submit'] && $human == '4' && $response['success'] == true) {				 
			        if (mail ($to, $subject, $body, $from)) { 
					    echo '<p>Your message has been sent!</p>';
					} else { 
					    echo '<p class="contact-form-error">Something went wrong, go back and try again!</p>'; 
					} 
				} else if ($_POST['submit'] && $human != '4') {
					echo '<p class="contact-form-error">You answered the anti-spam question incorrectly!</p>';
			    } else if ($_POST['submit'] && $response['success'] == false ) {
					echo '<p class="contact-form-error">You need to check the recaptcha!</p>';
			    }
			?>
		</form>

		<div id="emailWidgetWrapper">
			<div id="emailWidget">
				<div id="mc_embed_signup">
                    <form method="post" class="af-form-wrapper" action="http://www.aweber.com/scripts/addlead.pl" target="_new" >
                        <div style="display: none;">
	                        <input type="hidden" name="meta_web_form_id" value="1262948544" />
	                        <input type="hidden" name="meta_split_id" value="" />
	                        <input type="hidden" name="listname" value="chasingjustice" />
	                        <input type="hidden" name="redirect" value="" id="redirect_24a4ccd39203562b7fa83500615d135c" />
	                        <input type="hidden" name="meta_adtracking" value="Web_Newsletter_Registration" />
	                        <input type="hidden" name="meta_message" value="1" />
	                        <input type="hidden" name="meta_required" value="name,email" />
	                        <input type="hidden" name="meta_tooltip" value="" />
                        </div>
                        <div id="af-form-1262948544" class="af-form"><div id="af-header-1262948544" class="af-header">
                        	<div class="bodyText">
                        		</strong><p>Free Download of Midnight Magic! Sign up for exclusive updates, reader perks and giveaways.</p></strong>
                        	</div>
                        </div>
                        <div id="af-body-1262948544"  class="af-body af-standards">
                        <div class="af-element">
                        	<label class="previewLabel" for="awf_field-47958761">Name: </label>
                        <div class="af-textWrap">
                        	<input id="awf_field-47958761" type="text" name="name" class="text" value=""  tabindex="500" />
                        </div>
                        <div class="af-clear"></div></div>
                        <div class="af-element">
                        	<label class="previewLabel" for="awf_field-47958762">Email: </label>
                        <div class="af-textWrap"><input class="text" id="awf_field-47958762" type="text" name="email" value="" tabindex="501"  />
                        </div><div class="af-clear"></div>
                        </div>
                        <div class="af-element buttonContainer">
                        	<input name="submit" class="submit" type="submit" value="Submit" tabindex="502" />
                        <div class="af-clear"></div>
                        </div>
                        <div class="af-element privacyPolicy" style="text-align: center">
                        	<p>We respect your <a title="Privacy Policy" href="http://www.aweber.com/permission.htm" target="_blank">email privacy</a></p>
                        <div class="af-clear"></div>
                        </div>
                        	<!--<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p>Powered by AWeber <a href="http://www.aweber.com" title="Email Marketing Services">Email Marketing Services</a></p>
                        		<div class="af-clear"></div>
                        	</div> -->
                        </div>
                        </div>
                        <div style="display: none;">
                        	<img src="http://forms.aweber.com/form/displays.htm?id=jExsTJwsHKwsLA==" alt="" />
                        </div>
                    </form>
                </div>
			</div>
	</div>

<?php require_once 'footer.php' ?>