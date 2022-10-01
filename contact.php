<?php
if(isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) ){
	$n=$_POST['n'];
	$e=$_POST['e'];
	$m=n12br($_POST['m']);
	$to="channakagunawardana@gmail.com";
	$from = $e;
	$subject = "Msg From a Cutomer";
	$message =" <b>Name:</b>".$n.'<br><b>Email:</b>'.$e.'<p>'.$m.'</p>';
	$headers="Form: $form\n";
	$headers="MIME-Version: 1.0\n";
	$headers="Content-type: text/html; charset=iso-8859-1\n";
	if (mail($to,$subject,$message,$headers) ) {
		echo "Success";
	}
	else{
		echo " The Server failed to  send the messege.Please try again";
	}

}
?>