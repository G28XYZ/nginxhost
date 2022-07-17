<article>
  <a href="./?id=<?php echo $this->getId() ?>">
    <h2>📰 <?php echo $this->getHeader() ?></h2>
  </a>
  <h3><?php echo $this->getAuthor() ?></h3>
  <p><?php echo isset($_GET['id']) ? $this->getText() : '' ?></p>
</article>