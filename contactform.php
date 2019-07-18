<!-- Contact -->
            <div id="contact" class="pt-5 pb-5">
                <h2 class="text-center mb-5">Contactez-moi</h2>
                <form class="border rounded shadow pb-5 pt-5 col-12 col-sm-10 col-md-7 col-lg-6 col-xl-6 m-auto text-center" method="post">
                    
                    <label for="name" class="text-danger">Nom *</label>                  
                    <input class="form-control text-center" type="text" id="name" name="name" placeholder="Votre prénom et nom de famille" required>
                    
                    <label for="email" class="text-danger p-1">E-mail *</label>
                    <input class="form-control text-center p-2" type="email" id="email" name="mail" placeholder="Votre e-mail"required>
                    
                    <label for="subject" class="text-danger p-1">Sujet *</label>
                    <input class="form-control text-center p-2" type="text" id="subject" name="subject" placeholder="Le sujet de votre message"required>
                    
                    <label for="message" class="text-danger p-1">Message *</label>
                    <textarea class="form-control text-center p-2" type="text" id="message" name="message" placeholder="Pensez à communiquer votre numéro de téléphone si vous souhaitez être rappelé"required></textarea><br>
                    
                    <input type="submit" name="submit" value="Envoyez" class="btn btn-success">
                </form>
            </div>
<!-- End Contact -->
<?php
require_once('functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    if(!mandatoriesFieldsAreSet()) {
        $errorFieldsUnset = "Tous les champs doivent être remplient correctement";
        echo "<div class='border rounded shadow pt-2 pb-2 col-12 col-sm-10 col-md-7 col-lg-6 col-xl-6 m-auto text-center text-danger error-message'>
        <p<i class='fas fa-exclamation-triangle text-danger'></i></p>"."<p>".$errorFieldsUnset."</p>"."</div>";
    }

    //Excluding all html code when creating variables

    $name = htmlspecialchars($_POST['name']);
    $subject = htmlspecialchars($_POST['subject']);
    $email = htmlspecialchars($_POST['mail']);
    $message = htmlspecialchars($_POST['message']);
    
    
    $errors = array();

    //checking name
    if(strlen($name)<3) {
        $errors[] = "Votre Nom est trop court";
        // print_r($errors);
        
    }
    // Excluding special char 
    else if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) { 
        $errors[] = 'Nom ne peut etre qu\'en lettres, nombres et espaces';
        // print_r($errors);
    }
    
    //checking email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email invalide';
        // print_r($errors);
    }
    
    //checking subject
    if(strlen($subject)<3) {
        $errors[] = 'Votre titre de sujet est trop court';
        // print_r($errors);
        
    }

    //checking message
    if(strlen($message)<3) {
        $errors[] = 'Votre message est trop court';
        // print_r($errors);
    }

    foreach ($errors as $error) {
        echo "<div class='border rounded shadow pt-2 pb-2 col-12 col-sm-10 col-md-7 col-lg-6 col-xl-6 m-auto text-center text-danger error-message'>
        <p<i class='fas fa-exclamation-triangle text-danger'></i></p>"."<p>".$error."</p>"."</div>";
        }
    // If the message is longer than 70 char wrapping 
    $message = wordwrap($message, 70, "\r\n");
    // Enter your email , gmail seem doen't work create one with web provider and alias it 
    
    $mailTo = "email@mail.fr";
    $headers = "De: ".$email;
    $txt = "Un email de ".$name.".\n\n".$message;
    // mail($mailTo, $subject, $txt, $headers);
    // if (mail($mailTo, $subject, $txt, $headers)){
    //     echo "<div class='border rounded shadow pt-2 pb-2 col-12 col-sm-10 col-md-7 col-lg-6 col-xl-6 m-auto text-center text-danger error-message'>
    //     <p<i class='fas fa-smile-wink text-warning'></i></p>
    //     <p>Votre message a été envoyé avec succès</p>
    //     </div>";
    // }
}

?>

