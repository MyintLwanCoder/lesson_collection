<?php
/** User: The codeholic ... */

namespace app\controllers;
use app\Router;
/**
 * Class MainControllers
 *
 * @package Zura sekniashvili <zurasekhniashvili@gmail.com>
 * @since app/controllers
 */
class ProductController
{
    public function index(Router $router)
    {
         $router->rebderView('product/index');
    }
    public function create()
    {
        echo 'Create Page';
     }
    public function update()
    {
        echo 'Update page';
    }
    public function delete()
    {
      echo "Delete Page";
    }
}
