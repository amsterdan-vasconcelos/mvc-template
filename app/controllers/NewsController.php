<?php

require_once __DIR__ . '/../core/Controller.php';

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
