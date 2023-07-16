<?php



require __DIR__ . '/autoload.php';

require __DIR__ . '/View/header.php';


$id = $_GET['id'];
$article = new App\Models\Article();
$article->show((int)$id);
?>

<h2>Article <?php echo $id; ?></h2>

<h2><?php  echo 'Title: ' . $article->article['title']; ?></h2>

<p><?php  echo $article->article['text']; ?></p>

<p><?php  echo 'Comments: ' .  $article->article['comments']; ?></p>




<?php
require __DIR__ . '/View/footer.php';
