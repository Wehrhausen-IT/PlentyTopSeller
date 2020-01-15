<?php

namespace TopItems\Providers;

use Plenty\Plugin\ServiceProvider;

class TopItemsServiceProvider extends ServiceProvider
{
  /*
  Register the ServiceProvider
  */
  public function register()
  {
    $this->getApplication()->register(TopItemsRouteServiceProvider::class);
  }
}

 ?>
