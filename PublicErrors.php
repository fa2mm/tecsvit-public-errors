<?php

namespace \tecsvit;

/**
 * Class PublicErrors
 *
 * @property array $errors
 */
class PublicErrors
{
    private $errors = [];

    /**
     * @param string $message
     * @return void
     */
    public function addError($message)
    {
        $this->errors[] = $message;
    }

    /**
     * @return void
     */
    public function clearErrors()
    {
        $this->errors = [];
    }

    /**
     * @return void
     */
    public function getErrors()
    {
        $this->errors = [];
    }
}
