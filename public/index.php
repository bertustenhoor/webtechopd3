<?php

declare(strict_types=1);

include_once '../Views/UsersView.class.php';
include_once '../Models/Users.class.php';
include_once '../Controllers/UsersController.class.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php
    $usersObj = new UsersView();
    $usersObj->showUser('Bertus');
    $usersObj2 = new UsersController();
    $usersObj2->createUser('No Giet', 'Sanders', '1999-07-07');

  ?>
</body>
</html>
