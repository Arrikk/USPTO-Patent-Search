<?php
namespace App\Controllers\Search;

use Core\Controller;
use Core\Pipes\Pipes;

class SearchPipe extends Controller
{
    public function pipe(Pipes $data){
        return $data->pipe([
            ''
        ]);
    }
}