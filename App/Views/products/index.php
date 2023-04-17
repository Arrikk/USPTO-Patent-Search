<?php

use Core\Component;
use Core\View;

if($page == LISTS)
Component::render(
    View::component('products/head'),
    View::component('products/body'),
);
if($page == DETAILS)
Component::render(
    View::component('back'),
    View::component('products/details', ['data' => $other]),
);