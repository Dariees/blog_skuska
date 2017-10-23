<?php
require "master.inc.php";
//query for choosing post
$sqlPost = "SELECT * FROM post ORDER BY created_at";
//writing out selected post
$selectedPost = $database->query($sqlPost)->fetch();
//writing out comments
$sqlComments = "SELECT * FROM comment";
$comments = $database->query($sqlComments);
//which page will be required in @layout.html.php. format: $page.html.php
$page = "article";
$pageTitle = "Article";
include "templates/@layout.html.php";