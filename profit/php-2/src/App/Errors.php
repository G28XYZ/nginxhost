<?php

namespace App;

use Exception;
use Countable;
use Throwable;

class Errors extends Exception implements Countable
{
    protected array $errors;

    public function addError(Throwable $e) {
        $this->errors[] = $e;
    }

    public function getErrors(): array {
        return $this->errors;
    }

    public function count() {
        return count($this->errors);
    }
}
