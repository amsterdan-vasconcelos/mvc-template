<?php

namespace App\Controllers;

use App\Core\Controller;

class NewsController extends Controller
{
  public function index()
  {
    $this->view('news/index');
  }

  public function news($idNews = null)
  {
    $this->view('news/news', ['idNews' => $idNews]);
  }
}
