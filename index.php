<?php

require 'connect.php';

$posts = mysqli_query($connect, "SELECT * FROM `posts`");

var_dump($posts);
