<?php
	include('includes/header.php');
?>

<h2>Get in touch</h2>

<form class="polaroid">

	<label for="name">Name</label>
	<input name="name" type="text" placeholder="Don Draper">
	
	<label for="email">Email</label>
	<input name="email" type="text" placeholder="doreply@foto.me">
	
	<label for="name">Message</label>
	<textarea name="message" placeholder="Hi Joe Schmo, I've got something super to talk to you about..."></textarea>
	
	<input type="submit" value="send" />

</form>

<?php
	include('includes/footer.php');
?>