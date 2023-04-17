<?php
namespace App\Views\components\users;

use Core\Component;
use Core\View;

class Users extends Component
{
    public function _main()
    {
        self::render(
            View::component('users/list/head'),
            View::component('users/list/body')
        );
    }

    public function _details()
    {
        self::render(
            View::component('users/details/head'),
            View::component('users/details/body')
        );
    }
}