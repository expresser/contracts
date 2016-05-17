<?php namespace Expresser\Contracts\Image;

interface Renderable {

  public function render($classNames = null, $alt = null, $title = null);
}
