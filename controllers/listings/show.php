<?php

$config = require basePath('config/db.php');
$db = new Database($config);

$id = $_GET['id'];
/*
$listing = $db->query('SELECT * FROM listings WHERE id = ' . $id)->fetch(); // not secure - may be open to sql injections

inspect($listing);
*/
$params = [
  'id' => $id,
];
$listing = $db->query('SELECT * FROM listings WHERE id = :id', $params)->fetch();
// :id is the placeholder for $id

// inspect($listing);
loadView('listings/show', [
  'listing' => $listing,
]);
