<?php
// this shows 'all jobs'
// loadView('listings/index');
$config = require basePath('config/db.php');
$db = new Database($config);

$listings = $db->query('SELECT * FROM listings limit 6')->fetchAll();

loadView('listings/index', [
  'listings' => $listings
]);