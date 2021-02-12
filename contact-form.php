<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$email_from = 'lengrattanak@live.com';

// $email_subject = 'New Form Submission';

$email_body = 'User Name: $name.\n'.
                'User Email: $visitor_email.\n'.
                    'Email Subject: $subject. \n'.
                        'User Message: $message.\n';

$to = 'rleng@live.com';
$headers = 'From: $email_from \r\n';
$headers . = 'Reply-To: $visitor_email \r\n';
mail($to,$subject, $email_body, $headers);

header('Location: index.html');

?>
