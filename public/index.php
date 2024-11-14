<?php

declare(strict_types=1);

require '../vendor/autoload.php';

use Controllers\UsersController;
use Views\UsersView;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
</head>
<body>
<?php
include_once '../src/Views/navbar.php' ?>
<div class="container mt-5">
    <h1 class="mb-3">Welcome to ShareBoard!</h1>
    <h2 class="mb-3">Share your latest hot topics with the community</h2>
    <div class="d-flex justify-content-center"><button class="btn btn-primary">Share now!</button></div>

  <?php
    $usersObj = new UsersView();
    $usersObj->showUser('Bertus');
    $usersObj2 = new UsersController();
    $usersObj2->createUser('No Giet', 'Sanders', '1999-07-07');

  ?>
</div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
