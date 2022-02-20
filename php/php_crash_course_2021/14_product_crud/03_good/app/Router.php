<?php
/** User: The codeholic ... */

namespace app;

/**
 * Class MainControllers
 *
 * @package Zura sekniashvili <zurasekhniashvili@gmail.com>
 * @since app/controllers
 */
class Router
{
  public array $getRoutes = [];
  public array $postRoutes = [];
  public function get($url, $fn)
  {
$this->getRoutes[$url] = $fn;
  }
  public function post($url, $fn)
  {
   $this->postRoutes[$url] = $fn;
  }
  public function resolve()
  {
   $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
   $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

   if ($method === 'GET') {
     $fn = $this->getRoutes[$currentUrl] ?? null;
   }else{
      $fn = $this->postRoutes[$currentUrl] ?? null;
   }
    if ($fn) {
        call_user_func($fn, $this);
    }else{
      echo  "page not found";
    }
    }
    public function rebderView($view) // product /index
    {
      include_once __DIR__."/views/$view.php";
    }
  }