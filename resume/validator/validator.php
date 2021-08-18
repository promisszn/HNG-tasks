<?php

class UserValidator{

    private $data;
    private $errors = [];
    private static $fields = ['first', 'last', 'email', 'phone', 'message'];

    public function __construct($postData) {
        $this->data = $postData;
    }

    public function validateForm() {
        foreach(self::$fields as $field) {
            if(!array_key_exists($field, $this->data)) {
                trigger_error("$field is not present in data");
                return;
            }
        }

        $this->validateFirst();
        $this->validateLast();
        $this->validateEmail();
        $this->validatePhone();
        $this->validateMessage();
        return $this->errors;
    }

    private function validateFirst() {
        $val = trim($this->data['first']);

        if(empty($val)){
            $this->addError('first', 'First Name is required');
        }else {
            if(!preg_match("/^[a-zA-Z'. -]+$/", $val)){
                $this->addError('first','Only letters and white space allowed');
            }
        }
    }

    private function validateLast() {
        $val = trim($this->data['last']);

        if(empty($val)){
            $this->addError('last', 'Last Name is required');
        }else {
            if(!preg_match("/^[a-zA-Z'. -]+$/", $val)){
                $this->addError('last','Only letters and white space allowed');
            }
        }
    }

    private function validateEmail() {
        $val = trim($this->data['email']);

        if(empty($val)){
            $this->addError('email', 'Email is required');
        }else {
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                $this->addError('email','email must be valid');
            }
        }
    }

    private function validatePhone() {
        $val = trim($this->data['phone']);

        if(empty($val)){
            $this->addError('phone', 'Phone is required');
        }else {
            if(!is_numeric($val)){
                $this->addError('phone','phone must be numbers only');
            }
        }
    }

    private function validateMessage() {
        $val = trim($this->data['message']);

        if(empty($val)){
            $this->addError('message', 'Message is required');
        }
    }

    private function addError($key, $val) {
        $this->errors[$key] = $val;
    }

}

?>