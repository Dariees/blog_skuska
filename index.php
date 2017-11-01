<?php
require "master.inc.php";
//query for choosing first 3 posts
$sql = "SELECT * FROM post ORDER BY created_at LIMIT 3";
//writing out all posts - homepage
$posts = $database->query($sql);
//which page will be required in @layout.html.php. format: $page.html.php
$page = "home";
$pageTitle = "Home";
pwdinclude "templates/@layout.html.php";