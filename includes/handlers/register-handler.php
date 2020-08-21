<?php
     function sanitizeFormUsername($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ","",$inputText);
        return $inputText;
    };
     function sanitizeFormPassword($inputText){
        $inputText = strip_tags($inputText);
        return $inputText;
    };
     function sanitizeFormString($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ","",$inputText);
        $inputText = ucfirst(strtolower($inputText));
        return $inputText;
    };

    function validateUsername($un){};
    function validateFirstname($fn){};
    function validateLastname($ln){};
    function validateEmails($em, $em2){};
    function validatePasswords($pw, $pw2){};

    if(isset($_POST['register-button'])){
        //register button was pressed
        $username = sanitizeFormUsername($_POST['register-username']);
        $firstname = sanitizeFormString($_POST['register-firstname']);
        $lastname = sanitizeFormString($_POST['register-lastname']);
        $email = sanitizeFormString($_POST['register-email']);
        $confirm_email = sanitizeFormString($_POST['register-email2']);
        $password = sanitizeFormPassword($_POST['register-password']);
        $confirm_password = sanitizeFormPassword($_POST['register-password2']);

        validateUsername($username);
        validateFirstname($firstname);
        validateLastname($lastname);
        validateEmails($email, $confirm_email);
        validatePasswords($password, $confirm_password);
    }

?>