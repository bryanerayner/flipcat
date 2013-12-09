<div class="cols2">
	<div class="colHeader col1">Contact FlipCat</div>
	<div class="colBody">
				<br /><br />
		
		<?php
		if(isset($_POST["submit"])):
		?>
			<h1 class='jobTitle'>Your message has been sent. We will get back to you shortly!</h1>

		<?php 
			else:
		?>
		<form method="POST" action="?page=contact">
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
		
		<br /><br />
				Give us a call, or send us an email and we will get back to you as soon as possible! Follow us through social media to hear about the latest news!<br /><br />
				<b>Inquiries:</b><br /><br />info@flipcat.com<br />145 Albert St.<br />K2J 9G0<br />Ottawa, ON
				</div>
				<div class="colFooter">&nbsp;</div>
			 </div>
<div class="cols3">
	<div class="colHeader col3">Recent Work</div>
	<div class="colBody">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    <div class="colFooter"><span class="readMoreOrange">Read More</span></div>
</div>