<?php

$connection = mysqli_connect('localhost', 'root', '', 'cms');

if(!$connection) {
    die("DATABASE CONNECTION FAILED" .mysqli_error($connection));
}
