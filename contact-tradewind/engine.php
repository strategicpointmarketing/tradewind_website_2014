<?php

$EmailFrom = "<$EmailFrom>";
$EmailTo = "webteam@strategicpointmarketing.com";
$Subject = "Tradewind Distribution: Contact Submission";
$Name = Trim(stripslashes($_POST['Name'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

$Headers = "From: $Email \r\n";
$Headers .= "Reply-To: $Email \r\n";

$loadtime = $_POST["loadtime"];

$totaltime = time() - $loadtime;

if($totaltime > 3)
{
	// send email 
	$success = mail($EmailTo, $Subject, $Body, $Headers);
}

// redirect to success page 
if ($success){
	//dump data into a CSV file
	
	$line = "$Name,$Tel,$Email,$Message," . date('d-m-Y');
	$handle = fopen("submissions.csv", "a");
	fputcsv($handle, explode(',',$line));
	fclose($handle);

	


  print "<meta http-equiv=\"refresh\" content=\"0;URL=/contact-tradewind/thanks.php\">";


}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/contact-tradewind/error.php\">";
}


?>