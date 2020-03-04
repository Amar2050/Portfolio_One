<?php
//CONTACT FORM VALIDATION

function mandatoriesFieldsAreSet(){
    //checking 4 fields of the contact form
    if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['subject']) && isset($_POST['message'])){
		return true;
	}

	return false;
}

// primary validate function
function validate($str) {
    return trim(htmlspecialchars($str));
}