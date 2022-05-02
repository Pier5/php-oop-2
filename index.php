<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le 
seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto 
su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php

include_once __DIR__ . '/classes/products.php';
include_once __DIR__ . '/classes/users.php';
include_once __DIR__ . '/classes/creditCard.php';

$user1 = new User('Gino', 'Paoli');
$user2 = new Member('Ciccio', 'Graziani', 'GrCiccio202', 123456);
$userCard = new CreditCard('Ciccio', 'Graziani', 1234567891234, '2022-05-03', 333);
$userCard->setExpirationDate('2022-05-03');
$userCard2 = new CreditCard('Paolo', 'Rossi', 12345233334, '2021-01-05', 124);
$userCard2->setExpirationDate('2021-01-05');
$croquettes = new Food ('Crocchette', 12.50, 'cane', 'brand inventato', '200grammi');
$croquettes->getDiscount(20);

var_dump($user1, $user2, $croquettes, $userCard, $userCard2);


