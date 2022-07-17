<?php

require_once __DIR__ . '/View.php';
require_once __DIR__ . '/NewsItem.php';

class News extends View {

  protected $db;
  protected $data = [];

  public function __construct($db)
  {
    $this->db = $db;
    $sql = 'SELECT * FROM news ORDER BY id DESC';
    $news = $this->db->query($sql, []);
    if($news) {
      foreach($news as $newsData) {
        $this->data[] = new NewsItem($newsData);
      }
    }
  }

  public function getAllNews() {
    return $this->data;
  }

  public function getNews($id) {
    $sql = 'SELECT * FROM news WHERE id=:id';
    $newsData = $this->db->query($sql, [':id' => $id]);
    $news = new NewsItem($newsData[0]);
    return $news;
  }

  public function save(NewsItem $news) {

  }

}