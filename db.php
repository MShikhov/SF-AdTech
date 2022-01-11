<?php
require '/OpenServer/domains/SFAdTech/libs/rb.php';
R::setup(
    'mysql:host=localhost;dbname=adtech',
    'root',
    'root'
);
session_start();