<?php
if(isset($_POST["submit"])):
?>
	<h1 class='jobTitle'>Your message has been sent. We will get back to you shortly!</h1>

<?php 
	else:
?>
<form id = "contactForm" method="POST" action="?page=contact">
		<b>Your Name</b><br />
		<input type="text" class="form" name="name" required>
		<br /><br />
		<b>Email</b><br />
		<input type="text" class="form" name="email" required>
		<br /><br />
		<b>Message</b><br />
		<textarea name="message" class="form" cols="30" rows="10"></textarea>
		<br /><br />
		<input type="submit" name="submit">
</form>
<?php 
	endif;
?>