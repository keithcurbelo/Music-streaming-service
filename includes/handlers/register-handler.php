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

   

    if(isset($_POST['register-button'])){
        //register button was pressed
        $username = sanitizeFormUsername($_POST['register-username']);
        $firstname = sanitizeFormString($_POST['register-firstname']);
        $lastname = sanitizeFormString($_POST['register-lastname']);
        $email = sanitizeFormString($_POST['register-email']);
        $confirm_email = sanitizeFormString($_POST['register-email2']);
        $password = sanitizeFormPassword($_POST['register-password']);
        $confirm_password = sanitizeFormPassword($_POST['register-password2']);

       
    }

?>