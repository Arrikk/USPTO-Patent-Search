<?php

use Core\Component;
use Core\View;

Component::render(
    View::component('companies/approved/head'),
    View::component('companies/approved/tab')
);