<?php
  class UsersContr extends Users {
    public function createUser($naam, $email, $password) {
      $this->setUser($naam, $email, $password);
    }
  }
