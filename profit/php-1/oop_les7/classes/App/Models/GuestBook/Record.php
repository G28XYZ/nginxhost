<?php


namespace App\Models\GuestBook;

use App\View;

class Record extends View {

  protected $message;
  protected $author = '';

  public function __construct($message)
  {
    $this->message = $message;
  }

  public function getMessage() {
    return $this->message;
  }

  public function getAuthor()
  {
      return $this->author;
  }
}