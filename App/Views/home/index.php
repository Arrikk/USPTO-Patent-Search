<?php

use Core\Component;
use Core\View;

Component::render(
  View::Component('home/head'),
  View::Component('home/body')
);