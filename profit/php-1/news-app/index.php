<?php

require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/DB.php';

$db = new DB();
$view = new View();

$sql = 'SELECT * FROM news';


if($db->execute($sql)) {
  $news = new News($db);
  $view->assign('news', $news);
  $view->display(__DIR__ . '/templates/main.php');
}