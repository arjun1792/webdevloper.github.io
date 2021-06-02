<?php

$text = $_REQUEST['name'];

$Email = $_REQUEST['Email'];

$text = $_REQUEST['subject'];

$message = $_REQUEST['message'];

//check inout
if (empty($name) || empty($Email) || empty($text) || empty($message)) {
	# code..
		echo "please fill all the fields";
}
else{
	mail("amungara26@gmail.com", "webtech message", $message,"From :$text<$Email>");
	echo "<script type='text/javascript'>alert(your message sent successfully');
		window.history.log(-1);
	</script>";
}

?>