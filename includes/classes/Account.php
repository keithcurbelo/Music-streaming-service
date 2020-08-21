<?php

    class Account {
        public function __constructor(){}

        public function register(){
            $this->validateUsername($username);
            $this->validateFirstname($firstname);
            $this->validateLastname($lastname);
            $this->validateEmails($email, $confirm_email);
            $this->validatePasswords($password, $confirm_password);
        }
        private function validateUsername($un){}
        private function validateFirstname($fn){}
        private function validateLastname($ln){}
        private function validateEmails($em, $em2){}
        private function validatePasswords($pw, $pw2){}
    };

?>