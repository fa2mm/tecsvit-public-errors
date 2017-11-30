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
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return boolean
     */
    public function hasErrors()
    {
        return !empty($this->errors);
    }
}
