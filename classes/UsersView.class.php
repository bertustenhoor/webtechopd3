<?php
  class UsersView extends Users {
    public function showUser($naam) {
      $results = $this->getUser($naam);
      echo "Naam: " . $results[0]['name'] . "<br>";
      echo "Email adres: " . $results[0]['email'] . "<br>";
      echo "Aanmaakdatum: " . $results[0]['register_date'];
    }
  }
