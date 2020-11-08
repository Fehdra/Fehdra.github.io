<?php
             $error    = ''; // error message
             $name     = ''; // sender's name
             $email    = ''; // sender's email address
             $company  = ''; // company name
             $subject  = ''; // subject
             $comment  = ''; // the message itself

        if(isset($_POST['send']))
        {
             $name     = $_POST['name'];
             $email    = $_POST['email'];
             $company  = $_POST['company'];
             $subject  = $_POST['subject'];
             $comment  = $_POST['comment'];

            if($error == '')
            {
                if(get_magic_quotes_gpc())
                {
                    $message = stripslashes($message);
                }

                // the email will be sent here
                // make sure to change this to be your e-mail
                $to      = "Fehdra@comcast.net";

                // the email subject
                // '[Contact Form] :' will appear automatically in the subject.
                // You can change it as you want

                $subject = '[Contact Form] : ' . $subject;

                // the mail message ( add any additional information if you want )
                $msg     = "From : $name \r\ne-Mail : $email \r\nCompany : $company \r\nSubject : $subject \r\n\n" . "Message : \r\n$message";

                mail($to, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");
            }
        }
        if(!isset($_POST['send']) || $error != '')
        {

              header("location: ?????????.com");

        }
        ?>