<?php

namespace app;

class User {
    private string $firstname, $lastname;

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;

        return $this->firstname . '   ' . $this->lastname;
    }
}