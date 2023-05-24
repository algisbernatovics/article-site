<?php

namespace App\Services\Users;

class UserResponse
{
    protected object $userRepository;

    public function __construct(object $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getResponse(): object
    {
        return $this->userRepository;
    }
}