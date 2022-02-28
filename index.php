<?php
// includo prodotto
include_once __DIR__  . "/classes/product.php";
// includo utente
include_once  __DIR__ . "/classes/user.php";
// includo giochi
include_once __DIR__ . "/classes/toy.php";
// importo cibo
include_once __DIR__ . "/classes/food.php";
// includo accessori
include_once __DIR__ . "/classes/accessories.php";


$user1 = new User([
    "firstName" => "Ciccio",
    "lastName" => "Pasticcio",
    "email" => "cicciopasticcio@gmail.com",
    "registered" => false,
    "cart" => ["item1", "item2"],
    "cardNumber" => 124564789124698,
    "cardType" => "Master Card",
    "cardExpiration" => "2022-03-01",
    "cvv" => 142,
]);
// stampo utente
var_dump($user1);

$product1 = new Product([
    "id"=>1,
    "name"=>"osso per cane",
    "description" => "un osso per cane",
    "price"=>3.0
]);
var_dump($product1);

$toy1=new Toy([
    "id"=>1,
    "name"=>"osso per cane",
    "description" => "un osso per cane",
    "price"=>3.0,
    "isForTraining"=>true,
    "material"=>'plastic'
]);
var_dump($toy1);

$food1=new Food([
    "id"=>2,
    "name"=>"croccantini classici",
    "description" => "croccantini per cani e gatti",
    "price"=>5.0,
    "type" =>"croccantino",
    "brand"=>"cani&gatti",
    "expiration"=>"2023-06-24"
]);
var_dump($food1);


$accessories1=new Accessories([
    "id"=>4,
    "name"=>"cuccia",
    "description" => "una cuccia per gli animali",
    "price"=>6.2,
    "accessoriesType"=>"cuccia per animali"
]);
var_dump($accessories1);