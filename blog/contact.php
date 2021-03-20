<?php

define('TITLE','Contact Us | Franklin`s Fine Dinig');

include_once('includes/header.php');
?>

<div id="contact">
<hr>

<h1>Get in touch with us!</h1>

<?php 

    function has_header_injection($str){
        return preg_match('/[\r\n]/',$str);
    }

    if(isset($_POST['contact_submit'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $msg = $_POST['message'];

        if(has_header_injection($name) || has_header_injection($email)){    
            die();
        }

        if(!$name || !$email || !$msg){
            echo "<h4 class='error'> All fields required.</h4><a href='contact.php' class='button block'> Go back and try again </a> ";
            exit;
        }

        $to = "sobhos2525@gmail.com";

        $subject = "$name Send you an email via your Contact form";

        $message = "Name: $name\r\n";
        $message.= "Email: $email\r\n";
        $message.= "Message: \r\n$msg";


        if(isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscibe'){
            $message .= "\r\n Please add $email to the mailing list. \r\n";
        }

        $message  = wordwrap($message,80);

        $headers = "MIME-Version: 1.0\r\n";
        $headers.= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers.= "From: $name<$email>\r\n";
        $headers.= "X-Priority: 1\r\n";
        $headers.= "X-XSMail-Priority: High\r\n";


        mail($to,$subject,$message,$headers);


?>

<!-- show succes message after email send -->
<h5>Thanks for Contacting Franklin`s</h5>
<p>Please allow 24 hours for response.</p>
<p><a href="index.php" class="button block">&laquo; Go to Home Page</a></p>


<?php }else{ ?>

<form action="" method="post" id="contact-form">

<label for="name">Your name</label>
<input type="text" name="name" id="name">

<label for="email">Your email</label>
<input type="email" name="email" id="email">

<label for="message">Your message</label>
<textarea name="message" id="message" cols="30" rows="10"></textarea>

<input type="checkbox" name="subscribe" id="subscribe" value="Subscribe">
<label for="subscribe">Subscribe to newsletter</label>

<input type="submit" class=" button next" name="contact_submit" value="Send Message">

</form>
<?php } ?>

<hr>

</div>


<?php
include_once('includes/footer.php');
?>
