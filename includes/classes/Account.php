<?php

    class Account {
        private $errors = array();
        public function __constructor(){
            
        }

        public function register($un,$fn,$ln,$em,$em2,$pw,$pw2){
            $this->validateUsername($username);
            $this->validateFirstname($firstname);
            $this->validateLastname($lastname);
            $this->validateEmails($email, $confirm_email);
            $this->validatePasswords($password, $confirm_password);

            if(empty($this->errors)){
                //insert into db
                return true;
            }
            else{
                return false;
            }
        }
        public function getError($err){
            if(!in_array($err, $this->errors)){
                $err = "";
            }
            return "<span class='error-message'>$err</span>";
        }
        
        private function validateUsername($un){
           if(strlen($un) >25 || strlen($un) < 5){
               array_push($this->errors, "Your username must be between 5 and 25 characters");
               return;
           };

           //TODO: check if username exist
        }
        private function validateFirstname($fn){
            if(strlen($un) >25 || strlen($fn) < 2){
                array_push($this->errors, "Your first name must be between 2 and 25 characters");
                return;
            };
        }
        private function validateLastname($ln){
            if(strlen($un) >25 || strlen($fn) < 2){
                array_push($this->errors, "Your last name must be between 2 and 25 characters");
                return;
            };
        }
        private function validateEmails($em, $em2){
            if($em != $em2){
                array_push($this->errors, "Your emails must match");
                return;
            }
            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                array_push($this->errors, "Your emails is invalid");
                return;
            }
            //TODO: check that username/email has not been used
        }
        private function validatePasswords($pw, $pw2){
            if($pw != $pw2){
                array_push($this->errors, "Your passwords must match");
                return;
            }
            if(preg_match('/[^A-Za-z0-9]/',$pw)){
                array_push($this->errors, "Your passwords can only contain numbers and letters");
                return;
            }
            if(strlen($pw) > 30 || strlen($pw) < 5){
                array_push($this->errors, "Your passwords must be between 5 and 30 characters");
                return;
            }
        }
    };

?>