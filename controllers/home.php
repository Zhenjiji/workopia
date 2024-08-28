<?php
// this shows the main home page (recent) at home.view.php

$config = require basePath('config/db.php');
$db = new Database($config);

$listings = $db->query('SELECT * FROM listings ORDER BY created_at DESC LIMIT 3')->fetchAll();

// inspect($listings);

loadView('home', ['listings' => $listings]);