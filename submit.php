<!-- <?php 
    if(isset($_POST["submit"])) {
    $to = "slee165@oinside.artcenter.edu"; // this is your Email address
    $from = $_POST['email']; //
    $name = $_POST['name'];
    $consent = "consent";
    $subject = "Copy of your form submission";
            
    mail($to,$name,$consent,$subject);
    mail($from,$consent,$subject); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you. I will contact you shortly.";
}
?> -->
<?php
if ( !empty( $_POST ) ){
    $to = "slee165@oinside.artcenter.edu"; // this is your Email address
    $from = $_POST['email']; //
    $name = $_POST['name'];
    $consent = "consent";
    $subject = "Copy of your form submission";
            
    mail($to,$name,$consent,$subject);
    mail($from,$consent,$subject); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you. I will contact you shortly.";
}
?>