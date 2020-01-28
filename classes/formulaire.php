<?php

class formulaire
{
  private $method = "post";
  private $url = "";
  private $uploadFile = false;

  public function displayForm() : string
  {
    $html = '<form ';
    $html .= 'method "' . $this->method .'" ';
    $html .= 'action "' . $this->url .'" ';
    if (!$this->uploadFile) {
      $html .= ' enctype="multipart/form-data"';
    }
    $html .= '>';

    $html .= '</form>';
    return $html;
  }
}

 ?>
