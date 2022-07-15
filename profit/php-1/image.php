<?php

$images = [
  1 => 'https://images.unsplash.com/photo-1459802071246-377c0346da93?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=818&q=80',
  2 => 'https://images.unsplash.com/photo-1594372365401-3b5ff14eaaed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80',
  3 => 'https://images.unsplash.com/photo-1619963258837-b83f3406cfcd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
];

$id = $_GET['id'] ?? null;
if($id) {
  ?>
<img src="<?php echo $images[$id]; ?>" alt="">
<?php
}