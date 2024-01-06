<?php
class SigninModel extends Signup{
    public function dataIntoDB(){
        $this->sanitizeInputField();
    }
}