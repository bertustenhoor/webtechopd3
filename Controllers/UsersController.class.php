<?php

declare(strict_types=1);

  class UsersController extends Users {
    public function createUser($naam, $email, $password) : void
    {
      $this->setUser($naam, $email, $password);
    }
  }
