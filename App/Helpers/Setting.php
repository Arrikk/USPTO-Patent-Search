<?php
namespace App\Helpers;
class Setting
{
    public static function App()
    {
        return (object) [
            'name' => "Patent Search",
            'description' => "",
            'logo' => "",
            'slug' => '',
            'keywords' => "",
            'author' => "",
            'title' => '',
            'url' => '/'
        ];
    }
}