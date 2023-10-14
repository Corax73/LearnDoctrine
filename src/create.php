<?php

use LearnDoctrine\Entity\Product;
use LearnDoctrine\Entity\User;

require "../config/bootstrap.php";

$user = new User();
$user->setName('Test1');
$user->setPassword('12345678');

$entityManager->persist($user);
$entityManager->flush();

$product = new Product();
$product->setTitle('Test2');
$product->setPrice('12345678');

$entityManager->persist($product);
$entityManager->flush();

