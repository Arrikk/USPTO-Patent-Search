<?php

use Core\Component;
use Core\View;

Component::render(
    View::component('companies/head'),
    View::component('companies/tab')
);