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
    <h2 class="mt-3">Sign up</h2>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email
                address</label>
            <input type="email" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email
                with anyone else.
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1"
                   class="form-label">Password</label>
            <input type="password" class="form-control"
                   id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me
                out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
