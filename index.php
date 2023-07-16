<?php

require __DIR__ . '/autoload.php';

require __DIR__ . '/View/header.php';


?>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Text</th>
            <th scope="col">Comment</th>
            <th scope="col">Go page</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <?php
            $users = (new App\Models\News)->findLastNews(3);
            ?>
        </tr>


        </tbody>
    </table>


<?php
require __DIR__ . '/View/footer.php';

