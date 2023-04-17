<?php

use Core\Component;
use Core\View;

Component::render(
    View::component('account/body', ['authority' => $authority])
);