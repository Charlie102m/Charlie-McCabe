<?php

// set empty error array
$error = "";
// set empty successMsg array
$successMsg = "";
// send emails to me!
$emailTo = "charlie102m@gmail.com";
// email headers for use on mail send
$headers = "From: no-reply@charliemccabe.co.uk";


// if post array has content
if ($_POST) {

    $msg = $_POST['name']." ".$_POST["email"]." ".$_POST["message"];

    // check if name ! does not have content
    if (!$_POST["name"]) {
        // append to error array
        $error .= "A name is required!<br>";
    }
    // check if email ! does not have content
    if (!$_POST["email"]) {
        // append to error array
        $error .= "An email is required!<br>";
    }
    // check if subject ! does not have content
    if (!$_POST["subject"]) {
        // append to error array
        $error .= "A subject is required!<br>";
    }
    // check if mailBody ! does not have content
    if (!$_POST["message"]) {
        // append to error array
        $error .= "A message is required!<br>";
    }
    // if there is an email, use php's built in validation method to check if email is valid
    if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
        // append to error array if email is invalid
        $error .= "The email address is invalid";
    }
    // if error array contains is no longer empty
    if($error != "") {
        // feedback to user
        $error = "<div class='alert alert-dismissible alert-danger' role='alert'><strong>There were error(s) in your form:</strong><br>" .$error. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></div>";

    } else {
        // otherwise - form validation has passed - attempt email send & check success
        if (mail($emailTo, $_POST["subject"], $msg, $headers)) {
            // email sent - feedback to user
            $error = "<div class='alert alert-dismissible alert-success' role='alert'>Your message was sent, I'll get back to you asap!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></div>";
        
        } else {
            // if mail fails - feedback the failure to the user
            $error = "<div class='alert alert-dismissible alert-danger' role='alert'><strong>There were error(s) in your form:</strong><br>Your message couldn't be sent right now - Please try again later!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></div>";
        }
    }
}

?>

