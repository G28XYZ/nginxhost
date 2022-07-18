<?php

spl_autoload_register(function ($className) {
  include __DIR__ . '/classes/' . 
  str_replace('\\', '/', $className) . '.php';
});