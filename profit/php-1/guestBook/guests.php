<?php

function addGuest(string $guest)
{
  $path = __DIR__ . '/guests.txt';
  file_put_contents($path, "\r\n" . $guest, FILE_APPEND);
}

function deleteGuest(string $id)
{
  $path = __DIR__ . '/guests.txt';
  $guests = file($path);
  unset($guests[$id]);
  $newList = $guests;
  file_put_contents($path, $newList);
}

// redirect to back
// header('Location: ' . $_SERVER['HTTP_REFERER']);