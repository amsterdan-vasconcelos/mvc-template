<?php

namespace App\Controllers\Errors;

use App\Core\Controller;

class HttpErrorController extends Controller
{
  public function notFound()
  {
    $this->view('errors/notFound');
    http_response_code(404);
  }

  public function internalServerError()
  {
    $this->view('errors/internalServerError');
    http_response_code(500);
  }

  public function unauthorized()
  {
    $this->view('errors/unauthorized');
    http_response_code(403);
  }
}
