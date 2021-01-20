<?php

    namespace ZubZet\Drivers\PasswordHash\Exceptions;

    use ZubZet\Drivers\PasswordHash\Exceptions\AbstractException;
    use ZubZet\Drivers\PasswordHash\Exceptions\IException;

    class MissingParameter extends AbstractException implements IException {

        public function errorMessage() {
            return "The parameter '{$this->value}' is required and so has to be specified.";
        }
        
    }

?>