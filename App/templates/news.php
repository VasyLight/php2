<?php
include __DIR__ . '/core/header.php';
?>

<div class="container">
    <h1><?php echo $header ?></h1>

    <nav class="navbar navbar-expand-lg navbar-light bg-light m-4 ml-0">
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


    <?php foreach ($news as $n) { ?>
        <div class="card">
            <div class="card-header">
                <?php echo $n->author->name; ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $n->title; ?></h5>
                <th><a type="button" class="btn btn-secondary" href="article.php?id=<?php echo $n->id; ?>">статья</a></th>
            </div>
        </div>
    <?php } ?>
</div>





<?php
include __DIR__ . '/core/footer.php';
?>
