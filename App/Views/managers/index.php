<?php

use Core\Component;
use Core\View;

if($page == LISTS) Component::render(
    View::component('managers/list/head', ['user' => $other]),
    View::component('managers/list/body', ['user' => $other]),
);

// echo $authority;
if($page == DETAILS) Component::render(
    View::component('back'),
    View::component('managers/details/body', ['authority' => $authority ?? ''])
);