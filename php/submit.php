<?php


// specify your email here

$to = 'alexrowansmith@googlemail.com';



	// Assigning data from $_POST array to variables

    if (isset($_POST['subject'])) { $subject = $_POST['subject']; }
    if (isset($_POST['message'])) { $message = $_POST['message']; }

	// Construct email body
	$body_message = 'Message: ' . $message . "\r\n";

	// Construct headers of the message


	$mail_sent = mail($to, $subject, $body_message);

	if ($mail_sent == true){ ?>
<script language="javascript" type="text/javascript">
		window.alert("Sent Successfuly.");
		</script>
<?php } else { ?>
<script language="javascript" type="text/javascript">
                    window.alert("Error! Please Try Again Later.");
                </script>
<?php
	} // End else

?>
