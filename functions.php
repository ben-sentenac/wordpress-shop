<?php


require_once 'inc/theme/Shop2022_Theme.php';


$version = '1.0';


if(class_exists('Shop2022_Theme')) {
    $theme = new Shop2022_Theme($version);
}