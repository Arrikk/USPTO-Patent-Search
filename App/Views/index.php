<?php

use App\Helpers\Setting;
use App\Views\components\app\App;
use Core\View;

# start html tag containing the head and other metas
App::render(
     View::component('app/html', ['title' => $title ?? Setting::App()->title, 'other' => $_other ?? null]),
     View::component('app/topbar'),
     App::body( 
          dirname(__FILE__) .'/'. $__page . '.php',
          $page ?? 'list',
          $other = $_other ?? null
     ),
     View::component('app/htmlend')
);
# create topbar across all pages
$file = explode('/', $__page);
# Make a dynamic script file for new pages
App::script( 
     dirname(__FILE__) .'/'. $file[0].'/'.$file[0].'.js.html'
);