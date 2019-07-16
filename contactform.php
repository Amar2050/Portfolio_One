<?php
require_once('functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    
    if(!mandatoriesFieldsAreSet()) {
        $errorFieldsUnset = "Tous les champs doivent être remplient correctement";
        die;
    }

    //Excluding all html code when creating variables

    $name = htmlspecialchars($_POST['name']);
    $subject = htmlspecialchars($_POST['subject']);
    $mailFrom = htmlspecialchars($_POST['mail']);
    $message = htmlspecialchars($_POST['message']);
    
    //checking name

    if(strlen($name)<2) {
        $nameShortError = 'Votre Nom est trop court';
        return false;
    } 
    else if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) { // Excluding special char
        $nameSpecialCharError = 'Nom ne peut etre qu\'en lettres, nombres et espaces';
    }
    
    //checking email

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Email invalide';
    }
    
    //checking subject
    
    if(strlen($subject)<3) {
        $subjectShortError = 'Votre titre de sujet est trop court';
        return false;
    }

    //checking message

    if(strlen($message)<3) {
        $messageShortError = 'Votre message est trop court';
        return false;
    }
    
    // Enter your email , gmail seem doen't work create one with web provider and alias it 
    $mailTo = "email@mail.fr";
    $headers = "De: ".$mailFrom;
    $txt = "Un email de ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?emailenvoyé");
    
    exit(); // terminates the script
}
