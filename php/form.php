<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Douglas Herrera'; 
    $to = 'dougu1802@gmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
		echo "Thank You!" . " -" . "<a href='https://dougu1802.github.io/ctva461-portfolio/' style='text-decoration:none;color:#d00d2d;'> Return to Homepage</a>";
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>