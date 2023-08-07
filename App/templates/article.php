<?php
include __DIR__ . '/core/header.php';
?>

<h1><?php echo $header ?></h1>

<nav class="navbar navbar-expand-lg navbar-light bg-light m-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="../news.php">News</a>
                <a class="nav-link" href="admin.php">Admin panel</a>
            </div>
        </div>
    </div>
</nav>

<a class="btn btn-primary m-4" href="news.php">< назад</a>



    <div class="card m-4">
        <div class="card-header">
            <?php echo $article->comments; ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $article->title; ?></h5>
            <p class="card-text"><?php echo $article->lead; ?></p>
            <a href="#" class="btn btn-primary">Подробнее</a>
        </div>
    </div>



<?php
include __DIR__ . '/core/footer.php';
?>
