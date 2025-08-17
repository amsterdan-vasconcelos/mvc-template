<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/User.php';

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
