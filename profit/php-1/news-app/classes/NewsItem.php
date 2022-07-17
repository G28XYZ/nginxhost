<?php

require_once __DIR__ . '/View.php';

class NewsItem extends View {

  protected $header;
  protected $author;
  protected $text;
  protected $id;

  public function __construct(array $newsData=['header'=>'', 'author'=>'unknown', 'text'=>'', 'id'=>''])
  {
    $this->header = $newsData['header'];
    $this->author = $newsData['author'];
    $this->text = $newsData['text'];
    $this->id = $newsData['id'];
  }

  public function getHeader() {
    return $this->header;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function getText()
  {
    return $this->text;
  }

  public function getId()
  {
    return $this->id;
  }

}