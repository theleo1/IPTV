<?php
$conn = mysqli_connect('localhost','root', '','streamtv');
if (!$conn) {
    die('error' .mysqli_connect_error());
    }

