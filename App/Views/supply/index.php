<?php

use Core\Component;
use Core\View;

if($page == LISTS):
Component::render(
    View::component('supply/list/head'),
    View::component('supply/list/body', ['supplies' => $other])
);
else:
Component::render(
    View::component('supply/new/head'),
    View::component('supply/new/body')
);
endif;