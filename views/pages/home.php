<?php

use App\Helpers\Page;

?>

<!doctype html>
<html lang="en">
<?php
Page::part('head');
?>
<body>
<?php
Page::part('navbar');
?>
<div class="container">
    <section class="mt-3 py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Blog</h1>
                <p class="lead text-muted">Something short and leading about the
                    collection below—its contents, the creator, etc. Make it
                    short and sweet, but not too short so folks don’t simply
                    skip over it entirely.</p>
            </div>
        </div>
    </section>
</div>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
