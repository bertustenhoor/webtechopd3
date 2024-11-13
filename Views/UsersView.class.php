<?php

declare(strict_types=1);

include_once '../Models/Users.class.php';

  class UsersView extends Users {
    public function showUser($naam): void
    {
      $results = $this->getUser($naam);
      echo "Naam: " . $results[0]['name'] . "<br>";
      echo "Email adres: " . $results[0]['email'] . "<br>";
      echo "Aanmaakdatum: " . $results[0]['register_date'];
    }
  }
