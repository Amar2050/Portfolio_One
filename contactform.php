<?php
if (issset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    
    // Enter your email , gmail seem doen't work create one with web provider and alias it 
    $mailTo = "email@mail.fr";
    $headers = "De: ".$mailFrom;
    $txt = "Un email de ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
