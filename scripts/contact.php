<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['contactname']) && !empty($_POST['contactemail']) && !empty($_POST['contactmessage'])) {
	$to = 'kirilenko.danila@gmail.com'; // Your e-mail address here.
	$body = "\nName: {$_POST['contactname']}\nEmail: {$_POST['contactemail']}\n\n\n{$_POST['contactmessage']}\n\n";
	mail($to, "Message from https://the-idg-foundation.github.io/site.tidgf", $body, "From: {$_POST['contactemail']}"); // E-Mail subject here.
    }
}
?>