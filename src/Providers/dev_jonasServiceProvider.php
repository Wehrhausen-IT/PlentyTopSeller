<?php

namespace dev_jonas\Providers;

use Plenty\Plugin\ServiceProvider;

class dev_jonasServiceProvider extends ServiceProvider
{
  /*
  Register the ServiceProvider
  */
  public function register()
  {
    $this->getApplication()->register(dev_jonasRouteServiceProvider::class);
  }
}

 ?>
