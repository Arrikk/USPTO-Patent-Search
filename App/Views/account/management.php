<?php

use Core\Component;
use Core\View;

Component::render(
    View::component('account/management/head', ['other' => $other]),
    View::component('account/management/body', ['other' => $other])
);