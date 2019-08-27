<?php
 
 require_once('Includes/header.php');

?>
<div id="contact">
<h1>get in touch with us!</h1>
<form method="post" action="" id="contact-form">
			<label for="name">Your name</label>
			<input type="text" id="name" name="name">
			
			<label for="email">Your email</label>
			<input type="email" id="email" name="email">
			
			<label for="message">your message</label><br>
			<textarea id="message" name="message"></textarea>
		
			<label for="subscribe" >subscribe</label><input type="checkbox" id="subscribe" value="Subscribe" name="subscribe">
			
			
			<input type="submit" class="button next" name="contact_submit" value="Send Message"><br>
		</form>
</div>

<?php require_once('Includes/footer.php');  ?>