<?php

namespace Plusemon\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function register()
    {
        //   
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . "/views", 'Contact');
        $this->mergeConfigFrom(__DIR__."/config/contact.php",'to');
    }
}
