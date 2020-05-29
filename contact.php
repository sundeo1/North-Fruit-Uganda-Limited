<?php	
	if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['comments'])) {
		
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comments 	= $_POST['comments'];

		$to = "emailour75@gmail.com"; // this is your Email address
	    $from = $email; // this is the sender's Email address
	    $name 		= $name;
	    $subject = "Submission from website";
	    $subject2 = "Copy of your comment Submission";
	    $message = $name . " wrote the following:" . "\n\n" . $comments;
	    $message2 = "Here is a copy of your comment " . $name . "\n\n" . $comments;
	    
	    // use wordwrap() if lines are longer than 70 characters
		$message = wordwrap($message,70);
		$message2 = wordwrap($message2,70);

	    $headers = "From:" . $from;
	    $headers2 = "From:" . $to;

	    // send email
	    $result = mail($to,$subject,$message,$headers);
	    $result2 = mail($from,$subject2,$message2,$headers2);

		if ($result == true and $result2 == true) {
			# code...
			// Display the alert box  
			echo '<script>
					alert("Message successfully sent, Thank you '.$name.' !!! We\'ll contact you shortly");
					window.location = "index.html";
				</script>';
		}
	}
	else{
		// Display the alert box
		echo '<script>
				alert("Message not sent, Please try again '.$_POST['name'].'");
				window.location = "index.html";
			</script>';
	}
?>