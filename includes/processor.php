<?php 
//this hides ugly PHP notices that you don't want users to see. Comment it out to debug.
error_reporting(E_ALL & ~E_NOTICE);

//if they submitted the form process it.
if($_POST['did_send']){
    // Create variables from the posted variables. Sanitize the user inputs
    // @see http://php.net/manual/en/filter.filters.sanitize.php
    $name     = filter_var($_POST['name'] ,     FILTER_SANITIZE_STRING);
    $email    = filter_var($_POST['email'] ,    FILTER_SANITIZE_EMAIL);
    $phone    = filter_var($_POST['phone'] ,    FILTER_SANITIZE_NUMBER_INT);
    $date     = filter_var($_POST['date'] ,     FILTER_SANITIZE_STRING);
    $category = filter_var($_POST['category'] , FILTER_SANITIZE_STRING);
    $message  = filter_var($_POST['message'] ,  FILTER_SANITIZE_STRING);

    //PHP validation here. Client side validation can be user-disabled
    $valid = true;
    //example - Make the name field required:
    
    //check if name is blank
    if( '' == $name ){
        $valid = false;
        $display_msg = 'Your name is required.<br>';
        $status = 'error'; 
    }
    // check for bad email address
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $valid = false;
        $display_msg .= 'Please provide a valid email address.<br>';
        $status = 'error'; 
    }

    if( '' == $phone ){
        $valid = false;
        $display_msg .= 'Please put in a valid phone number.<br>';
        $status = 'error'; 
    }


    if( '' == $category ){
        $valid = false;
        $display_msg .= 'Please Choose a Category.<br>';
        $status = 'error'; 
    }

    if('tour' == $category && '' ==date){
        $valid = false;
        $display_msg .= 'Please enter a date.<br>';
        $status = 'error';
    }


    if( '' == $message ){
        $valid = false;
        $display_msg .= 'More information about the concern is required.<br>';
        $status = 'error'; 
    }

    //add any other required fields in the same way

    // if the data is valid, send the mail
    if($valid){
        // IMPORTANT - Change these lines to be appropriate for your needs - IMPORTANT !!!!!!!!!!!!!!!!!!
        $to = "samapitongzabala@gmail.com";            
        $from = "$email";
        $subject = "New Horizons Contact Form";
        // Modify the Body of the message however you like
        $body = "Website Contact Form
            Name:  $name 
            Email:  $email 
            Category:  $category 
            Date:  $date 
            Message:  $message";     
        // Build $headers Variable
        $headers = "From: $from\r\n";
        $headers .= "Content-type: text/plain\r\n"; 

        //send the mail!
        $mail_sent = mail($to, $subject, $body, $email);
    }//end if valid
    //success/error
    if($mail_sent == 1){
        //success      
        mail($email, $subject, $body, 'New Horizons Rehabilitation Center: Your message has been sent');
        $display_msg = 'Your message has been sent. Thank you for contacting us. We will get back to you as soon as possible.';
        $status = 'success';
        //to open a new thank you page use: header( 'Location: thankYou.html' ) ;
    }else{
        //failure
        $display_msg .= 'Sorry, something went wrong, and the form was not submitted. Please try again';
        $status = 'error';  
    }
    
}

?>
