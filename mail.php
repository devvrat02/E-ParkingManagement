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
    return "mail send";
} catch (Exception $e) {
    return 'Caught exception: '. $e->getMessage() ."\n";
}
}
function ticket($username,$name,$parking,$slot,$intime,$extime,$cost){
$content="
    <body style= 'background-color:#343a40; border: 1px solid rgb(11, 12, 12); padding: 10 px;'>
        <h2 style='color:white;  text-align: center; font-size: 30; font-family: 'Times New Roman', Times, serif;'> E-parking </h2> 
        <section class='bg-dark border-light clean-block clean-hero' style='color:white; background-color:rgba(9, 162, 255, 0.85); border: 10px solid #898989; padding: 5px; text-align: center'>
            <div class='text'>
                <h1 style ='font-size: 45; font-family: cursive ;'>Booking Confirmed!!</h1>
                <p style='font-size: 25'>Username: $username<br> Parking: $parking<br> Slot: $slot<br> Entry timeTime: $intime <br> Exit Time: $extime<br> Cost: $cost</p>
            </div>
        </section>
    </body>
";
     mailforward($username,$name,$content);
}
?>
