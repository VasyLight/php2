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

    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($users as $user) { ?>
                <tr>
                    <th><?php echo $user->name; ?></th>
                    <th><?php echo $user->email; ?></th>
                    <th><a type="button" class="btn btn-secondary" href="article.php?id=<?php echo $user->id; ?>">статья</a></th>
                </tr>
            <?php } ?>

            </tbody>
        </table>

    </div>

<?php
include __DIR__ . '/core/footer.php';
?>