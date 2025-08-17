<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class HomeController extends Controller
{
  public function index()
  {
    $userModel = new User();
    $data = $userModel->getUserData();

    $this->view('home/index', $data);
  }

  public function contact()
  {
    $this->view('home/contact');
  }
}
