<?php
namespace App\Controllers;

use App\Auth;
use Core\Controller;
use Core\Http\Req;
use Core\Http\Res;
use Core\Pipes\Pipes;
use Core\View;

class Home extends Controller
{
  /**
   * Index Controller
   * index page, render login form for application
   * @return void
   */
    public function index()
    {
      View::page('auth/login.html', ['title' => 'Login']);
    }
    /**
     * Set Login Session Controller
     */
    public function setLogin(Pipes $data)
    {
      $data->pipe([
        'email' => $data->login()->isequal('bz@bz.dev')->login,
        'password' => $data->password()->isequal('gmail1')->password
      ]);
      
      $_SESSION['loggedIn'] = true;
      Res::json(['LoggedIn' => true]);
    }

    public function logout()
    {
      Auth::logout();
      $this->redirect('/');
    }
}