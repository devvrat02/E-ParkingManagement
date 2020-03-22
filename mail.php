<?php
require 'vendor/autoload.php'; // If you're using Composer (recommended)
function mailforward($mnt,$usr,$cont){
$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("epark@dev.in", "Manager");
$email->setSubject("Ticket");
$email->addTo($mnt, $usr);
// $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", $cont);
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
}
// $c='<h1>hello</h1>';
// $a="malviyachetan02@gmail.com";
// $b="chetan";
// mailforward($a,$b,$c);
?>