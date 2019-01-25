<?php

function died($error) {
    // your error code can go here
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error."<br /><br />";
    echo "Please go back to basics and fix these errors.<br /><br />";
    exit();
}

try {
    require_once('./class.phpmailer.php');
    if(isset($_POST['email'])) {

        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        $company = $_POST['company'];
        $phone = $_POST['phone'];
        $subject = $name . " contacting you via Elpatronit.com";


        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        $string_exp = "/^[A-Za-z .'-]+$/";


            if(!array_key_exists('gotcha', $_POST)) {
            died("Who do you think you are trying to abuse us.");
        }

        if(!preg_match($email_exp, $email)) {
            $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        }

        if(!preg_match($string_exp,$name)) {
            $error_message .= 'The Name you entered does not appear to be valid.<br />';
        }

        if(strlen($error_message) > 0) {
            died($error_message);
        }

        $html_body = "Name: " . $name . "<br>" . "Email: " . $email . "<br>" . "Company: " . $company . "<br>" . "Phone: " . $phone . "<br>" . "Message: " . $message;

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = "smtp.office365.com";
        $mail->Port       = 587;
        $mail->SMTPSecure = "tls";
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV["USERNAME"];
        $mail->Password   = $_ENV["PASSWORD"];
        $mail->SetFrom($_ENV["USERNAME"], "FromEmail");
        $mail->AddAddress("info@elpatronit.com", "ToEmail");
        $mail->IsHTML(true);
        $mail->Subject    = $subject;
        $mail->MsgHTML($html_body);
        if(!$mail->send()) {
            $error_message .= 'Mailer Error: ' . $mail->ErrorInfo;
            died($error_message);
        }
        header("Location:http://elpatronit.com/#contact_success");
        exit();
        }
    else{
        echo "No email found in POST" . $_POST;
    }
}
catch (Exception $e)
{
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>